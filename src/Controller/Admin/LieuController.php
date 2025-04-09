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

#[Route('/admin/lieu', name: 'admin_lieu_')]
class LieuController extends AbstractController
{
    private $entityManager;
    private $lieuRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        LieuRepository $lieuRepository
    ) {
        $this->entityManager = $entityManager;
        $this->lieuRepository = $lieuRepository;
    }

    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(): Response
    {
        $lieux = $this->lieuRepository->findAll();

        return $this->render('admin/lieu/index.html.twig', [
            'lieux' => $lieux,
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
            
            // Validation des champs obligatoires
            $errors = $this->validateLieuData($data);
            if (!empty($errors)) {
                return $this->json([
                    'success' => false,
                    'message' => 'Validation failed',
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
            
            $this->entityManager->persist($lieu);
            $this->entityManager->flush();

            return $this->json([
                'success' => true,
                'message' => 'Location created successfully',
                'lieuId' => $lieu->getId()
            ]);
            
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Error creating location: ' . $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(Lieu $lieu): Response
    {
        return $this->render('admin/lieu/show.html.twig', [
            'lieu' => $lieu
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET'])]
    public function edit(Lieu $lieu): Response
    {
        return $this->render('admin/lieu/edit.html.twig', [
            'lieu' => $lieu
        ]);
    }

    #[Route('/{id}', name: 'update', methods: ['PUT'])]
    public function update(Request $request, Lieu $lieu): JsonResponse
    {
        try {
            $data = $request->request->all();
            $file = $request->files->get('lieuImage');
            $selectedServerImage = $request->request->get('selectedServerImage');
            
            // Validation
            $errors = $this->validateLieuData($data);
            if (!empty($errors)) {
                return $this->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $errors
                ], 400);
            }
            
            // Mise à jour des propriétés
            $lieu->setName($data['name']);
            $lieu->setDescription($data['description'] ?? null);
            $lieu->setPrice((float)$data['price']);
            $lieu->setCapacity((int)$data['capacity']);
            $lieu->setLocation($data['location']);
            $lieu->setVille($data['ville'] ?? null);
            $lieu->setCategory($data['category'] ?? null);
            
            // Gestion de l'image
            $this->handleLieuImage($lieu, $file, $selectedServerImage);
            
            $this->entityManager->flush();

            return $this->json([
                'success' => true,
                'message' => 'Location updated successfully'
            ]);
            
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Error updating location: ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/{id}', name: 'delete', methods: ['DELETE'])]
    public function delete(Lieu $lieu): JsonResponse
    {
        try {
            // Suppression de l'image associée si elle existe
            if ($lieu->getImageUrl()) {
                $imagePath = $this->getParameter('kernel.project_dir') . '/public' . $lieu->getImageUrl();
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            
            $this->entityManager->remove($lieu);
            $this->entityManager->flush();

            return $this->json([
                'success' => true,
                'message' => 'Location deleted successfully',
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Error deleting location: ' . $e->getMessage(),
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
                'message' => 'Directory does not exist: ' . $path
            ], 404);
            
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Error reading directory: ' . $e->getMessage()
            ], 500);
        }
    }

    private function validateLieuData(array $data): array
    {
        $errors = [];
        
        if (empty($data['name'])) {
            $errors[] = 'The Name field is required.';
        }
        
        if (empty($data['price'])) {
            $errors[] = 'The Price field is required.';
        } elseif (!is_numeric($data['price']) || (float)$data['price'] < 0) {
            $errors[] = 'Price must be a positive number.';
        }
        
        if (empty($data['capacity'])) {
            $errors[] = 'The Capacity field is required.';
        } elseif (!is_numeric($data['capacity']) || (int)$data['capacity'] <= 0) {
            $errors[] = 'Capacity must be a positive integer.';
        }
        
        if (empty($data['location'])) {
            $errors[] = 'The Address field is required.';
        }
        
        if (empty($data['description'])) {
            $errors[] = 'The Description field is required.';
        }
        
        if (empty($data['category'])) {
            $errors[] = 'The Category field is required.';
        }
        
        return $errors;
    }

    private function handleLieuImage(Lieu $lieu, $file = null, ?string $selectedServerImage = null): void
    {
        $uploadsDir = $this->getParameter('kernel.project_dir') . '/public/uploads/locations/Images';
        
        // Si une nouvelle image est uploadée
        if ($file && $file->isValid()) {
            // Supprimer l'ancienne image si elle existe
            if ($lieu->getImageUrl()) {
                $oldImage = $this->getParameter('kernel.project_dir') . '/public' . $lieu->getImageUrl();
                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }
            }
            
            // Créer le répertoire s'il n'existe pas
            if (!file_exists($uploadsDir)) {
                mkdir($uploadsDir, 0777, true);
            }
            
            // Générer un nom de fichier sécurisé
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = preg_replace('/[^A-Za-z0-9_]/', '', $originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();
            
            // Déplacer le fichier
            $file->move($uploadsDir, $newFilename);
            $lieu->setImageUrl('/uploads/locations/Images/' . $newFilename);
        } 
        // Si une image du serveur est sélectionnée
        elseif ($selectedServerImage) {
            $lieu->setImageUrl('/uploads/locations/Images/' . $selectedServerImage);
        }
    }
}