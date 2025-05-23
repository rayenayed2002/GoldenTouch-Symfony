<?php
namespace App\Controller;

use App\Entity\ReserverLieu;
use App\Entity\Lieu;
use App\Entity\Avis;
use App\Entity\Categorie;
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
use App\Entity\User;
use Knp\Component\Pager\PaginatorInterface;


class LieuController extends AbstractController
{
    public function __construct(
        private LieuRepository $lieuRepository,
        private EntityManagerInterface $entityManager,
        private UrlGeneratorInterface $urlGenerator
    ) {
    }

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
                $safeFilename = uniqid();
                $newFilename = $safeFilename . '.' . $imageFile->guessExtension();
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
        $page = $request->query->getInt('page', 1);
        $limit = $request->query->getInt('limit', 9);
        $searchTerm = $request->query->get('search', '');
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
                'topLieux' => $this->lieuRepository->getTopLieux(),
                'categoryDistribution' => $this->lieuRepository->getCategoryDistribution()
            ];
            return $this->render('lieu/index.html.twig', [
                'lieux' => array_merge(['total' => $total], $stats),
                'currentFilter' => 'statistics',
                'searchTerm' => $searchTerm,
                'ajax_request' => false
            ]);
        }

        $lieuxData = match ($filter) {
            'popular' => [
                'results' => [
                    'results' => $popularLieux,
                    'currentPage' => 1,
                    'lastPage' => 1,
                    'hasPreviousPage' => false,
                    'hasNextPage' => false
                ]
            ],
            'new' => [
                'results' => [
                    'results' => $newLieux,
                    'currentPage' => 1,
                    'lastPage' => 1,
                    'hasPreviousPage' => false,
                    'hasNextPage' => false
                ]
            ],
            default => [
                'results' => [
                    'results' => $lieux,
                    'currentPage' => $page,
                    'lastPage' => $lastPage,
                    'hasPreviousPage' => $page > 1,
                    'hasNextPage' => $page < $lastPage
                ]
            ],
        };

        if ($request->isXmlHttpRequest()) {
            return new Response(
                $this->renderView('lieu/index.html.twig', [
                    'lieux' => $lieuxData,
                    'currentFilter' => $filter,
                    'searchTerm' => $searchTerm,
                    'ajax_request' => true
                ])
            );
        }

        return $this->render('lieu/index.html.twig', [
            'lieux' => $lieuxData,
            'popularLieux' => $popularLieux,
            'currentFilter' => $filter,
            'searchTerm' => $searchTerm,
            'ajax_request' => false
        ]);
    }
    
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

    #[Route('/lieu/detail/{id}', name: 'app_lieu_details')]
    public function show(Lieu $lieu, EventRepository $eventRepository): Response
    {
        $similarLieux = $this->lieuRepository->findBy(
            ['category' => $lieu->getCategory()],
            ['price' => 'ASC'],
            4
        );
        $similarLieux = array_filter($similarLieux, fn($similar) => $similar->getId() !== $lieu->getId());
        $similarLieux = array_slice($similarLieux, 0, 3);

        $avis = $this->entityManager->getRepository(Avis::class)->findAvisWithUserInfo($lieu->getId());
        
        // Récupérer les événements de l'utilisateur connecté
        $user = $this->getUser();
        $events = $user ? $eventRepository->findBy(['user' => $user]) : [];

        return $this->render('lieu/details.html.twig', [
            'lieu' => $lieu,
            'similarLieux' => $similarLieux,
            'popularLieux' => $this->lieuRepository->findPopularLieux(),
            'avis' => $avis,
            'events' => $events
        ]);
    }

    public function processBooking(Request $request, string $id): Response
    {
        // Validation
        $lieuId = $request->request->get('lieuId');
        $dateString = $request->request->get('date');

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
        return $this->redirectToRoute('app_lieu_user_reservations');
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

    #[Route('/lieu/mes-reservations', name: 'app_lieu_user_reservations')]
    public function userReservations(Request $request, PaginatorInterface $paginator): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour voir vos réservations.');
        }

        $queryBuilder = $this->entityManager->createQueryBuilder()
            ->select('r, l, e')
            ->from('App\\Entity\\ReserverLieu', 'r')
            ->join('r.lieu', 'l')
            ->join('r.event', 'e')
            ->where('e.user = :user')
            ->setParameter('user', $user)
            ->orderBy('r.date_reservation', 'DESC');

        $reservations = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            6 // Nombre d'éléments par page
        );

        return $this->render('lieu/reservations.html.twig', [
            'reservations' => $reservations,
            'currentPage' => $request->query->getInt('page', 1),
            'pages' => ceil($reservations->getTotalItemCount() / 6)
        ]);
    }

    #[Route('/lieu/all-reservations', name: 'app_lieu_all_reservations')]
    public function allReservations(): Response
    {
        $reservations = $this->entityManager->getRepository(ReserverLieu::class)->findAll();
        return $this->render('lieu/reservation_all.html.twig', [
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
        
        return $this->redirectToRoute('app_lieu_user_reservations');
    }

    #[Route('/lieu/{id}/toggle-favori', name: 'app_lieu_toggle_favori', methods: ['POST'])]
    public function toggleFavori(int $id, Request $request): Response
    {
        return $this->redirectToRoute('app_favoris_toggle', ['id' => $id]);
    }

    #[Route('/mes-favoris', name: 'app_mes_favoris')]
    public function mesFavoris(Request $request): Response
    {
        return $this->redirectToRoute('app_favoris_index');
    }

    #[Route('/admin/lieu/reservations/{userId}', name: 'admin_lieu_reservations_by_user')]
    public function reservationsByUser(int $userId, EntityManagerInterface $entityManager): Response
    {
        $reservations = $entityManager->getRepository(ReserverLieu::class)
            ->createQueryBuilder('r')
            ->join('r.lieu', 'l')
            ->join('r.event', 'e')
            ->where('e.user = :userId')
            ->setParameter('userId', $userId)
            ->orderBy('r.date_reservation', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('admin/lieu/reservations_by_user.html.twig', [
            'reservations' => $reservations,
            'userId' => $userId
        ]);
    }

    #[Route('/admin/lieu/utilisateurs', name: 'admin_lieu_users')]
    public function listUsers(EntityManagerInterface $entityManager): Response
    {
        $users = $entityManager->getRepository(User::class)->findAll();
        return $this->render('admin/lieu/users.html.twig', [
            'users' => $users
        ]);
    }
}