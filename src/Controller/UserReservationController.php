<?php

namespace App\Controller;

use App\Entity\ReservationPerso;
use App\Repository\UtilisateurRepository;
use App\Repository\PersonnelRepository;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserReservationController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/user/reservations', name: 'app_user_reservations')]
    public function index(
        Request $request,
        UtilisateurRepository $utilisateurRepository,
        PersonnelRepository $personnelRepository,
        EventRepository $eventRepository
    ): Response {
        $selectedUserId = $request->query->get('user');
        $reservations = [];
        $personnel = null;
        $events = [];

        if ($selectedUserId) {
            $user = $utilisateurRepository->find($selectedUserId);
            if ($user) {
                // Trouver un personnel avec le même nom et prénom
                $personnel = $personnelRepository->findOneBy([
                    'nomP' => $user->getNom(),
                    'prenomP' => $user->getPrenom()
                ]);

                if ($personnel) {
                    // Récupérer les réservations de ce personnel
                    $reservations = $this->entityManager->getRepository(ReservationPerso::class)
                        ->findBy(['idP' => $personnel->getIdP()]);

                    // Récupérer les événements correspondants
                    $eventIds = array_map(fn($res) => $res->getEvent()->getId(), $reservations);
                    if (!empty($eventIds)) {
                        $events = $eventRepository->findBy(['id' => $eventIds]);
                    }
                }
            }
        }

        return $this->render('user_reservation/index.html.twig', [
            'users' => $utilisateurRepository->findAll(),
            'selectedUserId' => $selectedUserId,
            'personnel' => $personnel,
            'events' => $events,
            'reservations' => $reservations
        ]);
    }
}