<?php

namespace App\Controller;

use App\Entity\DemandePack;
use App\Entity\Pack;
use App\Entity\Utilisateur;
use App\Entity\Event;
use App\Entity\NotificationsAdmin;
use App\Repository\DemandePackRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/demande-pack')]
class DemandePackController extends AbstractController
{
    public function __construct(
        private DemandePackRepository $demandePackRepository,
        private EntityManagerInterface $entityManager,
        private UtilisateurRepository $utilisateurRepository
    ) {}

    #[Route('/create', name: 'app_demande_pack_create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!$data) {
            return new JsonResponse(['success' => false, 'message' => 'Données invalides'], 400);
        }

        try {
            // Create demande pack
            $demande = new DemandePack();
            $demande->setStatut($data['statut']);
            $demande->setPrix($data['prix']);
            $demande->setPackId($data['packId']);
            $demande->setUtilisateurId($data['utilisateurId']);
            
            // Set relationships
            $pack = $this->entityManager->getRepository(Pack::class)->find($data['packId']);
            if (!$pack) {
                throw new \Exception('Pack non trouvé');
            }
            $demande->setPack($pack);

            $event = $pack->getEvent();
            if (!$event) {
                throw new \Exception('Événement non trouvé');
            }
            $demande->setEvent($event);

            // Save demande pack
            $this->entityManager->persist($demande);
            $this->entityManager->flush();

            // Create notification
            $notification = new NotificationsAdmin();
            $notification->setStatut('NON_LU');
            $notification->setDate_creation(new \DateTime());
            $notification->setDemandePack($demande);
            
            // Set admin (assuming admin_id = 1 for now)
            $admin = $this->utilisateurRepository->find(1);
            if (!$admin) {
                throw new \Exception('Admin non trouvé');
            }
            $notification->setAdmin($admin);
            
            // Set user
            $user = $this->utilisateurRepository->find($data['utilisateurId']);
            if (!$user) {
                throw new \Exception('Utilisateur non trouvé');
            }
            $notification->setUtilisateur($user);
            
            // Create message
            $message = "Nouvelle demande de réservation pour le pack: " . $pack->getNom() . "\n";
            $message .= "Statut: " . $data['statut'] . "\n";
            $message .= "Prix: " . $data['prix'] . "\n";
            $message .= "Date de l'événement: " . $data['dateEvent'] . "\n";
            $message .= "Nombre de personnes: " . $data['nbPersonnes'] . "\n";
            $message .= "Notes: " . $data['notes'] . "\n";
            $notification->setMessage($message);

            // Save notification
            $this->entityManager->persist($notification);
            $this->entityManager->flush();

            return new JsonResponse(['success' => true]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Erreur lors de la création de la demande: ' . $e->getMessage()
            ], 500);
        }
    }
}
