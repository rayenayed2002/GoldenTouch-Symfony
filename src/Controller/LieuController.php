<?php
namespace App\Controller;

use App\Entity\ReserverLieu;
use App\Entity\Lieu;
use App\Entity\Avis;
use App\Form\LieuType;
use App\Repository\LieuRepository;
use App\Repository\AvisRepository;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Dompdf\Dompdf;
use Dompdf\Options;


class LieuController extends AbstractController
{
    #[Route('/lieux/pdf', name: 'app_lieux_pdf')]
    public function exportPdf(): Response
    {
        $lieux = $this->lieuRepository->findAll();
        
        // Configuration de Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        
        $dompdf = new Dompdf($options);
        
        // Génération du contenu HTML
        $html = $this->renderView('lieu/pdf_template.html.twig', [
            'lieux' => $lieux
        ]);
        
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        // Génération du PDF
        $response = new Response($dompdf->output());
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment;filename="lieux.pdf"');
        
        return $response;
    }

    public function __construct(
        private LieuRepository $lieuRepository,
        private EntityManagerInterface $entityManager,
        private UrlGeneratorInterface $urlGenerator
    ) {}



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

        

        // Ligne 73-88 modifiée
        #[Route('/lieux', name: 'app_lieux')]
        public function index(Request $request): Response
        {
            $page = $request->query->getInt('page', 1);
            $limit = $request->query->getInt('limit', 9);
            $searchTerm = $request->query->get('search', '');
            $category = $request->query->get('category');
            $orderBy = $request->query->get('orderby');
            $filter = $request->query->get('filter', 'all');
            $location = $request->query->get('location', '');
            $minPrice = $request->query->get('minPrice');
            $maxPrice = $request->query->get('maxPrice');

            $queryBuilder = $this->lieuRepository->createQueryBuilder('l');

            if ($searchTerm) {
                $queryBuilder->andWhere('LOWER(l.name) LIKE LOWER(:searchTerm) OR LOWER(l.description) LIKE LOWER(:searchTerm)')
                    ->setParameter('searchTerm', '%' . $searchTerm . '%');
            }

            if ($location) {
                $queryBuilder->andWhere('LOWER(l.location) LIKE LOWER(:location) OR LOWER(l.ville) LIKE LOWER(:location)')
                    ->setParameter('location', '%' . $location . '%');
            }

            if ($category) {
                $queryBuilder->andWhere('l.category = :category')
                    ->setParameter('category', $category);
            }

            if ($minPrice) {
                $queryBuilder->andWhere('l.price >= :minPrice')
                    ->setParameter('minPrice', floatval($minPrice));
            }

            if ($maxPrice) {
                $queryBuilder->andWhere('l.price <= :maxPrice')
                    ->setParameter('maxPrice', floatval($maxPrice));
            }

            switch ($orderBy) {
                case 'price_asc':
                    $queryBuilder->orderBy('l.price', 'ASC');
                    break;
                case 'price_desc':
                    $queryBuilder->orderBy('l.price', 'DESC');
                    break;
                case 'capacity_asc':
                    $queryBuilder->orderBy('l.capacity', 'ASC');
                    break;
                case 'capacity_desc':
                    $queryBuilder->orderBy('l.capacity', 'DESC');
                    break;
                default:
                    $queryBuilder->orderBy('l.id', 'ASC');
            }

            $total = count($queryBuilder->getQuery()->getResult());
            $lastPage = ceil($total / $limit);

            $lieux = $queryBuilder
                ->setFirstResult(($page - 1) * $limit)
                ->setMaxResults($limit)
                ->getQuery()
                ->getResult();

            if ($request->isXmlHttpRequest()) {
                return new JsonResponse([
                    'results' => array_map(function($lieu) {
                        return [
                            'id' => $lieu->getId(),
                            'name' => $lieu->getName(),
                            'description' => $lieu->getDescription(),
                            'location' => $lieu->getLocation(),
                            'category' => $lieu->getCategory(),
                            'price' => $lieu->getPrice(),
                            'capacity' => $lieu->getCapacity(),
                            'imageUrl' => $lieu->getImageUrl()
                        ];
                    }, $lieux),
                    'currentPage' => $page,
                    'lastPage' => $lastPage,
                    'hasPreviousPage' => $page > 1,
                    'hasNextPage' => $page < $lastPage
                ]);
            }

            $popularLieux = $this->lieuRepository->findPopularLieux();
            $newLieux = $this->lieuRepository->findNewLieux();

            // Statistiques
            if ($filter === 'statistics') {
                $stats = [
                    'total' => $total,
                    'reservations' => $this->lieuRepository->getMonthlyReservations(),
                    'revenue' => $this->lieuRepository->getMonthlyRevenue(),
                    'topLieux' => $this->lieuRepository->getTopLieux(),
                    'categoryDistribution' => $this->lieuRepository->getCategoryDistribution()
                ];
                return $this->render('lieu/index.html.twig', [
                    'lieux' => array_merge(['total' => $total], $stats),
                    'currentFilter' => 'statistics'
                ]);
            }
        
            $lieux = match ($filter) {
                'popular' => ['results' => $popularLieux, 'currentPage' => 1, 'lastPage' => 1, 'hasPreviousPage' => false, 'hasNextPage' => false],
                'new' => ['results' => $newLieux, 'currentPage' => 1, 'lastPage' => 1, 'hasPreviousPage' => false, 'hasNextPage' => false],
                default => [
                    'results' => array_slice($allLieux, ($page - 1) * $limit, $limit),
                    'currentPage' => $page,
                    'lastPage' => $lastPage,
                    'hasPreviousPage' => $page > 1,
                    'hasNextPage' => $page < $lastPage
                ],
            };
        
            if ($request->isXmlHttpRequest()) {
                return new Response(
                    $this->renderView('lieu/index.html.twig', [
                        'lieux' => $lieux,
                        'currentFilter' => $filter,
                        'searchTerm' => $searchTerm,
                        'ajax_request' => true
                    ])
                );
            }
        
            return $this->render('lieu/index.html.twig', [
                'lieux' => $lieux,
                'popularLieux' => $popularLieux,
                'currentFilter' => $filter,
                'searchTerm' => $searchTerm,
                'ajax_request' => false
            ]);
        }
        

    // Dans LieuController.php
    // Dans LieuController.php
    #[Route('/lieu/search-autocomplete', name: 'app_lieu_search_autocomplete', methods: ['GET'])]
public function searchAutocomplete(Request $request): JsonResponse
{
    $criteria = [
        'name' => $request->query->get('name', ''),
        'location' => $request->query->get('location', ''),
        'category' => $request->query->get('category', ''),
        'minPrice' => $request->query->get('minPrice'),
        'maxPrice' => $request->query->get('maxPrice')
    ];
    
    $lieux = $this->advancedSearch($criteria);
    
    $results = [];
    foreach ($lieux as $lieu) {
        $results[] = [
            'id' => $lieu->getId(),
            'name' => $lieu->getName(),
            'description' => $lieu->getDescription(),
            'location' => $lieu->getLocation(),
            'category' => $lieu->getCategory(),
            'price' => $lieu->getPrice(),
            'capacity' => $lieu->getCapacity(),
            'image' => $lieu->getImageUrl() ? '' . $lieu->getImageUrl() : '/Front/img/placeholder.jpg',
            'url' => $this->generateUrl('app_lieu_details', ['id' => $lieu->getId()])
        ];
    }
    
    return $this->json($results);
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
            'hasNextPage' => false,
            'total' => count($popularLieux)
        ],
        'new' => [
            'results' => $newLieux,
            'currentPage' => 1,
            'lastPage' => 1,
            'hasPreviousPage' => false,
            'hasNextPage' => false,
            'total' => count($newLieux)
        ],
        default => [
            'results' => $results,
            'currentPage' => $page,
            'lastPage' => $lastPage,
            'hasPreviousPage' => $page > 1,
            'hasNextPage' => $page < $lastPage,
            'total' => $total
        ],
    };



































    // Modifier cette ligne pour utiliser 'index.html.twig' au lieu de 'lieu/lieu.html.twig'
    return $this->render('lieu/index.html.twig', [
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

        #[Route('/lieu/{id}', name: 'app_lieu_details', methods: ['GET'])]
    public function details(Request $request, EventRepository $eventRepository, string $id): Response
    {
        try {
            $lieu = $this->lieuRepository->find((int) $id);
            
            if (!$lieu) {
                $this->addFlash('error', 'Le lieu demandé n\'existe pas.');
                return $this->redirectToRoute('app_lieux');
            }
            
            $similarLieux = $this->lieuRepository->findBy(
                ['category' => $lieu->getCategory()], 
                ['price' => 'ASC'], 
                4
            );

            $similarLieux = array_filter($similarLieux, fn($similar) => $similar->getId() !== $lieu->getId());
            $similarLieux = array_slice($similarLieux, 0, 3);

            $avis = $this->entityManager->getRepository(Avis::class)->findAvisWithUserInfo($lieu->getId());
            
            // Récupérer les événements pour l'utilisateur avec ID = 55 (statique)
            $userId = 55;
            $events = $eventRepository->createQueryBuilder('e')
                ->where('e.utilisateur = :userId')
                ->setParameter('userId', $userId)
                ->getQuery()
                ->getResult();

            return $this->render('lieu/details.html.twig', [
                'lieu' => $lieu,
                'similarLieux' => $similarLieux,
                'popularLieux' => $this->lieuRepository->findPopularLieux(),
                'avis' => $avis,
                'events' => $events
            ]);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur est survenue lors du chargement du lieu.');
            return $this->redirectToRoute('app_lieux');
        }
    }

    #[Route('/process-booking', name: 'app_process_booking', methods: ['POST'])]
    public function processBooking(Request $request): Response
    {
        $lieuId = $request->request->getInt('lieu_id');
        $eventId = $request->request->getInt('event_id');
        $dateString = $request->request->get('date_reservation');
        $userId = 55; // À remplacer par l'ID de l'utilisateur connecté

        // Validation
        if (!$lieuId || !$dateString) {
            $this->addFlash('error', 'Tous les champs sont obligatoires');
            return $this->redirectToRoute('app_lieu_details', ['id' => $lieuId]);
        }

        // Vérification que le lieu existe
        $lieu = $this->lieuRepository->find($lieuId);
        if (!$lieu) {
            $this->addFlash('error', 'Lieu non trouvé');
            return $this->redirectToRoute('app_lieu_index');
        }

        // Création de la réservation
        $reservation = new ReserverLieu();
        $reservation->setLieuId($lieuId);
        $reservation->setEventId($eventId);
        $reservation->setUserId($userId);
        $reservation->setDateReservation(new \DateTime($dateString));
        $reservation->setStatus('pending');

        $this->entityManager->persist($reservation);
        $this->entityManager->flush();

        $this->addFlash('success', 'Réservation confirmée!');
        return $this->redirectToRoute('app_user_reservations');
    }


        
    public function advancedSearch(array $criteria): array
{
    $queryBuilder = $this->lieuRepository->createQueryBuilder('l');
    
    if (!empty($criteria['name'])) {
        $queryBuilder->andWhere('LOWER(l.name) LIKE LOWER(:name)')
            ->setParameter('name', '%'.$criteria['name'].'%');
    }
    
    if (!empty($criteria['location'])) {
        $queryBuilder->andWhere('LOWER(l.location) LIKE LOWER(:location) OR LOWER(l.ville) LIKE LOWER(:location)')
            ->setParameter('location', '%'.$criteria['location'].'%');
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
    
    return $queryBuilder
        ->orderBy('l.name', 'ASC')
        ->getQuery()
        ->getResult();
}



// Remplacer la méthode userReservations existante par :
#[Route('/mes-reservations', name: 'app_user_reservations')]
public function userReservations(): Response
{
    // ID utilisateur statique (à remplacer par l'utilisateur connecté)
    $userId = 25;
    
    // Récupérer les réservations avec jointure sur Lieu
    $reservations = $this->entityManager->createQuery(
        'SELECT r, l 
         FROM App\Entity\ReserverLieu r 
         JOIN App\Entity\Lieu l WITH r.lieuId = l.id 
         WHERE r.user_id = :userId 
         ORDER BY r.date_reservation DESC'
    )->setParameter('userId', $userId)
     ->getResult();

    return $this->render('lieu/reservations.html.twig', [
        'reservations' => $reservations
    ]);
}


#[Route('/reservation/{id}/cancel', name: 'app_reservation_cancel', methods: ['POST'])]
public function cancelReservation(ReserverLieu $reservation): Response
{
    if ($reservation->getStatus() === 'pending') {
        $this->entityManager->remove($reservation);
        $this->entityManager->flush();
        $this->addFlash('success', 'Réservation annulée avec succès');
    } else {
        $this->addFlash('error', 'Impossible d\'annuler cette réservation');
    }
    
    return $this->redirectToRoute('app_user_reservations');
}


#[Route('/lieu/{id}/toggle-favori', name: 'app_lieu_toggle_favori', methods: ['POST'])]
public function toggleFavori(int $id, Request $request): Response
{
    $session = $request->getSession();
    $favoris = $session->get('favoris', []);
    
    if (($key = array_search($id, $favoris)) !== false) {
        unset($favoris[$key]);
        $isFavori = false;
    } else {
        $favoris[] = $id;
        $isFavori = true;
    }
    
    $session->set('favoris', array_values($favoris)); // array_values pour réindexer
    
    return new JsonResponse([
        'status' => 'success',
        'is_favori' => $isFavori
    ]);
}

#[Route('/mes-favoris', name: 'app_mes_favoris')]
public function mesFavoris(Request $request, LieuRepository $lieuRepo): Response
{
    $favorisIds = $request->getSession()->get('favoris', []);
    $lieux = !empty($favorisIds) ? $lieuRepo->findBy(['id' => $favorisIds]) : [];
    
    return $this->render('lieu/favoris.html.twig', [
        'lieux' => $lieux
    ]);
}















}