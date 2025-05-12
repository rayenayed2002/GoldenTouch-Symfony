<?php

namespace App\Controller;

use App\Entity\Favoris;
use App\Entity\Lieu;
use App\Repository\FavorisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

#[Route('/favoris')]
class FavorisController extends AbstractController
{
    private $security;
    private $entityManager;
    private $favorisRepository;
    private $csrfTokenManager;

    public function __construct(
        Security $security,
        EntityManagerInterface $entityManager,
        FavorisRepository $favorisRepository,
        CsrfTokenManagerInterface $csrfTokenManager
    ) {
        $this->security = $security;
        $this->entityManager = $entityManager;
        $this->favorisRepository = $favorisRepository;
        $this->csrfTokenManager = $csrfTokenManager;
    }

    #[Route('/a', name: 'app_favoris_index')]
    public function index(): Response
    {
        $user = $this->security->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $favoris = $this->favorisRepository->findByUser($user->getId());

        return $this->render('favoris/index.html.twig', [
            'favoris' => $favoris
        ]);
    }

    #[Route('/toggle/{id}', name: 'app_favoris_toggle', methods: ['POST'])]
    public function toggle(Request $request, Lieu $lieu): JsonResponse
    {
        $submittedToken = $request->headers->get('X-CSRF-TOKEN');
        if (!$this->isCsrfTokenValid('favoris_token', $submittedToken)) {
            return new JsonResponse([
                'success' => false,
                'error' => 'Token CSRF invalide'
            ], 403);
        }

        $user = $this->security->getUser();
        if (!$user) {
            return new JsonResponse([
                'success' => false,
                'error' => 'Vous devez être connecté pour gérer vos favoris'
            ], 401);
        }

        try {
            $favori = $this->favorisRepository->findOneByUserAndLieu($user->getId(), $lieu->getId());

            if ($favori) {
                $this->entityManager->remove($favori);
                $isFavori = false;
            } else {
                $favori = new Favoris();
                $favori->setUser($user);
                $favori->setLieu($lieu);
                $this->entityManager->persist($favori);
                $isFavori = true;
            }

            $this->entityManager->flush();

            return new JsonResponse([
                'success' => true,
                'isFavori' => $isFavori,
                'count' => $this->favorisRepository->countByLieu($lieu->getId())
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'error' => 'Une erreur est survenue lors de la gestion des favoris'
            ], 500);
        }
    }

    #[Route('/check/{id}', name: 'app_favoris_check', methods: ['GET'])]
    public function check(Lieu $lieu): JsonResponse
    {
        $user = $this->security->getUser();
        if (!$user) {
            return new JsonResponse(['isFavori' => false]);
        }

        $favori = $this->favorisRepository->findOneByUserAndLieu($user->getId(), $lieu->getId());

        return new JsonResponse([
            'isFavori' => $favori !== null,
            'count' => $this->favorisRepository->countByLieu($lieu->getId())
        ]);
    }
} 