<?php

namespace App\Controller;

use App\Entity\ReservationPerso;
use App\Entity\Personnel;
use App\Entity\Event;
use App\Repository\PersonnelRepository;
use App\Repository\EventRepository;
use App\Repository\UtilisateurRepository;
use Tattali\CalendarBundle\TattaliCalendarBundle;
use Knp\Component\Pager\PaginatorInterface;
use App\Service\TwilioSmsService;
use App\Service\GoogleCalendarService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
#[Route('/reservationn/perso')]
class ReservationPersoController extends AbstractController
{
    #[Route('/', name: 'app_reservation_perso_index', methods: ['GET'])]
    public function index(
        PersonnelRepository $personnelRepository,
        EventRepository $eventRepository,
        EntityManagerInterface $entityManager,
        Request $request,
        PaginatorInterface $paginator
    ): Response {
        $selectedEventId = $request->query->get('event');
        $reservations = $entityManager->getRepository(ReservationPerso::class)->findAll();
        
        // Pagination simple de tous les personnels
        $personnels = $paginator->paginate(
            $personnelRepository->findAllQueryBuilder(),
            $request->query->getInt('page', 1),
            6
        );
        
        return $this->render('reservation_perso/index.html.twig', [
            'personnels' => $personnels,
            'events' => $eventRepository->findAll(),
            'reservations' => $reservations,
            'selectedEventId' => $selectedEventId
        ]);
    }

    #[Route('/new/{idP}/{id}', name: 'app_reservation_perso_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        int $idP,
        int $id,
        EntityManagerInterface $entityManager,
        PersonnelRepository $personnelRepository,
        EventRepository $eventRepository,
        GoogleCalendarService $googleService
    ): Response {
        $personnel = $personnelRepository->find($idP);
        $event = $eventRepository->find($id);
        
        if (!$personnel || !$event) {
            throw $this->createNotFoundException('Personnel ou Event non trouvé');
        }
    
        $existingReservation = $entityManager->getRepository(ReservationPerso::class)
            ->findOneBy([
                'idP' => $idP,
                'event' => $event
            ]);
        
        if ($existingReservation) {
            $this->addFlash('warning', 'Cette réservation existe déjà');
            return $this->redirectToRoute('app_reservation_perso_index', ['event' => $id]);
        }
    
        $reservation = new ReservationPerso();
        $reservation->setIdP($idP);
        $reservation->setEvent($event);
    
        try {
            $entityManager->persist($reservation);
            $entityManager->flush();
            
            // Mettre à jour Google Calendar
            $accessToken = $request->getSession()->get('google_access_token');
            if ($accessToken) {
                $eventData = [
                    'nom' => $event->getNom(),
                    'date' => $event->getDate(),
                    'description' => sprintf(
                        "Catégorie: %s\nType: %s",
                        $event->getCategorie(),
                        $event->getType()
                    )
                ];
                
                // Récupérer tous les personnels pour cet événement
                $reservations = $entityManager->getRepository(ReservationPerso::class)
                    ->findBy(['event' => $event]);
                
                $personnelList = [];
                foreach ($reservations as $res) {
                    $pers = $personnelRepository->find($res->getIdP());
                    if ($pers) {
                        $personnelList[] = [
                            'nomP' => $pers->getNomP(),
                            'prenomP' => $pers->getPrenomP()
                        ];
                    }
                }
                
                try {
                    $googleService->addEventToCalendar($eventData, $accessToken, $personnelList);
                } catch (\Exception $e) {
                    error_log('Google Calendar update error: '.$e->getMessage());
                }
            }
            
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
        EventRepository $eventRepository,
        PersonnelRepository $personnelRepository,
        GoogleCalendarService $googleService,
        TwilioSmsService $twilioSmsService
    ): Response {
        if (!$this->isCsrfTokenValid('delete'.$reservation->getIdR(), $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide');
        }
    
        $event = $reservation->getEvent();
        $eventId = $event->getId();
    
        // Vérifier si l'annulation est possible
        $now = new \DateTime();
        $eventDate = $event->getDate();
        $interval = $now->diff($eventDate);
        $hoursDifference = ($interval->days * 24) + $interval->h;
    
        if ($hoursDifference < 24 && $eventDate > $now) {
            $this->addFlash('error', 'Annulation impossible : événement dans moins de 24h.');
            return $this->redirectToRoute('app_reservation_perso_index', ['event' => $eventId]);
        }
    
        // Envoi du SMS
        $smsMessage = sprintf(
            "[GoldenTouch] Annulation réservation #%d\nÉvénement: %s\nDate: %s",
            $reservation->getIdR(),
            $event->getNom(),
            $event->getDate()->format('d/m/Y H:i')
        );
    
        if (!$twilioSmsService->sendSms($smsMessage)) {
            $this->addFlash('warning', 'Réservation annulée, mais échec d\'envoi du SMS.');
        }
    
        // Suppression de la réservation
        $entityManager->remove($reservation);
        $entityManager->flush();
    
        // Mettre à jour Google Calendar
        $accessToken = $request->getSession()->get('google_access_token');
        if ($accessToken) {
            $eventData = [
                'nom' => $event->getNom(),
                'date' => $event->getDate(),
                'description' => sprintf(
                    "Catégorie: %s\nType: %s",
                    $event->getCategorie(),
                    $event->getType()
                )
            ];
            
            // Récupérer les personnels restants
            $reservations = $entityManager->getRepository(ReservationPerso::class)
                ->findBy(['event' => $event]);
            
            $personnelList = [];
            foreach ($reservations as $res) {
                $pers = $personnelRepository->find($res->getIdP());
                if ($pers) {
                    $personnelList[] = [
                        'nomP' => $pers->getNomP(),
                        'prenomP' => $pers->getPrenomP()
                    ];
                }
            }
            
            try {
                $googleService->addEventToCalendar($eventData, $accessToken, $personnelList);
            } catch (\Exception $e) {
                error_log('Google Calendar update error: '.$e->getMessage());
            }
        }
    
        $this->addFlash('success', 'Réservation annulée avec succès !');
        return $this->redirectToRoute('app_reservation_perso_index', ['event' => $eventId]);
    }




 
    #[Route('/search', name: 'app_reservation_perso_search', methods: ['GET'])]
    public function search(
        Request $request, 
        PersonnelRepository $personnelRepository,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        try {
            $term = $request->query->get('q', '');
            $selectedEventId = $request->query->get('event');
            
            if (empty($term)) {
                return $this->json([
                    'html' => '',
                    'count' => 0
                ]);
            }
    
            $personnels = $personnelRepository->search($term);
            $reservations = $entityManager->getRepository(ReservationPerso::class)->findAll();
            
            $html = $this->renderView('reservation_perso/_search_results.html.twig', [
                'personnels' => $personnels,
                'reservations' => $reservations,
                'selectedEventId' => $selectedEventId,
                'error' => null
            ]);
            
            return $this->json([
                'html' => $html,
                'count' => count($personnels)
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'html' => $this->renderView('reservation_perso/_search_results.html.twig', [
                    'personnels' => [],
                    'error' => 'Une erreur est survenue lors de la recherche'
                ]),
                'count' => 0
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }





}