<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ReservMatRepository;  // Assurez-vous d'ajouter cette ligne

final class ReservMatController extends AbstractController
{
    #[Route('/reservations', name: 'app_reservations')]
    public function index(ReservMatRepository $reservMatRepository): Response
{
    $reservations = $reservMatRepository->createQueryBuilder('r')
        ->leftJoin('r.materielle', 'm')
        ->leftJoin('r.event', 'e')
        ->leftJoin('r.utilisateur', 'u')          // <<-- la jointure est correcte
        ->addSelect('m', 'e', 'u')
        ->getQuery()
        ->getResult();

    return $this->render('materiels/reservationMat.html.twig', [
        'reservations' => $reservations,
    ]);
}
}