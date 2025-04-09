<?php

namespace App\Controller;

use App\Entity\ReservationPerso;
use App\Entity\Personnel;
use App\Entity\Event;
use App\Repository\PersonnelRepository;
use App\Repository\EventRepository;
use App\Repository\UtilisateurRepository;
use Tattali\CalendarBundle\TattaliCalendarBundle;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/reservation/perso')]
class ReservationPersoController extends AbstractController
{
    #[Route('/', name: 'app_reservation_perso_index', methods: ['GET'])]
    public function index(
        PersonnelRepository $personnelRepository,
        EventRepository $eventRepository,
        EntityManagerInterface $entityManager,
        Request $request
    ): Response {
        $selectedEventId = $request->query->get('event');
        $reservations = $entityManager->getRepository(ReservationPerso::class)->findAll();
        
        return $this->render('reservation_perso/index.html.twig', [
            'personnels' => $personnelRepository->findAll(),
            'events' => $eventRepository->findAll(),
            'reservations' => $reservations,
            'selectedEventId' => $selectedEventId
        ]);
    }

    #[Route('/new/{idP}/{id}', name: 'app_reservation_perso_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        int $idP,
        int $id,  // This is the Event ID
        EntityManagerInterface $entityManager,
        PersonnelRepository $personnelRepository,
        EventRepository $eventRepository
    ): Response {
        $personnel = $personnelRepository->find($idP);
        $event = $eventRepository->find($id);
        
        if (!$personnel || !$event) {
            throw $this->createNotFoundException('Personnel ou Event non trouvé');
        }

        // Vérifier si la réservation existe déjà
        $existingReservation = $entityManager->getRepository(ReservationPerso::class)
            ->findOneBy([
                'idP' => $idP,
                'event' => $event  // Changed from 'id' to 'event'
            ]);
        
        if ($existingReservation) {
            $this->addFlash('warning', 'Cette réservation existe déjà');
            return $this->redirectToRoute('app_reservation_perso_index', ['event' => $id]);
        }

        $reservation = new ReservationPerso();
        $reservation->setIdP($idP);
        $reservation->setEvent($event);  // Changed from setId() to setEvent()

        try {
            $entityManager->persist($reservation);
            $entityManager->flush();
            $this->addFlash('success', 'Réservation créée avec succès!');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de la création: '.$e->getMessage());
        }
        
        return $this->redirectToRoute('app_reservation_perso_index', ['event' => $id]);
    }

    #[Route('/check-cancel/{idR}/{eventId}', name: 'app_reservation_perso_check_cancel', methods: ['GET'])]
    public function checkCancel(
        int $idR,
        int $eventId,
        EntityManagerInterface $entityManager,
        EventRepository $eventRepository
    ): JsonResponse {
        $reservation = $entityManager->getRepository(ReservationPerso::class)->find($idR);
        $now = new \DateTime();
        
        if (!$reservation) {
            return $this->json(['canCancel' => false, 'reason' => 'not_found']);
        }
    
        $event = $eventRepository->find($eventId);
        if (!$event) {
            return $this->json(['canCancel' => false, 'reason' => 'event_not_found']);
        }
    
        $eventDate = $event->getDate();
        
        // Calculer la différence entre maintenant et la date de l'événement
        $interval = $now->diff($eventDate);
        $hoursDifference = ($interval->days * 24) + $interval->h;
    
        // Si l'événement est dans moins de 24h
        if ($hoursDifference < 24 && $eventDate > $now) {
            return $this->json(['canCancel' => false, 'reason' => 'soon']);
        }
    
        // Si l'événement est passé, permettre l'annulation
        if ($eventDate < $now) {
            return $this->json(['canCancel' => true, 'reason' => 'past_allowed']);
        }
    
        // Sinon, permettre l'annulation
        return $this->json(['canCancel' => true, 'reason' => 'allowed']);
    }
    
    #[Route('/delete/{idR}', name: 'app_reservation_perso_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        ReservationPerso $reservation,
        EntityManagerInterface $entityManager,
        EventRepository $eventRepository
    ): Response {
        if (!$this->isCsrfTokenValid('delete'.$reservation->getIdR(), $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide');
        }
    
        $event = $eventRepository->find($reservation->getEvent()->getId());
        $eventId = $reservation->getEvent()->getId();
        
        $now = new \DateTime();
        $eventDate = $event->getDate();
        
        // Calculer la différence en heures
        $interval = $now->diff($eventDate);
        $hoursDifference = ($interval->days * 24) + $interval->h;
    
        // Si l'événement est dans moins de 24h et pas encore passé
        if ($hoursDifference < 24 && $eventDate > $now) {
            $this->addFlash('error', 'Impossible d\'annuler : l\'événement commence dans moins de 24h');
            return $this->redirectToRoute('app_reservation_perso_index', ['event' => $eventId]);
        }
    
        // Si l'événement est passé ou plus de 24h avant, permettre l'annulation
        $entityManager->remove($reservation);
        $entityManager->flush();
        $this->addFlash('success', 'Réservation annulée avec succès!');
    
        return $this->redirectToRoute('app_reservation_perso_index', ['event' => $eventId]);
    }
}