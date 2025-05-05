<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\ReservationLieu;
use App\Entity\Event;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use App\Repository\LieuRepository;
use App\Repository\EventRepository;
use App\Repository\ReserverLieuRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/reservation")
 */
class ReservationController extends AbstractController
{
    private $entityManager;
    private $reserverLieuRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        ReserverLieuRepository $reserverLieuRepository
    ) {
        $this->entityManager = $entityManager;
        $this->reserverLieuRepository = $reserverLieuRepository;
    }

    /**
     * @Route("/", name="app_reservation_index", methods={"GET"})
     */
    public function index(ReservationRepository $reservationRepository): Response
    {
        // For demonstration, we're using a static user ID of 25
        $userId = 25;
        
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservationRepository->findBy(['user_id' => $userId]),
        ]);
    }

    /**
     * @Route("/new/{lieu_id}", name="app_reservation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, LieuRepository $lieuRepository, EventRepository $eventRepository, $lieu_id = null): Response
    {
        // Static user ID as requested
        $userId = 25;
        
        $reservation = new ReservationLieu();
        
        // If a lieu_id is provided, get the lieu
        if ($lieu_id) {
            $lieu = $lieuRepository->find($lieu_id);
            if (!$lieu) {
                throw $this->createNotFoundException('Le lieu demandé n\'existe pas');
            }
            
            // Pre-fill reservation with lieu data
            $reservation->setNom($lieu->getName());
            $reservation->setPrix($lieu->getPrice());
            $reservation->setCapacite($lieu->getCapacity());
        }
        
        // Get available events for the dropdown
        $events = $eventRepository->findBy(['user' => $userId]);
        
        // Create the form
        $form = $this->createForm(ReservationType::class, $reservation, [
            'events' => $events
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Set the user ID
            // Note: In a real app, you'd get this from security context
            
            // Get the selected event from the form and set it on the reservation
            $event = $form->get('event')->getData();
            if ($event) {
                $reservation->setEvent($event);
                $reservation->setEvent_id($event->getId());
            } else {
                // Si aucun événement n'est sélectionné, nous devons gérer cette situation
                // pour éviter l'erreur d'intégrité de contrainte
                $this->addFlash('error', 'Veuillez sélectionner un événement');
                return $this->renderForm('reservation/new.html.twig', [
                    'reservation' => $reservation,
                    'form' => $form,
                    'events' => $events
                ]);
            }
            
            $entityManager->persist($reservation);
            $entityManager->flush();

            $this->addFlash('success', 'Votre réservation a été effectuée avec succès!');
            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
            'events' => $events
        ]);
    }
    
    /**
     * @Route("/process-booking", name="app_process_booking", methods={"POST"})
     */
    public function processBooking(Request $request, EntityManagerInterface $entityManager, LieuRepository $lieuRepository): Response
    {
        // Get form data
        $lieuId = $request->request->get('lieu_id');
        $date = $request->request->get('date');
        $people = $request->request->get('people');
        $eventType = $request->request->get('event_type');
        $notes = $request->request->get('notes');
        $eventId = $request->request->get('event_id');
        
        // Validate input
        if (!$lieuId || !$date || !$people || !$eventType || !$eventId) {
            $this->addFlash('error', 'Tous les champs obligatoires doivent être remplis, y compris l\'événement');
            return $this->redirectToRoute('app_lieu_details', ['id' => $lieuId]);
        }
        
        // Find the lieu
        $lieu = $lieuRepository->find($lieuId);
        if (!$lieu) {
            throw $this->createNotFoundException('Le lieu demandé n\'existe pas');
        }
        
        // Create a new reservation
        $reservation = new ReservationLieu();
        $reservation->setNom($lieu->getName());
        $reservation->setDescription($notes ?? 'Aucune note spéciale');
        $reservation->setPrix($lieu->getPrice());
        $reservation->setCapacite($people);
        $reservation->setDateReservation(new \DateTime($date));
        
        // L'event_id est obligatoire pour éviter l'erreur d'intégrité de contrainte
        if (!$eventId) {
            $this->addFlash('error', 'Veuillez sélectionner un événement');
            return $this->redirectToRoute('app_lieu_details', ['id' => $lieuId]);
        }
        
        // Set the event relationship
        $event = $entityManager->getRepository(Event::class)->find($eventId);
        if (!$event) {
            $this->addFlash('error', 'L\'événement sélectionné n\'existe pas');
            return $this->redirectToRoute('app_lieu_details', ['id' => $lieuId]);
        }
        
        $reservation->setEvent($event);
        $reservation->setEvent_id($eventId);
        
        // Add any other needed fields here
        
        // Persist to database
        $entityManager->persist($reservation);
        $entityManager->flush();
        
        $this->addFlash('success', 'Votre réservation a été effectuée avec succès!');
        return $this->redirectToRoute('app_lieu_details', ['id' => $lieuId]);
    }

    /**
     * @Route("/{id}", name="app_reservation_show", methods={"GET"})
     */
    public function show(ReservationLieu $reservation): Response
    {
        return $this->render('lieu/reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_reservation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ReservationLieu $reservation, EntityManagerInterface $entityManager, EventRepository $eventRepository): Response
    {
        // Static user ID
        $userId = 25;
        
        // Get available events for the dropdown
        $events = $eventRepository->findBy(['user' => $userId]);
        
        $form = $this->createForm(ReservationType::class, $reservation, [
            'events' => $events
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get the selected event from the form and set it on the reservation
            $event = $form->get('event')->getData();
            if ($event) {
                $reservation->setEvent($event);
                $reservation->setEvent_id($event->getId());
            } else {
                // Si aucun événement n'est sélectionné, nous devons gérer cette situation
                // pour éviter l'erreur d'intégrité de contrainte
                $this->addFlash('error', 'Veuillez sélectionner un événement');
                return $this->renderForm('reservation/edit.html.twig', [
                    'reservation' => $reservation,
                    'form' => $form,
                    'events' => $events
                ]);
            }
            
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_reservation_delete", methods={"POST"})
     */
    public function delete(Request $request, ReservationLieu $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/mes-reservations', name: 'app_user_reservations')]
    public function indexUserReservations(Request $request, PaginatorInterface $paginator): Response
    {
        // ID utilisateur statique (à remplacer par l'utilisateur connecté)
        $userId = 25;

        // Récupérer les réservations avec pagination
        $query = $this->reserverLieuRepository->findByUserId($userId);

        $reservations = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10 // Nombre d'éléments par page
        );

        return $this->render('lieu/reservations.html.twig', [
            'reservations' => $reservations,
            'currentPage' => $request->query->getInt('page', 1),
            'pages' => ceil($reservations->getTotalItemCount() / 10)
        ]);
    }

    #[Route('/reservation/{id}/cancel', name: 'app_reservation_cancel', methods: ['POST'])]
    public function cancelReservation(ReserverLieu $reservation): Response
    {
        if ($reservation->getStatus() === 'pending') {
            $this->entityManager->remove($reservation);
            $this->entityManager->flush();
            $this->addFlash('success', 'Réservation annulée avec succès');
        } else {
            $this->addFlash('error', 'Impossible d\'annuler cette réservation');
        }
        
        return $this->redirectToRoute('app_user_reservations');
    }
}