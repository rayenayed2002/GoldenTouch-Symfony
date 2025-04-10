<?php

namespace App\Controller;

use App\Entity\Lieu;
use App\Entity\Avis;
use App\Repository\LieuRepository;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class LieuController extends AbstractController
{
    public function __construct(
        private LieuRepository $lieuRepository,
        private AvisRepository $avisRepository,
        private EntityManagerInterface $entityManager
    ) {}

    #[Route('/lieux', name: 'app_lieux')]
    public function index(Request $request): Response
    {
        $searchTerm = $request->query->get('search', '');
        $filter = $request->query->get('filter', 'all');
        $allLieux = $this->lieuRepository->findAll();
        $popularLieux = $this->lieuRepository->findPopularLieux();
        $newLieux = $this->lieuRepository->findNewLieux();

        // Si recherche activée, filtrer les résultats
        if (!empty($searchTerm)) {
            $allLieux = $this->lieuRepository->searchByName($searchTerm);
            // On garde les autres filtres intacts
            $popularLieux = $this->lieuRepository->findPopularLieux();
            $newLieux = $this->lieuRepository->findNewLieux();
        }
        $lieux = match ($filter) {
            'popular' => ['results' => $popularLieux, 'currentPage' => 1, 'lastPage' => 1, 'hasPreviousPage' => false, 'hasNextPage' => false],
            'new' => ['results' => $newLieux, 'currentPage' => 1, 'lastPage' => 1, 'hasPreviousPage' => false, 'hasNextPage' => false],
            default => ['results' => $allLieux, 'currentPage' => 1, 'lastPage' => 1, 'hasPreviousPage' => false, 'hasNextPage' => false],
        };
        return $this->render('lieu/index.html.twig', [
            'lieux' => $lieux,
            'popularLieux' => $popularLieux,
            'currentFilter' => $filter,
            'searchTerm' => $searchTerm // Ajout du terme de recherche au template
        ]);
    }
     /**
     * Nouvelle route pour l'autocomplétion
     */
    #[Route('/lieu/search-autocomplete', name: 'app_lieu_search_autocomplete', methods: ['GET'])]
    public function searchAutocomplete(Request $request): JsonResponse
    {
        $searchTerm = $request->query->get('term', '');
        $lieux = $this->lieuRepository->searchByName($searchTerm);

        $results = [];
        foreach ($lieux as $lieu) {
            $results[] = [
                'id' => $lieu->getId(),
                'name' => $lieu->getName(),
                'location' => $lieu->getLocation(),
                'category' => $lieu->getCategory(),
                'image' => $lieu->getImageUrl() ? 'uploads/lieux/' . $lieu->getImageUrl() : 'Front/img/placeholder.jpg'
            ];
        }

        return new JsonResponse($results);
    }

    #[Route('/lieu', name: 'app_lieu_index')]
    public function indexLieu(Request $request): Response
    {
        $filter = $request->query->get('filter', 'all');
        $page = $request->query->getInt('page', 1);
        $limit = 10;

        $results = $this->lieuRepository->findAllPaginated($page, $limit);
        $total = count($this->lieuRepository->findAll());
        $lastPage = ceil($total / $limit);

        $popularLieux = $this->lieuRepository->findPopularLieux();
        $newLieux = $this->lieuRepository->findNewLieux();

        $lieux = match ($filter) {
            'popular' => [
                'results' => $popularLieux,
                'currentPage' => 1,
                'lastPage' => 1,
                'hasPreviousPage' => false,
                'hasNextPage' => false
            ],
            'new' => [
                'results' => $newLieux,
                'currentPage' => 1,
                'lastPage' => 1,
                'hasPreviousPage' => false,
                'hasNextPage' => false
            ],
            default => [
                'results' => $results,
                'currentPage' => $page,
                'lastPage' => $lastPage,
                'hasPreviousPage' => $page > 1,
                'hasNextPage' => $page < $lastPage
            ],
        };

        return $this->render('lieu/lieu.html.twig', [
            'lieux' => $lieux,
            'popularLieux' => [
                'results' => $popularLieux,
                'currentPage' => 1,
                'lastPage' => 1,
                'hasPreviousPage' => false,
                'hasNextPage' => false
            ],
            'currentFilter' => $filter
        ]);
    }

    #[Route('/lieu/category/{category}', name: 'app_lieu_category')]
    public function byCategory(string $category, Request $request): Response
    {
        $page = $request->query->getInt('page', 1);
        $limit = 10;

        $results = $this->lieuRepository->findByCategoryPaginated($category, $page, $limit);
        $total = count($this->lieuRepository->findBy(['category' => $category]));
        $lastPage = ceil($total / $limit);

        return $this->render('lieu/category.html.twig', [
            'lieux' => [
                'results' => $results,
                'currentPage' => $page,
                'lastPage' => $lastPage,
                'hasPreviousPage' => $page > 1,
                'hasNextPage' => $page < $lastPage
            ],
            'category' => $category
        ]);
    }

    #[Route('/lieu/{id}', name: 'app_lieu_details')]
    public function details(Lieu $lieu): Response
    {
        $similarLieux = $this->lieuRepository->findBy(
            ['category' => $lieu->getCategory()], 
            ['price' => 'ASC'], 
            3
        );

        $avis = $this->entityManager->getRepository(Avis::class)->findAvisWithUserInfo($lieu->getId());

        return $this->render('lieu/details.html.twig', [
            'lieu' => $lieu,
            'similarLieux' => $similarLieux,
            'popularLieux' => $this->lieuRepository->findPopularLieux(),
            'avis' => $avis
        ]);
    }
}
