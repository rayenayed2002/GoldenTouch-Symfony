<?php

namespace App\Controller\Admin;

use App\Entity\Pack;
use App\Entity\DemandePack;
use App\Entity\Event;
use App\Entity\Materielle;
use App\Repository\PackRepository;
use App\Repository\DemandePackRepository;
use App\Repository\EventRepository;
use App\Repository\MaterielleRepository;
use App\Repository\PersonnelRepository;
use App\Repository\LieuRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\NotificationService;
use App\Entity\NotificationAdmin;
use App\Entity\ReservationMaterielle;
use App\Entity\ReservationLieu;
use App\Entity\ReservationPersonnel;
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

    public function __construct(
        EntityManagerInterface $entityManager,
        PackRepository $packRepository,
        DemandePackRepository $demandePackRepository,
        EventRepository $eventRepository,
        MaterielleRepository $materielleRepository,
        PersonnelRepository $personnelRepository,
        LieuRepository $lieuRepository,
        UtilisateurRepository $utilisateurRepository
    ) {
        $this->entityManager = $entityManager;
        $this->packRepository = $packRepository;
        $this->demandePackRepository = $demandePackRepository;
        $this->eventRepository = $eventRepository;
        $this->materielleRepository = $materielleRepository;
        $this->personnelRepository = $personnelRepository;
        $this->lieuRepository = $lieuRepository;
        $this->utilisateurRepository = $utilisateurRepository;
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(int $id, Request $request): Response
    {
        $demandePack = $this->demandePackRepository->find($id);
        
        if (!$demandePack) {
            throw $this->createNotFoundException('Demande pack not found');
        }
        
        // Get the original pack
        $pack = $this->packRepository->find($demandePack->getPackId());
        
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
    public function update(Request $request, int $id): Response
    {
        $demandePack = $this->demandePackRepository->find($id);
        
        if (!$demandePack) {
            throw $this->createNotFoundException('Demande pack not found');
        }

        $data = json_decode($request->getContent(), true);

        // Validate and process selected materielle
        if (isset($data['materielles'])) {
            foreach ($data['materielles'] as $materielleData) {
                $materielle = $this->materielleRepository->find($materielleData['id']);
                if ($materielle && $materielleData['quantity'] <= $materielle->getQuantity()) {
                    // Create materielle reservation
                    $reservation = new ReservationMaterielle();
                    $reservation->setMaterielle($materielle);
                    $reservation->setQuantity($materielleData['quantity']);
                    $reservation->setDemandePack($demandePack);
                    $this->entityManager->persist($reservation);
                }
            }
        }

        // Process selected location
        if (isset($data['location'])) {
            $location = $this->lieuRepository->find($data['location']);
            if ($location) {
                $reservation = new ReservationLieu();
                $reservation->setLieu($location);
                $reservation->setDemandePack($demandePack);
                $this->entityManager->persist($reservation);
            }
        }

        // Process selected personnel
        if (isset($data['personnel'])) {
            foreach ($data['personnel'] as $personnelId) {
                $personnel = $this->personnelRepository->find($personnelId);
                if ($personnel) {
                    $reservation = new ReservationPersonnel();
                    $reservation->setPersonnel($personnel);
                    $reservation->setDemandePack($demandePack);
                    $this->entityManager->persist($reservation);
                }
            }
        }

        // Update pack status
        $demandePack->setStatut('CUSTOMIZED');
        
        // Calculate total price based on selections
        $totalPrice = $this->calculateTotalPrice($data);
        $demandePack->setTotalPrice($totalPrice);

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
                    $totalPrice += $materielle->getPrice() * $materielleData['quantity'];
                }
            }
        }

        // Add location cost
        if (isset($data['location'])) {
            $location = $this->lieuRepository->find($data['location']);
            if ($location) {
                $totalPrice += $location->getPrice();
            }
        }

        // Add personnel cost
        if (isset($data['personnel'])) {
            foreach ($data['personnel'] as $personnelId) {
                $personnel = $this->personnelRepository->find($personnelId);
                if ($personnel) {
                    $totalPrice += $personnel->getPrice();
                }
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