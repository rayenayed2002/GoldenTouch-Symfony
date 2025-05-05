<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Entity\ReserverLieu;
use App\Entity\Lieu;
use App\Entity\Event;

class ReserverLieuController extends AbstractController
{
    #[Route('/reserver-lieu', name: 'app_reserver_lieu', methods: ['POST'])]
    public function reserverLieu(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Récupérer les données du formulaire
        $lieuId = $request->request->get('lieu_id');
        $eventId = $request->request->get('event_id');
        $userId = $request->request->get('user_id');
        $dateReservation = $request->request->get('date_reservation');
        
        // Vérifier que les données nécessaires sont présentes
        if (!$lieuId || !$eventId || !$userId || !$dateReservation) {
            $this->addFlash('error', 'Tous les champs sont obligatoires');
            return $this->redirectToRoute('app_lieu_details', ['id' => $lieuId]);
        }
        
        try {
            // Vérifier si le lieu est déjà réservé pour cette date
            $existingReservation = $entityManager->getRepository(ReserverLieu::class)
                ->findOneBy([
                    'lieu' => $lieuId,
                    'date_reservation' => new \DateTime($dateReservation)
                ]);
            
            if ($existingReservation) {
                $this->addFlash('error', 'Ce lieu est déjà réservé pour cette date');
                return $this->redirectToRoute('app_lieu_details', ['id' => $lieuId]);
            }
            
            // Créer une nouvelle instance de ReserverLieu
            $reservation = new ReserverLieu();
            
            // Récupérer les entités Lieu et Event
            $lieu = $entityManager->getRepository(Lieu::class)->find($lieuId);
            $event = $entityManager->getRepository(Event::class)->find($eventId);
            
            if (!$lieu || !$event) {
                throw new \Exception('Lieu ou événement non trouvé');
            }
            
            // Vérifier si l'événement appartient à l'utilisateur
            if ($event->getUser()->getId() != $userId) {
                $this->addFlash('error', 'Vous ne pouvez pas réserver un lieu pour un événement qui ne vous appartient pas');
                return $this->redirectToRoute('app_lieu_details', ['id' => $lieuId]);
            }
            
            // Configurer la réservation
            $reservation->setLieu($lieu);
            $reservation->setEvent($event);
            $reservation->setEvent_id($eventId);
            $reservation->setDate_reservation(new \DateTime($dateReservation));
            $reservation->setStatus('pending');
            $reservation->setCreated_at(new \DateTime());
            
            // Persister et sauvegarder la réservation
            $entityManager->persist($reservation);
            $entityManager->flush();
            
            $this->addFlash('success', 'Réservation effectuée avec succès!');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur est survenue lors de la réservation: ' . $e->getMessage());
        }
        
        // Rediriger vers la page de détails du lieu
        return $this->redirectToRoute('app_lieu_details', ['id' => $lieuId]);
    }
}
?>