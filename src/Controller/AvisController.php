<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Entity\Pack;
use App\Entity\DemandePack;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Service\ReviewSentimentService;

class AvisController extends AbstractController
{
    #[Route('/avis/add/{packId}', name: 'app_avis_add', methods: ['POST'])]
    public function add(
        Request $request,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator,
        int $packId,
        ReviewSentimentService $reviewSentimentService
    ): Response {
        $pack = $entityManager->getRepository(Pack::class)->find($packId);
        
        if (!$pack) {
            throw $this->createNotFoundException('Pack not found');
        }

        // Force user ID to 25 for testing
        $userId = 25;
        $user = $entityManager->getRepository(Utilisateur::class)->find($userId);
        
        if (!$user) {
            $this->addFlash('error', 'User not found');
            return $this->redirectToRoute('app_pack_shop_details', ['id' => $packId]);
        }

        // Check if this user (ID 25) has purchased the pack
        $demandePack = $entityManager->getRepository(DemandePack::class)->findOneBy([
            'pack' => $pack,
            'utilisateur' => $user,
            'statut' => 'CONFIRMÉ'
        ]);

        if (!$demandePack) {
            $this->addFlash('error', 'You need to purchase this pack before leaving a review');
            return $this->redirectToRoute('app_pack_shop_details', ['id' => $packId]);
        }

        // Create new Avis
        $avis = new Avis();
        $avis->setPack($pack);
        $avis->setNote((int) $request->request->get('rating', 5));
        $avis->setCommentaire($request->request->get('comment'));
        $avis->setDateCreation(new \DateTime());

        // AI Sentiment Analysis via Hugging Face
        $stars = $reviewSentimentService->analyzeSentiment($avis->getCommentaire() ?? '');
        $sentiment = $reviewSentimentService->ratingToSentiment($stars);
        $avis->setSentiment($sentiment);
        // Optionally store stars in a separate field if you want
        if ($sentiment === 'negative') {
            $this->addFlash('warning', '⚠️ This review was flagged as negative by AI. Please review it.');
            // Optionally: log or notify admin here
        }
        
        // Set both the ID and the User object to ensure it's saved
        $avis->setIdUtilisateur($userId);
        $avis->setUtilisateur($user);
        
        // Validate the entity
        $violations = $validator->validate($avis);
        if (count($violations) > 0) {
            $errors = [];
            foreach ($violations as $violation) {
                $propertyPath = $violation->getPropertyPath();
                $errors[$propertyPath] = $violation->getMessage();
            }
            
            return $this->redirectToRoute('app_pack_shop_details', [
                'id' => $packId,
                'error_note' => $errors['note'] ?? '',
                'error_commentaire' => $errors['commentaire'] ?? '',
                'comment' => $request->request->get('comment'),
                'rating' => $request->request->get('rating', 5)
            ]);
        }

        $entityManager->persist($avis);
        $entityManager->flush();
        
        $this->addFlash('success', 'Your review has been added successfully!');
        return $this->redirectToRoute('app_pack_shop_details', ['id' => $packId]);
    }
}