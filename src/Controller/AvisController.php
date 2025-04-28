<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Entity\Pack;
use App\Entity\DemandePack;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Service\ReviewSentimentService;

class AvisController extends AbstractController
{
    private $toxicityDetectionService;

    public function __construct(\App\Service\ToxicityDetectionService $toxicityDetectionService)
    {
        $this->toxicityDetectionService = $toxicityDetectionService;
    }

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

        // Use the currently logged-in user
        $securityUser = $this->getUser();
        if (!$securityUser) {
            $this->addFlash('error', 'Vous devez être connecté pour laisser un avis.');
            return $this->redirectToRoute('app_pack_shop_details', ['id' => $packId]);
        }
        // Find the corresponding User entity by email
        $user = $entityManager->getRepository(\App\Entity\User::class)
            ->findOneBy(['email' => $securityUser->getEmail()]);
        if (!$user) {
            $this->addFlash('error', 'User introuvable.');
            return $this->redirectToRoute('app_pack_shop_details', ['id' => $packId]);
        }

        // Check if this user has purchased the pack
        $demandePack = $entityManager->getRepository(DemandePack::class)->findOneBy([
            'pack' => $pack,
            'user' => $user,
            'statut' => 'CONFIRMÉ'
        ]);

        if (!$demandePack) {
            $this->addFlash('error', 'You need to purchase this pack before leaving a review');
            return $this->redirectToRoute('app_pack_shop_details', ['id' => $packId]);
        }

        // Create new Avis
        $avis = new Avis();
        $avis->setPack($pack);
        $avis->setUser($user);
        $avis->setNote((int) $request->request->get('rating', 5));
        $avis->setCommentaire($request->request->get('comment'));
        $avis->setDateCreation(new \DateTime());

        // Server-side toxicity detection (same as booking)
        $toxicityResult = $this->toxicityDetectionService->detect($avis->getCommentaire() ?? '');
        $labelsEn = $toxicityResult['en'] ?? [];
        $isToxic = false;
        foreach ($labelsEn as $label) {
            if ($label['label'] === 'toxic' && $label['score'] > 0.5) {
                $isToxic = true;
                break;
            }
        }
        if ($isToxic) {
            $this->addFlash('error', 'Votre commentaire contient des propos inappropriés (toxiques). Veuillez le reformuler.');
            return $this->redirectToRoute('app_pack_shop_details', ['id' => $packId]);
        }
        // AI Sentiment Analysis via Hugging Face (directly from comment)
        $sentiment = $reviewSentimentService->analyze($avis->getCommentaire() ?? '');
        $avis->setSentiment($sentiment);
        if ($sentiment === 'negative') {
            $this->addFlash('warning', '⚠️ This review was flagged as negative by AI. Please review it.');
            // Optionally: log or notify admin here
        }
        
        // Set both the ID and the User object to ensure it's saved
        $avis->setUser($user);
        
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