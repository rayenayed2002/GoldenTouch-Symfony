<?php

namespace App\Controller;

use App\Entity\Lieu;
use App\Entity\ReserverLieu;
use App\Repository\LieuRepository;
use App\Repository\ReserverLieuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LieuCalendarController extends AbstractController
{
    #[Route('/lieu/{id}/calendar', name: 'app_lieu_calendar')]
    public function calendar(Lieu $lieu, ReserverLieuRepository $reserverLieuRepository): Response
    {
        $reservations = $reserverLieuRepository->findBy(['lieu' => $lieu]);
        
        $events = [];
        foreach ($reservations as $reservation) {
            $events[] = [
                'title' => 'Réservé',
                'start' => $reservation->getDate_reservation()->format('Y-m-d H:i:s'),
                'end' => $reservation->getCreated_at()->format('Y-m-d H:i:s'),
                'description' => 'Réservation du lieu',
                'type' => 'reservation'
            ];
        }

        // Récupérer les clés d'API Google Calendar depuis les variables d'environnement
        $googleApiKey = $this->getParameter('google_api_key');
        $googleClientId = $this->getParameter('google_client_id');

        return $this->render('lieu/calendar.html.twig', [
            'lieu' => $lieu,
            'events' => $events,
            'google_api_key' => $googleApiKey,
            'google_client_id' => $googleClientId
        ]);
    }
}