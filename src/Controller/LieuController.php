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

        

        // Ligne 73-88 modifiée
        #[Route('/lieux', name: 'app_lieux')]
        public function index(Request $request): Response
        {
            $searchTerm = $request->query->get('search', '');
            $filter = $request->query->get('filter', 'all');
            
            // Modification de la logique de recherche
            $allLieux = $this->lieuRepository->searchByName($searchTerm);
            $popularLieux = $this->lieuRepository->findPopularLieux();
            $newLieux = $this->lieuRepository->findNewLieux();
        
            $lieux = match ($filter) {
                'popular' => ['results' => $popularLieux, 'currentPage' => 1, 'lastPage' => 1, 'hasPreviousPage' => false, 'hasNextPage' => false],
                'new' => ['results' => $newLieux, 'currentPage' => 1, 'lastPage' => 1, 'hasPreviousPage' => false, 'hasNextPage' => false],
                default => ['results' => $allLieux, 'currentPage' => 1, 'lastPage' => 1, 'hasPreviousPage' => false, 'hasNextPage' => false],
            };
        
            // Modification de la réponse AJAX
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
        $searchTerm = $request->query->get('term', '');
        $lieux = $this->lieuRepository->searchByName($searchTerm);

        $results = [];
        foreach ($lieux as $lieu) {
            $results[] = [
                'id' => $lieu->getId(),
                'text' => $lieu->getName(), // Important pour la compatibilité
                'name' => $lieu->getName(),
                'location' => $lieu->getLocation(),
                'category' => $lieu->getCategory(),
                'image' => $lieu->getImageUrl() ? '/uploads/lieux/' . $lieu->getImageUrl() : '/Front/img/placeholder.jpg',
                'url' => $this->generateUrl('app_lieu_details', ['id' => $lieu->getId()])
            ];
        }

        return $this->json($results); // Utilisez cette méthode au lieu de new JsonResponse
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

        #[Route('/lieu/{id}', name: 'app_lieu_details', methods: ['GET'])]
    public function details(Lieu $lieu, Request $request, EventRepository $eventRepository): Response
    {
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
            'qr_code_url' => $this->generateUrl('app_lieu_qr_code', ['id' => $lieu->getId()]),
            'events' => $events
        ]);
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
    // Ajoutez cette méthode dans LieuController


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
// src/Controller/LieuController.php

// src/Controller/LieuController.php

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