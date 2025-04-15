<?php

namespace App\Controller\Admin;

use App\Entity\Pack;
use App\Entity\DemandePack;
use App\Entity\Event;
use App\Entity\Materielle;
use App\Entity\ReservMat;
use App\Entity\ReserverLieu;
use App\Entity\ReservationPerso;
use App\Entity\ReservationPersonnel;
use App\Entity\ReservationMaterielle;
use App\Entity\ReservationLieu;
use App\Repository\PackRepository;
use App\Repository\DemandePackRepository;
use App\Repository\EventRepository;
use App\Repository\MaterielleRepository;
use App\Repository\PersonnelRepository;
use App\Repository\LieuRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\NotificationsAdminRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\NotificationService;
use App\Entity\NotificationAdmin;
use Symfony\Bundle\SecurityBundle\Security;

#[Route('/admin/customize-pack', name: 'admin_customize_pack_')]
class CustomizePackController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private PackRepository $packRepository;
    private DemandePackRepository $demandePackRepository;
    private EventRepository $eventRepository;
    private MaterielleRepository $materielleRepository;
    private PersonnelRepository $personnelRepository;
    private LieuRepository $lieuRepository;
    private UtilisateurRepository $utilisateurRepository;
    private NotificationsAdminRepository $notificationsAdminRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        PackRepository $packRepository,
        DemandePackRepository $demandePackRepository,
        EventRepository $eventRepository,
        MaterielleRepository $materielleRepository,
        PersonnelRepository $personnelRepository,
        LieuRepository $lieuRepository,
        UtilisateurRepository $utilisateurRepository,
        NotificationsAdminRepository $notificationsAdminRepository
    ) {
        $this->entityManager = $entityManager;
        $this->packRepository = $packRepository;
        $this->demandePackRepository = $demandePackRepository;
        $this->eventRepository = $eventRepository;
        $this->materielleRepository = $materielleRepository;
        $this->personnelRepository = $personnelRepository;
        $this->lieuRepository = $lieuRepository;
        $this->utilisateurRepository = $utilisateurRepository;
        $this->notificationsAdminRepository = $notificationsAdminRepository;
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(int $id, Request $request): Response
    {
        $demandePack = $this->demandePackRepository->find($id);
        
        if (!$demandePack) {
            throw $this->createNotFoundException('Demande pack not found');
        }
        
        // Mark the notification as read
        $notification = $this->notificationsAdminRepository->findOneBy(['demandePack' => $id]);
        if ($notification && $notification->getStatut() === 'NON_LU') {
            $notification->setStatut('LU');
            $this->entityManager->flush();
        }
        
        // Get the original pack
        $pack = $demandePack->getPack();
        
        if (!$pack) {
            throw $this->createNotFoundException('Pack not found');
        }

        // Get the client information
        $client = $this->utilisateurRepository->find($demandePack->getUtilisateurId());
        
        // Get all available materielle with their quantities
        $materielles = $this->materielleRepository->findAll();
        
        // Get all available personnel
        $personnel = $this->personnelRepository->findAll();
        
        // Get all available locations
        $locations = $this->lieuRepository->findAll();
        
        // Get the event date from the associated Event
        $eventDate = null;
        if ($demandePack->getEvent()) {
            $eventDate = $demandePack->getEvent()->getDate();
        }
        
        return $this->render('admin/notifications/customize_pack.html.twig', [
            'demandePack' => $demandePack,
            'originalPack' => $pack,
            'client' => $client,
            'materielles' => $materielles,
            'personnel' => $personnel,
            'locations' => $locations,
            'eventDate' => $eventDate
        ]);
    }

    #[Route('/{id}/update', name: 'update', methods: ['POST'])]
    public function update(Request $request, int $id): JsonResponse
    {
        $demandePack = $this->demandePackRepository->find($id);
        
        if (!$demandePack) {
            throw $this->createNotFoundException('Demande pack not found');
        }

        $data = json_decode($request->getContent(), true);
        
        // Get or create the event for this pack
        $event = $demandePack->getPack()->getEvent();
        if (!$event) {
            $event = new Event();
            $event->setUtilisateur($this->utilisateurRepository->find($demandePack->getUtilisateurId()));
            $event->setStatut('CUSTOMIZED');
            $event->setDateDebut(new \DateTime());
            $event->setDateFin(new \DateTime());
            $this->entityManager->persist($event);
            $demandePack->getPack()->setEvent($event);
            // Flush immédiatement pour obtenir un ID d'événement valide
            $this->entityManager->flush();
        }

        // Delete existing reservations
        $this->entityManager->createQueryBuilder()
            ->delete(ReservMat::class, 'r')
            ->where('r.event = :event')
            ->setParameter('event', $event)
            ->getQuery()
            ->execute();

        $this->entityManager->createQueryBuilder()
            ->delete(ReserverLieu::class, 'r')
            ->where('r.event_id = :eventId')
            ->setParameter('eventId', $event->getId())
            ->getQuery()
            ->execute();

        $this->entityManager->createQueryBuilder()
            ->delete(ReservationPerso::class, 'r')
            ->where('r.event = :event')
            ->setParameter('event', $event)
            ->getQuery()
            ->execute();

        // Process selected materielle
        if (isset($data['materielles'])) {
            foreach ($data['materielles'] as $materielleData) {
                $materielle = $this->materielleRepository->find($materielleData['id']);
                if ($materielle) {
                    $reservation = new ReservMat();
                    $reservation->setMaterielle($materielle);
                    $reservation->setEvent($event);
                    $reservation->setQuantite($materielleData['quantity']);
                    $reservation->setUtilisateur($this->utilisateurRepository->find($demandePack->getUtilisateurId()));
                    $this->entityManager->persist($reservation);
                }
            }
        }

        // Process selected location - ensure only one location is selected
        if (isset($data['location']['id']) && is_numeric($data['location']['id'])) {
            $location = $this->lieuRepository->find((int)$data['location']['id']);
            if ($location) {
                // Remove any existing location reservations for this event
                $existingReservations = $this->entityManager->getRepository(ReserverLieu::class)
                    ->findBy(['event_id' => $event->getId()]);
                foreach ($existingReservations as $existingReservation) {
                    $this->entityManager->remove($existingReservation);
                }
                
                $reservation = new ReserverLieu();
                // Utiliser la relation objet pour définir le lieu et l'événement
                $reservation->setLieu($location);
                $reservation->setEvent($event); // Définir l'objet Event directement
                $reservation->setEvent_id($event->getId()); // Définir aussi l'ID pour compatibilité
                $reservation->setDate_reservation(new \DateTime());
                $reservation->setStatus('pending');
                $reservation->setCreated_at(new \DateTime());
                $this->entityManager->persist($reservation);
            }
        }

        // Process selected personnel
        if (isset($data['personnel'])) {
            foreach ($data['personnel'] as $personnelData) {
                $personnel = $this->personnelRepository->find($personnelData['id']);
                if ($personnel) {
                    $reservation = new ReservationPerso();
                    $reservation->setIdP($personnel->getIdP());
                    $reservation->setEvent($event);
                    $this->entityManager->persist($reservation);
                }
            }
        }

        // Update pack status
        $demandePack->setStatut('CONFIRMÉ');
        
        // Calculate total price based on selections
        $totalPrice = $this->calculateTotalPrice($data);
        $demandePack->setPrix($totalPrice);

        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'message' => 'Pack customization saved successfully',
            'totalPrice' => $totalPrice
        ]);
    }

    private function calculateTotalPrice(array $data): float
    {
        $totalPrice = 0.0;

        // Calculate materielle cost
        if (isset($data['materielles'])) {
            foreach ($data['materielles'] as $materielleData) {
                $materielle = $this->materielleRepository->find($materielleData['id']);
                if ($materielle) {
                    $totalPrice += $materielle->getPrixMat() * $materielleData['quantity'];
                } else {
                    // Fallback to the price provided in the request if the materielle is not found
                    $totalPrice += $materielleData['price'] * $materielleData['quantity'];
                }
            }
        }

        // Add location cost
        if (isset($data['location']) && $data['location'] !== null) {
            $location = $this->lieuRepository->find($data['location']['id']);
            if ($location) {
                $totalPrice += floatval($location->getPrice());
            }
        }

        // Add personnel cost
        if (isset($data['personnel'])) {
            foreach ($data['personnel'] as $personnelData) {
                $totalPrice += $personnelData['price'];
            }
        }

        return $totalPrice;
    }

    private function createNotifications(DemandePack $demandePack): void
    {
        // Notify client
        $clientNotification = new NotificationAdmin();
        $clientNotification->setUtilisateurId($demandePack->getUtilisateurId());
        $clientNotification->setMessage('Your pack has been customized and is waiting for your confirmation');
        $clientNotification->setDemandePackId($demandePack->getId());
        
        $this->entityManager->persist($clientNotification);
        $this->entityManager->flush();
    }

    private function handleSelectedItems(Pack $pack, array $items): void
    {
        foreach ($items as $item) {
            switch ($item['type']) {
                case 'Materielle':
                    $this->addMaterielle($pack, $item);
                    break;
                case 'Personnel':
                    $this->addPersonnel($pack, $item);
                    break;
                case 'Location':
                    $this->addLocation($pack, $item);
                    break;
            }
        }
    }

    // Add helper methods for materielle, personnel, and locations...
}