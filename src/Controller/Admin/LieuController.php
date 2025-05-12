<?php

namespace App\Controller\Admin;

use App\Entity\Lieu;
use App\Repository\LieuRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;
// Add this at the top of your controller file
use App\Repository\ReserverLieuRepository;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
#[Route('/admin/lieu', name: 'admin_lieu_')]
class LieuController extends AbstractController
{
    private $entityManager;
    private $lieuRepository;
    private $validator;

    public function __construct(
        EntityManagerInterface $entityManager,
        LieuRepository $lieuRepository,
        ValidatorInterface $validator
    ) {
        $this->entityManager = $entityManager;
        $this->lieuRepository = $lieuRepository;
        $this->validator = $validator;
    }
    // Dans LieuController.php

    #[Route('/{id}/reservations', name: 'reservations', methods: ['GET'])]
    public function reservations(int $id): Response
    {
        $lieu = $this->lieuRepository->find($id);
        
        if (!$lieu) {
            throw $this->createNotFoundException('Lieu non trouvé');
        }
        
        $reservations = [
            [
                'user' => 'Utilisateur 1',
                'date' => '2023-01-15',
                'end_date' => '2023-01-20',
                'status' => 'confirmé',
                'amount' => $lieu->getPrice()
            ],
            [
                'user' => 'Utilisateur 2',
                'date' => '2023-01-25', 
                'end_date' => '2023-01-30',
                'status' => 'en attente',
                'amount' => $lieu->getPrice()
            ]
        ];
        
        return $this->render('admin/lieu/reservations.html.twig', [
            'lieu' => $lieu,
            'reservations' => $reservations,
        ]);
    }

#[Route('/', name: 'index', methods: ['GET'])]
public function index(): Response
{
    $lieux = $this->lieuRepository->findAll();
    
    // Simuler des données de réservation (à remplacer par votre propre logique)
    $reservationCounts = [];
    foreach ($lieux as $lieu) {
        // Exemple: générer un nombre aléatoire entre 0 et 10 pour la démo
        $reservationCounts[$lieu->getId()] = rand(0, 10);
    }
    
    return $this->render('admin/lieu/index.html.twig', [
        'lieux' => $lieux,
        'reservationCounts' => $reservationCounts,
    ]);
}

    #[Route('/new', name: 'new', methods: ['GET'])]
    public function new(): Response
    {
        return $this->render('admin/lieu/new.html.twig');
    }

    #[Route('/create', name: 'create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        try {
            $data = $request->request->all();
            $file = $request->files->get('lieuImage');
            $selectedServerImage = $request->request->get('selectedServerImage');
            
            // Validation des données
            $errors = $this->validateLieuData($data, $file, $selectedServerImage);
            if (!empty($errors)) {
                return $this->json([
                    'success' => false,
                    'message' => 'Des erreurs de validation ont été trouvées',
                    'errors' => $errors
                ], 400);
            }
            
            // Création du nouveau lieu
            $lieu = new Lieu();
            $lieu->setName($data['name']);
            $lieu->setDescription($data['description'] ?? null);
            $lieu->setPrice((float)$data['price']);
            $lieu->setCapacity((int)$data['capacity']);
            $lieu->setLocation($data['location']);
            $lieu->setVille($data['ville'] ?? null);
            $lieu->setCategory($data['category'] ?? null);
            
            // Gestion de l'image
            $this->handleLieuImage($lieu, $file, $selectedServerImage);
            
            // Validation de l'entité
            $validationErrors = $this->validator->validate($lieu);
            if (count($validationErrors) > 0) {
                $errors = [];
                foreach ($validationErrors as $error) {
                    $errors[] = $error->getMessage();
                }
                return $this->json([
                    'success' => false,
                    'message' => 'Validation de l\'entité échouée',
                    'errors' => $errors
                ], 400);
            }
            
            $this->entityManager->persist($lieu);
            $this->entityManager->flush();

            return $this->json([
                'success' => true,
                'message' => 'Lieu créé avec succès',
                'lieuId' => $lieu->getId()
            ]);
            
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Erreur lors de la création du lieu: ' . $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
    }

    #[Route('/{id}/show', name: 'show', methods: ['GET'])]
    public function show(Lieu $lieu): Response
    {
        return $this->render('admin/lieu/show.html.twig', [
            'lieu' => $lieu
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET'])]
    public function edit(Lieu $lieu): JsonResponse
    {
        return $this->json([
            'success' => true,
            'data' => [
                'id' => $lieu->getId(),
                'name' => $lieu->getName(),
                'description' => $lieu->getDescription(),
                'price' => $lieu->getPrice(),
                'capacity' => $lieu->getCapacity(),
                'location' => $lieu->getLocation(),
                'ville' => $lieu->getVille(),
                'category' => $lieu->getCategory(),
                'imageUrl' => $lieu->getImageUrl()
            ]
        ]);
    }
    
    #[Route('/{id}/update', name: 'update', methods: ['POST','PUT'])]
    public function update(Request $request, Lieu $lieu): JsonResponse
    {
        try {
            $data = $request->request->all();
            $file = $request->files->get('lieuImage');
            $selectedServerImage = $request->request->get('selectedServerImage');
            
            // Validation
            $errors = $this->validateLieuData($data, $file, $selectedServerImage, true);
            if (!empty($errors)) {
                return $this->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $errors
                ], 400);
            }
            
            // Update properties
            $lieu->setName($data['name']);
            $lieu->setDescription($data['description'] ?? null);
            $lieu->setPrice((float)$data['price']);
            $lieu->setCapacity((int)$data['capacity']);
            $lieu->setLocation($data['location']);
            $lieu->setVille($data['ville'] ?? null);
            $lieu->setCategory($data['category'] ?? null);
            
            // Handle image
            $this->handleLieuImage($lieu, $file, $selectedServerImage);
            
            // Validation de l'entité
            $validationErrors = $this->validator->validate($lieu);
            if (count($validationErrors) > 0) {
                $errors = [];
                foreach ($validationErrors as $error) {
                    $errors[] = $error->getMessage();
                }
                return $this->json([
                    'success' => false,
                    'message' => 'Validation de l\'entité échouée',
                    'errors' => $errors
                ], 400);
            }
            
            $this->entityManager->flush();
    
            return $this->json([
                'success' => true,
                'message' => 'Lieu mis à jour avec succès'
            ]);
            
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Erreur lors de la mise à jour du lieu: ' . $e->getMessage()
            ], 500);
        }
    }
    
    private function uploadFile(UploadedFile $file): string
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = transliterator_transliterate(
            'Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()',
            $originalFilename
        );
        $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
        
        try {
            $file->move(
                $this->getParameter('lieu_images_directory'),
                $newFilename
            );
        } catch (FileException $e) {
            throw new \Exception('Échec du téléchargement du fichier: '.$e->getMessage());
        }
        
        return $newFilename;
    }

    #[Route('/{id}/delete', name: 'delete', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
{
    try {
        $lieu = $this->lieuRepository->find($id);
        
        if (!$lieu) {
            return $this->json([
                'success' => false,
                'message' => 'Lieu non trouvé'
            ], 404);
        }
        
        // Suppression de l'image associée si elle existe
        if ($lieu->getImageUrl()) {
            $imagePath = $this->getParameter('kernel.project_dir') . '/public' . $lieu->getImageUrl();
            if (file_exists($imagePath)) {
                try {
                    unlink($imagePath);
                } catch (\Exception $e) {
                    // Log l'erreur mais continue la suppression
                    error_log("Failed to delete image: " . $e->getMessage());
                }
            }
        }
        
        $this->entityManager->remove($lieu);
        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'message' => 'Lieu supprimé avec succès',
        ]);
        
    } catch (\Exception $e) {
        return $this->json([
            'success' => false,
            'message' => 'Erreur lors de la suppression du lieu: ' . $e->getMessage(),
        ], 500);
    }
}

    #[Route('/list-files', name: 'list_files', methods: ['GET'])]
    public function listFiles(Request $request): JsonResponse
    {
        $path = $request->query->get('path', 'uploads/locations/Images');
        $fullPath = $this->getParameter('kernel.project_dir') . '/public/' . $path;
        
        $files = [];
        
        try {
            if (is_dir($fullPath)) {
                $finder = new Finder();
                $finder->files()
                    ->in($fullPath)
                    ->name(['*.jpg', '*.jpeg', '*.png', '*.gif', '*.webp'])
                    ->sortByName();
                
                foreach ($finder as $file) {
                    $files[] = [
                        'name' => $file->getFilename(),
                        'path' => $file->getFilename(),
                        'size' => $file->getSize(),
                        'modified' => $file->getMTime()
                    ];
                }
                
                return $this->json([
                    'success' => true,
                    'files' => $files,
                    'path' => $path
                ]);
            }
            
            return $this->json([
                'success' => false,
                'message' => 'Le répertoire n\'existe pas: ' . $path
            ], 404);
            
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Erreur lors de la lecture du répertoire: ' . $e->getMessage()
            ], 500);
        }
    }

    private function validateLieuData(array $data, $file = null, ?string $selectedServerImage = null, bool $isUpdate = false): array
    {
        $errors = [];
        
        // Validation du nom
        if (empty($data['name'])) {
            $errors['name'] = 'Le champ Nom est requis.';
        } elseif (strlen($data['name']) > 255) {
            $errors['name'] = 'Le nom ne doit pas dépasser 255 caractères.';
        }
        
        // Validation du prix
        if (empty($data['price'])) {
            $errors['price'] = 'Le champ Prix est requis.';
        } elseif (!is_numeric($data['price']) || (float)$data['price'] < 0) {
            $errors['price'] = 'Le prix doit être un nombre positif.';
        }
        
        // Validation de la capacité
        if (empty($data['capacity'])) {
            $errors['capacity'] = 'Le champ Capacité est requis.';
        } elseif (!is_numeric($data['capacity']) || (int)$data['capacity'] <= 0) {
            $errors['capacity'] = 'La capacité doit être un nombre entier positif.';
        }
        
        // Validation de l'adresse
        if (empty($data['location'])) {
            $errors['location'] = 'Le champ Adresse est requis.';
        } elseif (strlen($data['location']) > 255) {
            $errors['location'] = 'L\'adresse ne doit pas dépasser 255 caractères.';
        }
        
        // Validation de la description
        if (empty($data['description'])) {
            $errors['description'] = 'Le champ Description est requis.';
        }
        
        // Validation de la catégorie
        if (empty($data['category'])) {
            $errors['category'] = 'Le champ Catégorie est requis.';
        }
        
        // Validation de l'image
        if (!$isUpdate && !$file && !$selectedServerImage) {
            $errors['image'] = 'Une image est requise (upload ou sélection depuis le serveur).';
        }
        
        // Validation du fichier uploadé si présent
        if ($file && $file instanceof UploadedFile) {
            if (!$file->isValid()) {
                $errors['image'] = 'Le fichier uploadé n\'est pas valide.';
            } else {
                $mimeTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                $maxSize = 5 * 1024 * 1024; // 5MB
                
                if (!in_array($file->getMimeType(), $mimeTypes)) {
                    $errors['image'] = 'Le fichier doit être une image (JPEG, PNG, GIF ou WebP).';
                }
                
                if ($file->getSize() > $maxSize) {
                    $errors['image'] = 'L\'image ne doit pas dépasser 5MB.';
                }
            }
        }
        
        return $errors;
    }

    private function handleLieuImage(Lieu $lieu, $file = null, ?string $selectedServerImage = null): void
    {
        $projectDir = $this->getParameter('kernel.project_dir');
        $fullUploadPath = $projectDir . '/public/uploads/lieux/Images';

        if ($file && $file instanceof UploadedFile && $file->isValid()) {
            if ($lieu->getImageUrl()) {
                $oldImagePath = $projectDir . '/public/uploads/lieux/' . $lieu->getImageUrl();
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            if (!file_exists($fullUploadPath)) {
                mkdir($fullUploadPath, 0777, true);
            }

            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = preg_replace('/[^A-Za-z0-9_-]/', '', $originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

            $file->move($fullUploadPath, $newFilename);
            $lieu->setImageUrl('Images/' . $newFilename);
        }
    }

    #[Route('/upload-image', name: 'upload_image', methods: ['POST'])]
    public function uploadImage(Request $request): JsonResponse
    {
        try {
            $file = $request->files->get('file');
            
            if (!$file) {
                return $this->json([
                    'success' => false,
                    'message' => 'Aucun fichier n\'a été envoyé'
                ], 400);
            }

            $projectDir = $this->getParameter('kernel.project_dir');
            $fullUploadPath = $projectDir . '/public/uploads/lieux/editor';
            $webPath = '/uploads/lieux/editor';

            if (!file_exists($fullUploadPath)) {
                mkdir($fullUploadPath, 0777, true);
            }

            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = preg_replace('/[^A-Za-z0-9_-]/', '', $originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

            $file->move($fullUploadPath, $newFilename);

            return $this->json([
                'success' => true,
                'location' => $webPath . '/' . $newFilename
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Erreur lors de l\'upload de l\'image: ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/stats', name: 'stats', methods: ['GET'])]
    public function stats(LieuRepository $lieuRepository, ReserverLieuRepository $reserverLieuRepository): Response
    {
        $topLieux = $lieuRepository->getTopLieux();
        $categoryDistribution = $lieuRepository->getCategoryDistribution();
        $locationStats = $lieuRepository->getLocationStats();
        $lieuxCeMois = $reserverLieuRepository->countThisMonthReservations();
        $mostReservedLieuThisMonth = $reserverLieuRepository->getMostReservedLieuThisMonth();
        $monthlyReservations = $reserverLieuRepository->getMonthlyReservations();
        $monthlyRevenue = $reserverLieuRepository->getMonthlyRevenue();
    
        return $this->render('admin/lieu/stat.html.twig', [
            'topLieux' => $topLieux,
            'categoryDistribution' => $categoryDistribution,
            'locationStats' => $locationStats,
            'lieuxCeMois' => $lieuxCeMois,
            'mostReservedLieuThisMonth' => $mostReservedLieuThisMonth,
            'monthlyReservations' => $monthlyReservations,
            'monthlyRevenue' => $monthlyRevenue
        ]);
    }

  

    #[Route('/stats/revenue-data', name: 'revenue_data', methods: ['GET'])]
    public function getRevenueData(LieuRepository $lieuRepository): JsonResponse
    {
        $data = $lieuRepository->getMonthlyRevenue();
        return $this->json($data);
    }

    

    #[Route('/revenue-report', name: 'revenue_report', methods: ['GET'])]
    public function revenueReport(LieuRepository $lieuRepository, \App\Repository\ReserverLieuRepository $reserverLieuRepository): Response
    {
        $lieux = $lieuRepository->findAll();
        $totalRevenue = 0;
        $revenueByLieu = [];

        foreach ($lieux as $lieu) {
            $reservations = $reserverLieuRepository->findBy(['lieu' => $lieu, 'status' => 'confirmé']);
            $lieuRevenue = 0;
            
            foreach ($reservations as $reservation) {
                $lieuRevenue += $lieu->getPrice();
            }
            
            $revenueByLieu[$lieu->getId()] = [
                'name' => $lieu->getName(),
                'revenue' => $lieuRevenue
            ];
            
            $totalRevenue += $lieuRevenue;
        }

        return $this->render('admin/lieu/revenue_report.html.twig', [
            'lieux' => $lieux,
            'revenueByLieu' => $revenueByLieu,
            'totalRevenue' => $totalRevenue
        ]);
    }

    #[Route('/search', name: 'search', methods: ['GET'])]
    public function search(Request $request): JsonResponse
    {
        try {
            $query = $request->query->get('query');
            $category = $request->query->get('category');
            $minPrice = $request->query->get('minPrice');
            $maxPrice = $request->query->get('maxPrice');
            $minCapacity = $request->query->get('minCapacity');
            $villeFilter = $request->query->get('villeFilter');

            $queryBuilder = $this->lieuRepository->createQueryBuilder('l');

            if ($query) {
                $queryBuilder->andWhere('l.name LIKE :query OR l.description LIKE :query')
                    ->setParameter('query', '%' . $query . '%');
            }

            if ($category) {
                $queryBuilder->andWhere('l.category = :category')
                    ->setParameter('category', $category);
            }

            if ($minPrice) {
                $queryBuilder->andWhere('l.price >= :minPrice')
                    ->setParameter('minPrice', (float)$minPrice);
            }

            if ($maxPrice) {
                $queryBuilder->andWhere('l.price <= :maxPrice')
                    ->setParameter('maxPrice', (float)$maxPrice);
            }

            if ($minCapacity) {
                $queryBuilder->andWhere('l.capacity >= :minCapacity')
                    ->setParameter('minCapacity', (int)$minCapacity);
            }

            if ($villeFilter) {
                $queryBuilder->andWhere('l.ville LIKE :villeFilter')
                    ->setParameter('villeFilter', '%' . $villeFilter . '%');
            }

            $lieux = $queryBuilder->getQuery()->getResult();

            $results = array_map(function($lieu) {
                return [
                    'id' => $lieu->getId(),
                    'name' => $lieu->getName(),
                    'description' => $lieu->getDescription(),
                    'ville' => $lieu->getVille(),
                    'capacity' => $lieu->getCapacity(),
                    'price' => $lieu->getPrice(),
                    'imageUrl' => $lieu->getImageUrl(),
                    'location' => $lieu->getLocation(),
                    'category' => $lieu->getCategory()
                ];
            }, $lieux);

            return new JsonResponse([
                'success' => true,
                'results' => $results
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Une erreur est survenue lors de la recherche: ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/{id}/calendar', name: 'calendar', methods: ['GET'])]
    public function calendar(Lieu $lieu, ReserverLieuRepository $reserverLieuRepository): Response
    {
        // Récupérer les réservations pour ce lieu
        $reservations = $reserverLieuRepository->findBy(['lieu' => $lieu]);
        
        // Formater les réservations pour le calendrier
        $events = array_map(function($reservation) {
            return [
                'id' => $reservation->getId(),
                'title' => 'Réservé', // Vous pouvez personnaliser le titre
                'start' => $reservation->getDate_reservation()->format('Y-m-d'),
                'end' => $reservation->getDate_reservation()->format('Y-m-d'),
                'status' => $reservation->getStatus()
            ];
        }, $reservations);

        return $this->render('admin/lieu/calendar.html.twig', [
            'lieu' => $lieu,
            'events' => json_encode($events)
        ]);
    }
}