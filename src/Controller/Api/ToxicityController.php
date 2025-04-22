<?php
namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ToxicityDetectionService;

class ToxicityController extends AbstractController
{
    #[Route('/toxicity-detect', name: 'toxicity_detect', methods: ['POST'])]
    public function detect(Request $request, ToxicityDetectionService $toxicityDetectionService): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $text = $data['text'] ?? '';
        $labels = $toxicityDetectionService->detect($text);
        return $this->json($labels);
    }
}
