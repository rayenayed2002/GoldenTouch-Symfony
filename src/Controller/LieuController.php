<?php

namespace App\Controller;

use App\Entity\Lieu;
use App\Entity\Avis;
use App\Form\LieuType; 
use App\Repository\LieuRepository;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class LieuController extends AbstractController
{
    public function __construct(
        private LieuRepository $lieuRepository,
        private AvisRepository $avisRepository,
        private EntityManagerInterface $entityManager
    ) {}
    #[Route('/lieu/{id}/qr-code', name: 'app_lieu_qr_code')]
    public function generateQrCode(Lieu $lieu, UrlGeneratorInterface $urlGenerator): Response
    {
        $safeName = rawurlencode($lieu->getName());
        
        $url = $urlGenerator->generate(
            'app_lieu_details', 
            ['id' => $lieu->getId()], 
            UrlGeneratorInterface::ABSOLUTE_URL
        );
        
        $result = Builder::create()
            ->writer(new PngWriter())
            ->data($url)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->size(300)
            ->margin(10)
            ->build();
            
        return new Response($result->getString(), 200, [
            'Content-Type' => $result->getMimeType(),
            'Content-Disposition' => 'attachment; filename="qr-code-'.$safeName.'.png"'
        ]);
    }

    #[Route('/lieu/new', name: 'app_lieu_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $lieu = new Lieu();
        $form = $this->createForm(LieuType::class, $lieu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'image si nécessaire
            $imageFile = $form->get('imageUrl')->getData();
            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                // Déplacer le fichier vers le répertoire de stockage
                $imageFile->move(
                    $this->getParameter('lieu_images_directory'),
                    $newFilename
                );
                $lieu->setImageUrl($newFilename);
            }

            $this->entityManager->persist($lieu);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le lieu a été créé avec succès.');
            return $this->redirectToRoute('app_lieu_details', ['id' => $lieu->getId()]);
        }

        return $this->render('lieu/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    

    #[Route('/lieux', name: 'app_lieux')]
    public function index(Request $request): Response
    {
        $searchTerm = $request->query->get('search', '');
        $filter = $request->query->get('filter', 'all');
        $allLieux = $this->lieuRepository->findAll();
        $popularLieux = $this->lieuRepository->findPopularLieux();
        $newLieux = $this->lieuRepository->findNewLieux();

        if (!empty($searchTerm)) {
            $allLieux = $this->lieuRepository->searchByName($searchTerm);
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
            'searchTerm' => $searchTerm
        ]);
    }

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
            4
        );

        $similarLieux = array_filter($similarLieux, fn($similar) => $similar->getId() !== $lieu->getId());
        $similarLieux = array_slice($similarLieux, 0, 3);

        $avis = $this->entityManager->getRepository(Avis::class)->findAvisWithUserInfo($lieu->getId());

        return $this->render('lieu/details.html.twig', [
            'lieu' => $lieu,
            'similarLieux' => $similarLieux,
            'popularLieux' => $this->lieuRepository->findPopularLieux(),
            'avis' => $avis,
            'qr_code_url' => $this->generateUrl('app_lieu_qr_code', ['id' => $lieu->getId()])
        ]);
    }

    #[Route('/reservations', name: 'app_reservation_index')]
    public function reservations(): Response
    {
        // Ajoutez ici la logique pour afficher les réservations
        return $this->render('reservation/index.html.twig', [
            // Passer les données nécessaires au template
        ]);
    }
    public function advancedSearch(array $criteria): array
{
    $queryBuilder = $this->createQueryBuilder('l');
    
    if (!empty($criteria['name'])) {
        $queryBuilder->andWhere('l.name LIKE :name')
            ->setParameter('name', '%'.$criteria['name'].'%');
    }
    
    if (!empty($criteria['location'])) {
        $queryBuilder->andWhere('l.location LIKE :location')
            ->setParameter('location', '%'.$criteria['location'].'%');
    }
    
    if (!empty($criteria['ville'])) {
        $queryBuilder->andWhere('l.ville LIKE :ville')
            ->setParameter('ville', '%'.$criteria['ville'].'%');
    }
    
    if (!empty($criteria['category'])) {
        $queryBuilder->andWhere('l.category = :category')
            ->setParameter('category', $criteria['category']);
    }
    
    if (!empty($criteria['minPrice'])) {
        $queryBuilder->andWhere('l.price >= :minPrice')
            ->setParameter('minPrice', $criteria['minPrice']);
    }
    
    if (!empty($criteria['maxPrice'])) {
        $queryBuilder->andWhere('l.price <= :maxPrice')
            ->setParameter('maxPrice', $criteria['maxPrice']);
    }
    
    if (!empty($criteria['minCapacity'])) {
        $queryBuilder->andWhere('l.capacity >= :minCapacity')
            ->setParameter('minCapacity', $criteria['minCapacity']);
    }
    
    return $queryBuilder
        ->orderBy('l.name', 'ASC')
        ->getQuery()
        ->getResult();
}
    
}