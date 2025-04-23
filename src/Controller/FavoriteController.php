<?php

namespace App\Controller;

use App\Entity\Favorite;
use App\Entity\Place;
use App\Repository\FavoriteRepository;
use App\Repository\PlaceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class FavoriteController extends AbstractController
{
    #[Route('/favorite/add/{placeId}', name: 'favorite_add', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function addFavorite(int $placeId, EntityManagerInterface $em, PlaceRepository $placeRepo, FavoriteRepository $favoriteRepo, \App\Repository\UserRepository $userRepo): Response
    {
        $user = $userRepo->find(19);
        if (!$user) {
            return new JsonResponse(["error" => "Utilisateur statique non trouvé"], Response::HTTP_UNAUTHORIZED);
        }
        $place = $placeRepo->find($placeId);
        if (!$place) {
            return new JsonResponse(['error' => 'Place not found'], Response::HTTP_NOT_FOUND);
        }
        $existing = $favoriteRepo->findOneBy(['user' => $user, 'place' => $place]);
        if ($existing) {
            return new JsonResponse(['message' => 'Already in favorites'], Response::HTTP_OK);
        }
        $favorite = new Favorite();
        $favorite->setUser($user);
        $favorite->setPlace($place);
        $em->persist($favorite);
        $em->flush();
        return new JsonResponse(['message' => 'Added to favorites'], Response::HTTP_CREATED);
    }

    #[Route('/favorite/remove/{placeId}', name: 'favorite_remove', methods: ['DELETE'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function removeFavorite(int $placeId, EntityManagerInterface $em, PlaceRepository $placeRepo, FavoriteRepository $favoriteRepo): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return new JsonResponse(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }
        $place = $placeRepo->find($placeId);
        if (!$place) {
            return new JsonResponse(['error' => 'Place not found'], Response::HTTP_NOT_FOUND);
        }
        $favorite = $favoriteRepo->findOneBy(['user' => $user, 'place' => $place]);
        if (!$favorite) {
            return new JsonResponse(['message' => 'Not in favorites'], Response::HTTP_OK);
        }
        $em->remove($favorite);
        $em->flush();
        return new JsonResponse(['message' => 'Removed from favorites'], Response::HTTP_OK);
    }

    #[Route('/favorite/list', name: 'favorite_list', methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function listFavorites(FavoriteRepository $favoriteRepo): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return new JsonResponse(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }
        $favorites = $favoriteRepo->findBy(['user' => $user]);
        $places = array_map(function($favorite) {
            return $favorite->getPlace()->getId();
        }, $favorites);
        return new JsonResponse(['favorite_places' => $places], Response::HTTP_OK);
    }
}