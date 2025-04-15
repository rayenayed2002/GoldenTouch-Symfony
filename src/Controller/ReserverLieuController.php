<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ReserverLieuController extends AbstractController
{
    #[Route('/reserver-lieu', name: 'app_reserver_lieu', methods: ['POST'])]
    public function reserverLieu(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Récupérer les données du formulaire
        $lieuId = $request->request->get('lieu_id');
        $eventId = $request->request->get('event_id'); // ID statique 25
        $userId = $request->request->get('user_id'); // ID statique 25
        $dateReservation = $request->request->get('date_reservation');
        // Formater la date pour qu'elle soit correctement stockée
        if ($dateReservation) {
            // Convertir la date au format timestamp pour éviter le problème avec ON UPDATE CURRENT_TIMESTAMP
            $dateObj = new \DateTime($dateReservation);
            $dateReservation = $dateObj->format('Y-m-d H:i:s');
        }
        $status = $request->request->get('status', 'pending');
        
        // Vérifier que les données nécessaires sont présentes
        if (!$lieuId || !$eventId || !$userId || !$dateReservation) {
            $this->addFlash('error', 'Tous les champs sont obligatoires');
            return $this->redirectToRoute('app_lieu_details', ['id' => $lieuId]);
        }
        
        try {
            // Créer la requête SQL pour insérer directement dans la table reserver_lieu
            $conn = $entityManager->getConnection();
            
            $sql = "INSERT INTO reserver_lieu (lieu_id, event_id, date_reservation, status, created_at) 
                   VALUES (:lieu_id, :event_id, :date_reservation, :status, NOW())";
            
            $stmt = $conn->prepare($sql);
            $stmt->executeStatement([
                'lieu_id' => $lieuId,
                'event_id' => $eventId,
                'date_reservation' => $dateReservation,
                'status' => $status
            ]);
            
            $this->addFlash('success', 'Réservation effectuée avec succès!');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur est survenue lors de la réservation: ' . $e->getMessage());
        }
        
        // Rediriger vers la page de détails du lieu
        return $this->redirectToRoute('app_lieu_details', ['id' => $lieuId]);
    }
}