<?php

namespace App\Controller;

use App\Entity\ReservMat;
use App\Entity\Materielle;
use App\Entity\Event;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ReservMatRepository;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
final class ReservMatController extends AbstractController
{
    #[Route('/reservations', name: 'app_reservations')]
    public function index(ReservMatRepository $reservMatRepository): Response
    {
        $reservations = $reservMatRepository->createQueryBuilder('r')
            ->leftJoin('r.materielle', 'm')
            ->leftJoin('r.event', 'e')
            ->leftJoin('r.utilisateur', 'u')
            ->addSelect('m', 'e', 'u')
            ->getQuery()
            ->getResult();

        return $this->render('materiels/reservationMat.html.twig', [
            'reservations' => $reservations,
        ]);
    }
    #[Route('/mes-reservations', name: 'app_mes_reservations')]
    public function mesReservations(ReservMatRepository $reservMatRepository): Response
    {
        // ID utilisateur statique
        $userId = 19;
        
        $reservations = $reservMatRepository->createQueryBuilder('r')
            ->leftJoin('r.materielle', 'm')
            ->leftJoin('r.event', 'e')
            ->where('r.utilisateur = :userId')
            ->setParameter('userId', $userId)
            ->addSelect('m', 'e')
            ->orderBy('r.id_reserv', 'DESC')
            ->getQuery()
            ->getResult();
    
        return $this->render('materiels/mes_reservations.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    #[Route('/reserv/mat/new', name: 'app_reserv_mat_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ParameterBagInterface $params): Response
    {
        $idMat = $request->request->get('id_mat');
        $idEvent = $request->request->get('id_event');
        $quantite = (int)$request->request->get('quantite');
        
        // ID utilisateur fixe (par défaut)
        $userId = $params->get('default_user_id');
    
        if (empty($idMat) || empty($idEvent) || empty($quantite)) {
            $this->addFlash('error', 'Tous les champs sont obligatoires');
            return $this->redirectToRoute('app_materiels_show_Details', ['id' => $idMat]);
        }
    
        $materiel = $entityManager->getRepository(Materielle::class)->find($idMat);
        $event = $entityManager->getRepository(Event::class)->find($idEvent);
        $user = $entityManager->getRepository(Utilisateur::class)->find($userId);
    
        if (!$materiel || !$event || !$user) {
            $this->addFlash('error', 'Données introuvables');
            return $this->redirectToRoute('app_materiels_show_Details', ['id' => $idMat]);
        }
    
        // Vérification si l'utilisateur a déjà réservé ce matériel POUR CET ÉVÉNEMENT
        $existingReservation = $entityManager->getRepository(ReservMat::class)->findOneBy([
            'materielle' => $materiel,
            'utilisateur' => $user,
            'event' => $event
        ]);
    
        if ($existingReservation) {
            $this->addFlash('error', 'Vous avez déjà réservé ce matériel pour cet événement.');
            return $this->redirectToRoute('app_materiels_show_Details', ['id' => $idMat]);
        }
    
        // Vérification du stock
        if ($quantite > $materiel->getQuantiteMat()) {
            $this->addFlash('error', 'La quantité demandée dépasse le stock disponible');
            return $this->redirectToRoute('app_materiels_show_Details', ['id' => $idMat]);
        }
    
        // Création et enregistrement de la réservation
        $reservation = new ReservMat();
        $reservation->setMaterielle($materiel);
        $reservation->setEvent($event);
        $reservation->setQuantite($quantite);
        $reservation->setUtilisateur($user);
    
        // Mise à jour du stock
        $materiel->setQuantiteMat($materiel->getQuantiteMat() - $quantite);
    
        $entityManager->persist($reservation);
        $entityManager->flush();
    
        $this->addFlash('success', 'Réservation effectuée avec succès');
        return $this->redirectToRoute('app_mes_reservations');
    }
#[Route('/reservation/{id}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(ReservMat $reservation): Response
    {
        return $this->render('materiels/details_Res.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/reservation/{id}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReservMat $reservation, EntityManagerInterface $entityManager): Response
    {
        $events = $entityManager->getRepository(Event::class)->findAll();
    
        if ($request->isMethod('POST')) {
            $quantite = (int)$request->request->get('quantite');
            $eventId = $request->request->get('id_event');
            $selectedEvent = $entityManager->getRepository(Event::class)->find($eventId);
    
            if (!$selectedEvent) {
                $this->addFlash('error', 'Événement invalide.');
                return $this->redirectToRoute('app_reservation_edit', ['id' => $reservation->getIdReserv()]);
            }
    
            // Vérification du stock disponible
            $differenceQuantite = $quantite - $reservation->getQuantite();
            $nouveauStock = $reservation->getMaterielle()->getQuantiteMat() - $differenceQuantite;
    
            if ($nouveauStock < 0) {
                $this->addFlash('error', 'La quantité demandée dépasse le stock disponible.');
                return $this->redirectToRoute('app_reservation_edit', ['id' => $reservation->getIdReserv()]);
            }
    
            // Mise à jour des données
            $reservation->setQuantite($quantite);
            $reservation->setEvent($selectedEvent);
            $reservation->getMaterielle()->setQuantiteMat($nouveauStock);
    
            $entityManager->flush();
    
            $this->addFlash('success', 'Réservation modifiée avec succès.');
            return $this->redirectToRoute('app_reservation_show', ['id' => $reservation->getIdReserv()]);
        }
    
        return $this->render('materiels/edit_reservation.html.twig', [
            'reservation' => $reservation,
            'events' => $events,
        ]);
    }
    
    #[Route('/reservation/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, ReservMat $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getIdReserv(), $request->request->get('_token'))) {
            // Restaurer le stock avant suppression
            $materiel = $reservation->getMaterielle();
            $materiel->setQuantiteMat($materiel->getQuantiteMat() + $reservation->getQuantite());
            
            $entityManager->remove($reservation);
            $entityManager->flush();
            
            $this->addFlash('success', 'Réservation supprimée avec succès');
        }

        return $this->redirectToRoute('app_mes_reservations');
    }

}