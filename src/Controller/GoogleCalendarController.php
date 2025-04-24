<?php

namespace App\Controller;

use App\Service\GoogleCalendarService;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\ReservationPerso;
use App\Repository\PersonnelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GoogleCalendarController extends AbstractController
{
    #[Route('/oauth/google', name: 'oauth_google')]
    public function connect(GoogleCalendarService $googleService): Response
    {
        return $this->redirect($googleService->getAuthUrl());
    }

// Dans App\Controller\GoogleCalendarController

#[Route('/oauth/google/callback', name: 'oauth_google_callback')]
public function callback(
    Request $request, 
    GoogleCalendarService $googleService,
    EventRepository $eventRepository,
    PersonnelRepository $personnelRepository,
    EntityManagerInterface $entityManager
): Response {
    $code = $request->query->get('code');
    
    if (!$code) {
        $this->addFlash('error', 'Authorization failed. No code returned from Google.');
        return $this->redirectToRoute('app_perso_index');
    }

    try {
        $client = $googleService->getClient();
        $accessToken = $client->fetchAccessTokenWithAuthCode($code);
        $request->getSession()->set('google_access_token', $accessToken);
        
        // Synchroniser les événements
        $events = $eventRepository->findAll();
        foreach ($events as $event) {
            $reservations = $entityManager->getRepository(ReservationPerso::class)->findBy(['event' => $event]);
            $personnelList = [];
            
            foreach ($reservations as $reservation) {
                $personnel = $personnelRepository->find($reservation->getIdP());
                if ($personnel) {
                    $personnelList[] = [
                        'nomP' => $personnel->getNomP(),
                        'prenomP' => $personnel->getPrenomP()
                    ];
                }
            }
            
            $eventData = [
                'nom' => $event->getNom(),
                'date' => $event->getDate(),
                'description' => sprintf(
                    "Catégorie: %s\nType: %s",
                    $event->getCategorie(),
                    $event->getType()
                )
            ];
            
            try {
                $googleService->addEventToCalendar($eventData, $accessToken, $personnelList);
            } catch (\Exception $e) {
                error_log('Error syncing event '.$event->getId().': '.$e->getMessage());
            }
        }
        
        $this->addFlash('success', 'Événements synchronisés avec Google Calendar!');
        return $this->redirect('https://calendar.google.com/calendar/u/0/r');
        
    } catch (\Exception $e) {
        $this->addFlash('error', 'Error during Google authentication: '.$e->getMessage());
        return $this->redirectToRoute('app_perso_index');
    }
}

// Dans GoogleCalendarController
#[Route('/sync/calendar', name: 'sync_calendar')]
public function syncCalendar(
    Request $request,
    GoogleCalendarService $googleService,
    EventRepository $eventRepository,
    PersonnelRepository $personnelRepository,
    EntityManagerInterface $entityManager
): Response {
    $accessToken = $request->getSession()->get('google_access_token');
    
    if (!$accessToken) {
        $this->addFlash('error', 'Vous devez d\'abord vous connecter à Google');
        return $this->redirectToRoute('oauth_google');
    }

    try {
        // Récupérer TOUS les événements sans limite
        $events = $eventRepository->createQueryBuilder('e')
            ->getQuery()
            ->getResult();
            
        $syncedCount = 0;
        $errors = [];
        
        foreach ($events as $event) {
            try {
                // Vérifier que la date existe
                if (!$event->getDate()) {
                    $errors[] = 'L\'événement '.$event->getId().' n\'a pas de date définie';
                    continue;
                }
                
                $reservations = $entityManager->getRepository(ReservationPerso::class)->findBy(['event' => $event]);
                $personnelList = [];
                
                foreach ($reservations as $reservation) {
                    $personnel = $personnelRepository->find($reservation->getIdP());
                    if ($personnel) {
                        $personnelList[] = [
                            'nomP' => $personnel->getNomP(),
                            'prenomP' => $personnel->getPrenomP()
                        ];
                    }
                }
                
                $eventData = [
                    'nom' => $event->getNom(),
                    'date' => $event->getDate(),
                    'description' => sprintf(
                        "Catégorie: %s\nType: %s",
                        $event->getCategorie(),
                        $event->getType()
                    )
                ];
                
                // Rafraîchir le token si nécessaire
                $this->refreshTokenIfNeeded($googleService, $accessToken);
                
                $googleService->addEventToCalendar($eventData, $accessToken, $personnelList);
                $syncedCount++;
                
            } catch (\Exception $e) {
                $errors[] = 'Erreur sur l\'événement '.$event->getId().': '.$e->getMessage();
                error_log('Error syncing event '.$event->getId().': '.$e->getMessage());
            }
        }
        
        $message = sprintf('%d événements synchronisés avec Google Calendar!', $syncedCount);
        if (!empty($errors)) {
            $message .= ' ('.count($errors).' erreurs)';
            $this->addFlash('warning', implode('<br>', $errors));
        }
        
        $this->addFlash('success', $message);
        return $this->redirectToRoute('app_perso_index');
        
    } catch (\Exception $e) {
        $this->addFlash('error', 'Erreur lors de la synchronisation: '.$e->getMessage());
        return $this->redirectToRoute('app_perso_index');
    }
}

private function refreshTokenIfNeeded(GoogleCalendarService $googleService, array &$accessToken): void
{
    $client = $googleService->getClient();
    $client->setAccessToken($accessToken);
    
    if ($client->isAccessTokenExpired()) {
        $refreshToken = $client->getRefreshToken();
        if ($refreshToken) {
            $newToken = $client->fetchAccessTokenWithRefreshToken($refreshToken);
            $accessToken = array_merge($accessToken, $newToken);
        }
    }
}
}