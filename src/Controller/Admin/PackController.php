<?php

namespace App\Controller\Admin;

use App\Entity\Pack;
use App\Entity\Event;
use App\Repository\PackRepository;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\NotificationsAdminRepository;
use App\Repository\DemandePackRepository;
use App\Repository\UtilisateurRepository;   
use Symfony\Component\Finder\Finder;
use App\Form\PackType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[Route('/admin/pack', name: 'admin_pack_')]
#[IsGranted('ROLE_ADMIN')]
class PackController extends AbstractController
{
    #[Route('/copy/{id}', name: 'copy', methods: ['POST'])]
    public function copy(Request $request, int $id): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->json([
                'success' => false,
                'message' => 'Vous devez être connecté.'
            ], 401);
        }

        $originalPack = $this->packRepository->find($id);
        if (!$originalPack) {
            return $this->json([
                'success' => false,
                'message' => 'Pack source introuvable.'
            ], 404);
        }

        $conn = $this->entityManager->getConnection();
        $conn->beginTransaction();
        try {
            // Get next available event/pack id
            $sql = "SELECT MAX(id) as max_id FROM event";
            $stmt = $conn->prepare($sql);
            $result = $stmt->executeQuery();
            $maxId = (int)($result->fetchAssociative()['max_id'] ?? 0);
            $nextId = $maxId + 1;

            // Dates
            $startDate = $originalPack->getEvent()->getDate();
            $endDate = $originalPack->getEndDate();

            // Insert new event
            $sql = "INSERT INTO event (id, nom, categorie, photo, date, type) VALUES (:id, :nom, :categorie, :photo, :date, 'PACK')";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue('id', $nextId);
            $stmt->bindValue('nom', $originalPack->getEvent()->getNom());
            $stmt->bindValue('categorie', $originalPack->getEvent()->getCategorie());
            $stmt->bindValue('photo', $originalPack->getEvent()->getPhoto());
            $stmt->bindValue('date', $startDate ? $startDate->format('Y-m-d') : null);
            $stmt->executeStatement();

            // Insert new pack
            $sql = "INSERT INTO pack (id, description, prix, capacité, durée, end_date, event_id, admin_id) VALUES (:id, :description, :prix, :capacite, :duree, :end_date, :event_id, :admin_id)";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue('id', $nextId);
            $stmt->bindValue('description', $originalPack->getDescription());
            $stmt->bindValue('prix', $originalPack->getPrix());
            $stmt->bindValue('capacite', $originalPack->getCapacite());
            $stmt->bindValue('duree', $originalPack->getDuree());
            if ($endDate) {
                $stmt->bindValue('end_date', $endDate->format('Y-m-d'));
            } else {
                $stmt->bindValue('end_date', null, \PDO::PARAM_NULL);
            }
            $stmt->bindValue('event_id', $nextId);
            $stmt->bindValue('admin_id', $user->getId());
            $stmt->executeStatement();

            $conn->commit();

            return $this->json([
                'success' => true,
                'message' => 'Pack copié avec succès',
                'pack' => [
                    'id' => $nextId,
                    'nom' => $originalPack->getEvent()->getNom(),
                    'prix' => $originalPack->getPrix(),
                    'description' => $originalPack->getDescription(),
                    'capacite' => $originalPack->getCapacite(),
                    'duree' => $originalPack->getDuree(),
                    'endDate' => $endDate ? $endDate->format('Y-m-d') : '',
                ]
            ]);
        } catch (\Throwable $e) {
            $conn->rollBack();
            return $this->json([
                'success' => false,
                'message' => 'Erreur lors de la copie du pack : ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/existing-data', name: 'existing_data', methods: ['GET'])]
    public function existingData(Request $request): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login', [
                '_target_path' => $request->getRequestUri()
            ]);
        }
        $packs = $this->packRepository->findAll();
        $data = array_map(function($pack) {
            return [
                'id' => $pack->getId(),
                'name' => $pack->getNom(),
                'description' => $pack->getDescription(),
            ];
        }, $packs);
        return new JsonResponse($data);
    }

    #[Route('/enhance-description', name: 'enhance_description', methods: ['POST'])]
    public function enhanceDescription(Request $request): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login', [
                '_target_path' => $request->getRequestUri()
            ]);
        }
        $desc = $request->request->get('description');
        if (!$desc) {
            return $this->json([
                'enhanced' => false,
                'message' => 'Aucune description fournie.'
            ]);
        }

        // Try grammar correction using HuggingFace T5 model
        $corrected = null;
        $hfError = null;
        $usedLocalGrammarFallback = false;
        $apiToken = $_SERVER['HUGGINGFACE_API_TOKEN'] ?? $_ENV['HUGGINGFACE_API_TOKEN'] ?? getenv('HUGGINGFACE_API_TOKEN');
        if ($apiToken) {
            try {
                $client = new \GuzzleHttp\Client([
                    'timeout' => 8,
                ]);
                // Utilisation d'un modèle fonctionnel pour la correction grammaticale
                $response = $client->post(
                    'https://api-inference.huggingface.co/models/facebook/bart-large-cnn',
                    [
                        'headers' => [
                            'Authorization' => 'Bearer ' . $apiToken,
                            'Content-Type'  => 'application/json',
                        ],
                        'json' => [
                            'inputs' => $desc
                        ]
                    ]
                );
                $body = json_decode($response->getBody()->getContents(), true);
                if (isset($body[0]['generated_text'])) {
                    $corrected = $body[0]['generated_text'];
                }
            } catch (\Throwable $e) {
                // Log and gracefully degrade
                error_log('[EnhanceDescription] HuggingFace API error: ' . $e->getMessage());
                $hfError = $e->getMessage();
            }
        }
        // Fallback local si l'API échoue
        if (!$corrected && $desc) {
            $usedLocalGrammarFallback = true;
            // Correction simple : majuscule en début de phrase et suppression des espaces multiples
            $corrected = ucfirst(preg_replace('/\s+/', ' ', trim($desc)));
        }
        // Use corrected text if available, otherwise fallback to original
        $toEnhance = $corrected ?: $desc;
        // Local enhancement logic
        $enhanced = '✨ ' . ucfirst($toEnhance) . ' (Ce pack offre une expérience exceptionnelle et personnalisée pour tous vos événements.)';

        // --- AI Vibe Classifier & Emoji Tagging ---
        $vibe = null;
        $emoji = null;
        $moodTag = null;
        $vibeError = null;
        if ($apiToken) {
            try {
                $client = $client ?? new \GuzzleHttp\Client(['timeout' => 8]);
                // Utilisation d'un modèle fonctionnel pour la détection du sentiment
                $vibeResponse = $client->post(
                    'https://api-inference.huggingface.co/models/distilbert-base-uncased-finetuned-sst-2-english',
                    [
                        'headers' => [
                            'Authorization' => 'Bearer ' . $apiToken,
                            'Content-Type'  => 'application/json',
                        ],
                        'json' => [
                            'inputs' => $toEnhance
                        ]
                    ]
                );
                $vibeBody = json_decode($vibeResponse->getBody()->getContents(), true);
                // Sortie typique : [[{"label": "POSITIVE", "score": 0.9}, ...]]
                if (isset($vibeBody[0]) && is_array($vibeBody[0])) {
                    $topVibe = $vibeBody[0][0]['label'] ?? null;
                    $vibe = $topVibe;
                }
            } catch (\Throwable $e) {
                error_log('[EnhanceDescription] Vibe classifier error: ' . $e->getMessage());
                $vibeError = $e->getMessage();
            }
        }
        // Map sentiment/vibe à emoji et tag
        $vibeMap = [
            'negative' => ['emoji' => '😞', 'tag' => 'Négatif'],
            'positive' => ['emoji' => '😊', 'tag' => 'Positif'],
            'neutral' => ['emoji' => '😐', 'tag' => 'Neutre'],
            'LABEL_0' => ['emoji' => '😞', 'tag' => 'Négatif'],
            'LABEL_1' => ['emoji' => '😐', 'tag' => 'Neutre'],
            'LABEL_2' => ['emoji' => '😊', 'tag' => 'Positif'],
        ];
        $emoji = $vibeMap[$vibe]['emoji'] ?? '';
        $moodTag = $vibeMap[$vibe]['tag'] ?? '';

        // --- Local fallback: keyword-based vibe/emoji ---
        if ((!$emoji || !$moodTag) && !$vibeError) {
            $descNorm = strtolower(iconv('UTF-8', 'ASCII//TRANSLIT', $toEnhance));
            $keywordMap = [
                'anniversaire' => ['emoji' => '🎉', 'tag' => 'Anniversaire'],
                'chic' => ['emoji' => '💼', 'tag' => 'Chic'],
                'élégant' => ['emoji' => '🍷', 'tag' => 'Élégant'],
                'elegant' => ['emoji' => '🍷', 'tag' => 'Élégant'],
                'romantique' => ['emoji' => '❤️', 'tag' => 'Romantique'],
                'fun' => ['emoji' => '😄', 'tag' => 'Fun'],
                'mariage' => ['emoji' => '💍', 'tag' => 'Mariage'],
                'enfant' => ['emoji' => '🧒', 'tag' => 'Enfant'],
                'enfants' => ['emoji' => '🧒', 'tag' => 'Enfant'],
                'entreprise' => ['emoji' => '🏢', 'tag' => 'Entreprise'],
                'corporate' => ['emoji' => '🏢', 'tag' => 'Entreprise'],
                'soirée' => ['emoji' => '🌙', 'tag' => 'Soirée'],
                'soiree' => ['emoji' => '🌙', 'tag' => 'Soirée'],
                'buffet' => ['emoji' => '🍽️', 'tag' => 'Buffet'],
                'dîner' => ['emoji' => '🍽️', 'tag' => 'Dîner'],
                'diner' => ['emoji' => '🍽️', 'tag' => 'Dîner'],
                'fête' => ['emoji' => '🥳', 'tag' => 'Fête'],
                'fete' => ['emoji' => '🥳', 'tag' => 'Fête'],
                'plage' => ['emoji' => '🏖️', 'tag' => 'Plage'],
                'sport' => ['emoji' => '🏅', 'tag' => 'Sport'],
                'nature' => ['emoji' => '🌳', 'tag' => 'Nature'],
                'détente' => ['emoji' => '🧘', 'tag' => 'Détente'],
                'detente' => ['emoji' => '🧘', 'tag' => 'Détente'],
            ];
            foreach ($keywordMap as $kw => $v) {
                if (strpos($descNorm, $kw) !== false) {
                    $emoji = $v['emoji'];
                    $moodTag = $v['tag'];
                    break;
                }
            }
        }

        $result = [
            'enhanced' => true,
            'generated_text' => $enhanced,
            'vibe' => $vibe,
            'emoji' => $emoji,
            'mood_tag' => $moodTag
        ];
        if ($hfError || $usedLocalGrammarFallback || $vibeError) {
            $result['used_fallback'] = true;
        }
        return $this->json($result);
        
    }


    
    
    #[Route('/search', name: 'search', methods: ['GET'])]
    public function search(Request $request): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login', [
                '_target_path' => $request->getRequestUri()
            ]);
        }
        $q = $request->query->get('q', '');
        $packs = [];
        if ($q && trim($q) !== '') {
            $packs = $this->packRepository->createQueryBuilder('p')
                ->leftJoin('p.event', 'e')
                ->where('LOWER(e.nom) LIKE :q OR LOWER(p.description) LIKE :q')
                ->setParameter('q', '%' . strtolower($q) . '%')
                ->getQuery()->getResult();
        } else {
            $packs = $this->packRepository->findAll();
        }
        $result = array_map(function($pack) {
            return [
                'id' => $pack->getId(),
                'event' => [
                    'nom' => $pack->getEvent() ? $pack->getEvent()->getNom() : '',
                    'photo' => $pack->getEvent() ? $pack->getEvent()->getPhoto() : null,
                ],
                'description' => $pack->getDescription(),
                'prix' => $pack->getPrix(),
                'capacite' => $pack->getCapacite(),
                'duree' => $pack->getDuree(),
                'endDate' => $pack->getEndDate() ? $pack->getEndDate()->format('Y-m-d') : null,
            ];
        }, $packs);
        return $this->json(['success' => true, 'packs' => $result]);
    }

    #[Route('/check-duplicate', name: 'check_duplicate', methods: ['POST'])]
    public function checkDuplicate(Request $request): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login', [
                '_target_path' => $request->getRequestUri()
            ]);
        }
        $name = $request->request->get('packName');
        $desc = $request->request->get('description');
        if (!$name && !$desc) {
            return $this->json([
                'duplicate' => false,
                'message' => 'Aucun nom ou description fourni.'
            ]);
        }
        $qb = $this->packRepository->createQueryBuilder('p');
        $qb->leftJoin('p.event', 'e');
        $qb->where('LOWER(e.nom) LIKE :name')
            ->setParameter('name', '%' . strtolower($name) . '%');
        if ($desc) {
            $qb->orWhere('LOWER(p.description) LIKE :desc')
                ->setParameter('desc', '%' . strtolower($desc) . '%');
        }
        $qb->setMaxResults(1);
        $result = $qb->getQuery()->getOneOrNullResult();
        if ($result) {
            return $this->json([
                'duplicate' => true,
                'message' => 'Un pack similaire existe déjà.',
                'pack' => [
                    'id' => $result->getId(),
                    'name' => $result->getNom(),
                    'description' => $result->getDescription(),
                ]
            ]);
        } else {
            return $this->json([
                'duplicate' => false,
                'message' => 'Aucun pack similaire trouvé.'
            ]);
        }
    }

    private $entityManager;
    private $packRepository;
    private $eventRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        PackRepository $packRepository,
        EventRepository $eventRepository
    ) {
        $this->entityManager = $entityManager;
        $this->packRepository = $packRepository;
        $this->eventRepository = $eventRepository;
    }

    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(Request $request, NotificationsAdminRepository $notificationsAdminRepository): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login', [
                '_target_path' => $request->getRequestUri()
            ]);
        }
        $q = $request->query->get('q');
        if ($q && trim($q) !== '') {
            $packs = $this->packRepository->search($q);
        } else {
            $packs = $this->packRepository->findAll();
        }
        $events = $this->eventRepository->findAll();
        
        // Create a new Pack instance for the form
        $pack = new Pack();
        $form = $this->createForm(PackType::class, $pack);

        // Fetch latest 4 notifications for admin (assuming adminId = 1 for now)
        $adminId = 1; // TODO: Replace with dynamic admin ID if available
        $latestNotifications = $notificationsAdminRepository->createQueryBuilder('n')
            ->orderBy('n.date_creation', 'DESC')
            ->setMaxResults(4)
            ->getQuery()
            ->getResult();
        $unreadCount = $notificationsAdminRepository->countUnreadByAdminId($adminId);

        return $this->render('admin/pack/index.html.twig', [
            'packs' => $packs,
            'events' => $events,
            'form' => $form->createView(),
            'latestNotifications' => $latestNotifications,
            'unreadNotificationsCount' => $unreadCount,
        ]);
    }

    #[Route('/create', name: 'create_form', methods: ['GET'])]
    public function showCreateForm(Request $request): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login', [
                '_target_path' => $request->getRequestUri()
            ]);
        }
        $events = $this->eventRepository->findAll();
        
        return $this->render('admin/pack/create_pack.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/create', name: 'create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login', [
                '_target_path' => $request->getRequestUri()
            ]);
        }
        try {
            $data = $request->request->all();
            $file = $request->files->get('packImage');
            $errors = [];
            
            // Validate all required fields
            if (empty($data['packName'])) {
                $errors[] = 'Le champ Nom est requis.';
            }
            
            if (empty($data['prix'])) {
                $errors[] = 'Le champ Prix est requis.';
            } elseif (!is_numeric($data['prix']) || (float)$data['prix'] < 0) {
                $errors[] = 'Le champ Prix doit être un nombre positif.';
            }
            
            if (empty($data['description'])) {
                $errors[] = 'Le champ Description est requis.';
            }
            
            if (empty($data['capacite'])) {
                $errors[] = 'Le champ Capacité est requis.';
            } elseif (!is_numeric($data['capacite']) || (int)$data['capacite'] < 0) {
                $errors[] = 'Le champ Capacité doit être un nombre positif.';
            }
            
            if (empty($data['date'])) {
                $errors[] = 'La date de début est requise.';
            }
            
            // endDate is now optional
            if (!empty($data['endDate'])) {
                if (!empty($data['date'])) {
                    $startDate = new \DateTime($data['date']);
                    $endDate = new \DateTime($data['endDate']);
                    if ($endDate < $startDate) {
                        $errors[] = 'La date de fin doit être après la date de début.';
                    }
                }
            }
            
            if (empty($data['category'])) {
                $errors[] = 'Le champ Catégorie est requis.';
            }
            
            if (empty($data['duree'])) {
                $errors[] = 'Le champ Durée est requis.';
            } elseif (!is_numeric($data['duree']) || (int)$data['duree'] < 0) {
                $errors[] = 'Le champ Durée doit être un nombre positif.';
            }
            
            // Return errors if any
            if (!empty($errors)) {
                return $this->json([
                    'success' => false,
                    'message' => 'Veuillez corriger les erreurs suivantes :',
                    'errors' => $errors
                ], 400);
            }
            
            // Debug received data
            $debugData = [];
            foreach ($data as $key => $value) {
                $debugData[$key] = is_string($value) ? substr($value, 0, 100) . (strlen($value) > 100 ? '...' : '') : gettype($value);
            }
            
            // STEP 1: Handle image upload for the pack
            $photoPath = 'Images/default.jpg'; // Default path
            
            // Check if a server image was selected
            if (!empty($data['selectedServerImage'])) {
                // Use the selected server image
                $photoPath = $data['selectedServerImage'];
            } 
            // Or if a new image was uploaded
            else if ($file && $file->isValid()) {
                try {
                    // Create uploads directory if it doesn't exist
                    $uploadsDir = $this->getParameter('kernel.project_dir') . '/public/uploads/packs/Images';
                    if (!file_exists($uploadsDir)) {
                        mkdir($uploadsDir, 0777, true);
                    }
                    
                    $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    // Sanitize filename without using transliterator_transliterate
                    $safeFilename = preg_replace('/[^A-Za-z0-9_]/', '', $originalFilename);
                    $safeFilename = strtolower(trim($safeFilename));
                    // Ensure we have at least some characters in the filename
                    if (empty($safeFilename)) {
                        $safeFilename = 'pack_image';
                    }
                    $newFilename = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();
                    
                    // Move the file directly using PHP's move_uploaded_file
                    $tempPath = $file->getPathname();
                    $targetPath = $uploadsDir . '/' . $newFilename;
                    
                    if (is_uploaded_file($tempPath) && move_uploaded_file($tempPath, $targetPath)) {
                        // Only store the relative path from the uploads/packs directory
                        $photoPath = 'Images/' . $newFilename;
                    } else {
                        throw new \Exception('Échec du déplacement du fichier uploadé. Chemin source: ' . $tempPath . ', Destination: ' . $targetPath);
                    }
                } catch (\Exception $e) {
                    // Log the error but continue with default image
                    error_log('Error handling file upload: ' . $e->getMessage());
                    return $this->json([
                        'success' => false,
                        'message' => 'Erreur lors du téléchargement de l\'image: ' . $e->getMessage(),
                        'debug' => $debugData
                    ], 500);
                }
            } else if ($file) {
                // Return file upload errors
                $errorCodes = [
                    UPLOAD_ERR_INI_SIZE => 'Le fichier dépasse la taille maximale autorisée par PHP.',
                    UPLOAD_ERR_FORM_SIZE => 'Le fichier dépasse la taille maximale autorisée par le formulaire.',
                    UPLOAD_ERR_PARTIAL => 'Le fichier a été partiellement téléchargé.',
                    UPLOAD_ERR_NO_FILE => 'Aucun fichier n\'a été téléchargé.',
                    UPLOAD_ERR_NO_TMP_DIR => 'Dossier temporaire manquant.',
                    UPLOAD_ERR_CANT_WRITE => 'Échec de l\'écriture du fichier sur le disque.',
                    UPLOAD_ERR_EXTENSION => 'Une extension PHP a arrêté le téléchargement du fichier.'
                ];
                $errorMessage = isset($errorCodes[$file->getError()]) ? $errorCodes[$file->getError()] : 'Erreur inconnue lors du téléchargement.';
                return $this->json([
                    'success' => false,
                    'message' => 'Erreur lors du téléchargement de l\'image: ' . $errorMessage,
                    'debug' => $debugData
                ], 500);
            }
            
            try {
                // STEP 2: Create the Event and Pack using direct SQL queries
                // This ensures we have full control over ID generation
                try {
                    $conn = $this->entityManager->getConnection();
                    
                    // Start transaction
                    $conn->beginTransaction();
                    
                    try {
                        // 1. First, get the next available ID
                        $sql = "SELECT MAX(id) as max_id FROM event";
                        $stmt = $conn->prepare($sql);
                        $result = $stmt->executeQuery();
                        $maxId = (int)($result->fetchAssociative()['max_id'] ?? 0);
                        $nextId = $maxId + 1;
                        
                        // Format the date values for MySQL
                        $startDate = new \DateTime($data['date']);
                        $formattedStartDate = $startDate->format('Y-m-d');
                        
                        if (!empty($data['endDate'])) {
                            $endDate = new \DateTime($data['endDate']);
                            $formattedEndDate = $endDate->format('Y-m-d');
                        } else {
                            $formattedEndDate = null;
                        }
                        
                        // 2. Insert into the event table first
                        $sql = "INSERT INTO event (id, nom, categorie, photo, date, type) 
                                VALUES (:id, :nom, :categorie, :photo, :date, 'PACK')";
                        $stmt = $conn->prepare($sql);
                        $stmt->bindValue('id', $nextId);
                        $stmt->bindValue('nom', $data['packName']);
                        $stmt->bindValue('categorie', $data['category']);
                        $stmt->bindValue('photo', $photoPath);
                        $stmt->bindValue('date', $formattedStartDate);
                        $stmt->executeStatement();
                        
                        // 3. Then insert into the pack table with the same ID
                        $sql = "INSERT INTO pack (id, description, prix, capacité, durée, end_date, event_id, admin_id) 
                                VALUES (:id, :description, :prix, :capacite, :duree, :end_date, :event_id, :admin_id)";
                        $stmt = $conn->prepare($sql);
                        $stmt->bindValue('id', $nextId);
                        $stmt->bindValue('description', $data['description']);
                        $stmt->bindValue('prix', (float)$data['prix']);
                        $stmt->bindValue('capacite', (int)$data['capacite']);
                        $stmt->bindValue('duree', (int)$data['duree']);
                        if ($formattedEndDate !== null) {
                            $stmt->bindValue('end_date', $formattedEndDate);
                        } else {
                            $stmt->bindValue('end_date', null, \PDO::PARAM_NULL);
                        }
                        $stmt->bindValue('event_id', $nextId);  // Reference to the event
                        $stmt->bindValue('admin_id', $user->getId());        // Authenticated admin
                        $stmt->executeStatement();
                        
                        // Commit the transaction
                        $conn->commit();
                        
                        // Return success response
                        return $this->json([
                            'success' => true,
                            'message' => 'Pack créé avec succès',
                            'pack' => [
                                'id' => $nextId,
                                'event' => [
                                    'id' => $nextId,
                                    'nom' => $data['packName'],
                                    'photo' => $photoPath,
                                    'date' => $formattedStartDate,
                                    'categorie' => $data['category'],
                                ],
                                'description' => $data['description'],
                                'prix' => (float)$data['prix'],
                                'capacite' => (int)$data['capacite'],
                                'duree' => (int)$data['duree'],
                                'endDate' => $formattedEndDate,
                            ],
                        ]);
                        
                    } catch (\Exception $e) {
                        // Roll back the transaction in case of error
                        $conn->rollBack();
                        throw $e;
                    }
                } catch (\Exception $e) {
                    return $this->json([
                        'success' => false,
                        'message' => 'Erreur lors de la création du pack: ' . $e->getMessage(),
                        'trace' => $e->getTraceAsString(),
                        'debug' => $debugData,
                        'line' => $e->getLine(),
                        'file' => $e->getFile()
                    ], 500);
                }
            } catch (\Exception $e) {
                return $this->json([
                    'success' => false,
                    'message' => 'Erreur lors de la création du pack: ' . $e->getMessage(),
                    'trace' => $e->getTraceAsString(),
                    'line' => $e->getLine(),
                    'file' => $e->getFile()
                ], 500);
            }
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Erreur lors de la création du pack: ' . $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'line' => $e->getLine(),
                'file' => $e->getFile()
            ], 500);
        }
    }

    #[Route('/{id}/show', name: 'show', methods: ['GET'])]
    public function show(Pack $pack, EventRepository $eventRepository, Request $request): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login', [
                '_target_path' => $request->getRequestUri()
            ]);
        }
        {
            $editForm = $this->createForm(PackType::class, $pack);
            return $this->render('admin/pack/show.html.twig', [
                'pack' => $pack,
                'events' => $eventRepository->findAll(),
                'editForm' => $editForm->createView()
            ]);
        }
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Pack $pack, Request $request): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login', [
                '_target_path' => $request->getRequestUri()
            ]);
        }
        {
            $form = $this->createForm(PackType::class, $pack);
            
            return new JsonResponse([
                'success' => true,
                'pack' => [
                    'id' => $pack->getId(),
                    'event' => [
                        'id' => $pack->getEvent()->getId(),
                        'nom' => $pack->getEvent()->getNom(),
                    ],
                    'description' => $pack->getDescription(),
                    'prix' => $pack->getPrix(),
                    'capacite' => $pack->getCapacite(),
                    'duree' => $pack->getDuree(),
                    'endDate' => $pack->getEndDate() ? $pack->getEndDate()->format('Y-m-d') : null,
                ]
            ]);
        }
    }

    #[Route('/{id}', name: 'update', methods: ['POST', 'PUT'])]
    public function update(Request $request, Pack $pack): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login', [
                '_target_path' => $request->getRequestUri()
            ]);
        }
        {
            try {
                // Log the raw request data for debugging
                $rawData = $request->getContent();
                error_log("Raw request data: " . $rawData);

                // Get the form data
                $formData = json_decode($request->getContent(), true);
                
                if (!$formData) {
                    error_log("Invalid JSON data: " . json_last_error_msg());
                    return $this->json([
                        'success' => false,
                        'message' => 'Invalid request data',
                        'debug' => [
                            'raw_data' => $rawData,
                            'json_error' => json_last_error_msg()
                        ]
                    ], 400);
                }

                error_log("Decoded form data: " . print_r($formData, true));

                // Validate required fields
                $requiredFields = ['event', 'description', 'prix', 'capacite', 'duree'];
                $missingFields = array_filter($requiredFields, function($field) use ($formData) {
                    return !isset($formData[$field]) || empty($formData[$field]);
                });

                if (!empty($missingFields)) {
                    return $this->json([
                        'success' => false,
                        'message' => 'Missing required fields',
                        'debug' => [
                            'missing_fields' => $missingFields,
                            'received_data' => $formData
                        ]
                    ], 400);
                }

                // Get the event
                $event = $this->eventRepository->find($formData['event']);
                if (!$event) {
                    return $this->json([
                        'success' => false,
                        'message' => 'Event not found',
                        'debug' => [
                            'event_id' => $formData['event']
                        ]
                    ], 400);
                }

                // Update the pack
                $pack->setEvent($event);
                $pack->setDescription($formData['description']);
                $pack->setPrix((float) $formData['prix']);
                $pack->setCapacite((int) $formData['capacite']);
                $pack->setDuree((int) $formData['duree']);
                
                if (!empty($formData['endDate'])) {
                    try {
                        $pack->setEndDate(new \DateTime($formData['endDate']));
                    } catch (\Exception $e) {
                        return $this->json([
                            'success' => false,
                            'message' => 'Invalid date format',
                            'debug' => [
                                'date_value' => $formData['endDate'],
                                'error' => $e->getMessage()
                            ]
                        ], 400);
                    }
                } else {
                    $pack->setEndDate(null);
                }

                // Persist changes
                $this->entityManager->flush();

                return $this->json([
                    'success' => true,
                    'message' => 'Pack updated successfully',
                    'pack' => [
                        'id' => $pack->getId(),
                        'event' => [
                            'id' => $pack->getEvent()->getId(),
                            'nom' => $pack->getEvent()->getNom(),
                        ],
                        'description' => $pack->getDescription(),
                        'prix' => $pack->getPrix(),
                        'capacite' => $pack->getCapacite(),
                        'duree' => $pack->getDuree(),
                        'endDate' => $pack->getEndDate() ? $pack->getEndDate()->format('Y-m-d') : null,
                    ],
                ]);
            } catch (\Exception $e) {
                error_log("Error updating pack: " . $e->getMessage());
                error_log("Stack trace: " . $e->getTraceAsString());
                
                return $this->json([
                    'success' => false,
                    'message' => 'Error updating pack',
                    'debug' => [
                        'error' => $e->getMessage(),
                        'trace' => $e->getTraceAsString()
                    ]
                ], 500);
            }
        }
    }

    #[Route('/{id}', name: 'delete', methods: ['DELETE'])]
    public function delete(Pack $pack): JsonResponse
    {
        try {
            $this->entityManager->remove($pack);
            $this->entityManager->flush();

            return $this->json([
                'success' => true,
                'message' => 'Pack supprimé avec succès',
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Erreur lors de la suppression du pack: ' . $e->getMessage(),
            ], 500);
        }
    }

    private function updatePackFromRequest(Pack $pack, Request $request): void
    {
        $event = $this->eventRepository->find($request->request->get('event'));
        if (!$event) {
            throw new \Exception('Event not found');
        }

        $pack->setEvent($event);
        $pack->setDescription($request->request->get('description'));
        $pack->setPrix((float) $request->request->get('prix'));
        $pack->setCapacite((int) $request->request->get('capacite'));
        $pack->setDuree((int) $request->request->get('duree'));
        
        $endDate = $request->request->get('endDate');
        if ($endDate) {
            $pack->setEndDate(new \DateTime($endDate));
        }
        
        // Set admin ID (you might want to get this from the security context)
        $pack->setAdminId(1); // Replace with actual admin ID from security context
    }

    /**
     * Lists image files from a specified server directory
     */
    #[Route('/list-files', name: 'list_files', methods: ['GET'])]
    public function listFiles(Request $request): JsonResponse
    {
        $path = $request->query->get('path', 'uploads/packs/Images');
        $fullPath = $this->getParameter('kernel.project_dir') . '/public/' . $path;
        
        $files = [];
        $success = true;
        $message = '';
        
        try {
            if (is_dir($fullPath)) {
                $finder = new Finder();
                $finder->files()
                    ->in($fullPath)
                    ->name(['*.jpg', '*.jpeg', '*.png', '*.gif', '*.webp'])
                    ->sortByName();
                
                foreach ($finder as $file) {
                    // Store only the Images/filename.jpg part without the uploads/packs/ prefix
                    $relativePath = 'Images/' . $file->getFilename();
                    $files[] = [
                        'name' => $file->getFilename(),
                        'path' => $relativePath,
                        'size' => $file->getSize(),
                        'modified' => $file->getMTime()
                    ];
                }
                
                if (count($files) === 0) {
                    $message = 'No image files found in the directory.';
                }
            } else {
                $success = false;
                $message = 'Directory does not exist: ' . $path;
            }
        } catch (\Exception $e) {
            $success = false;
            $message = 'Error reading directory: ' . $e->getMessage();
        }
        
        return $this->json([
            'success' => $success,
            'message' => $message,
            'files' => $files
        ]);
    }


    /**
 * @Route("/admin/ensure-directory", name="admin_ensure_directory", methods={"POST"})
 */
public function ensureDirectory(Request $request): JsonResponse
{
    $path = $request->request->get('path');
    $fullPath = $this->getParameter('kernel.project_dir') . '/' . $path;
    
    // Validate path to prevent directory traversal attacks
    if (!$this->isValidPath($path)) {
        return new JsonResponse([
            'success' => false,
            'message' => 'Invalid directory path'
        ], 400);
    }
    
    // Create directory if it doesn't exist
    if (!file_exists($fullPath)) {
        try {
            mkdir($fullPath, 0755, true);
            return new JsonResponse([
                'success' => true,
                'message' => 'Directory created successfully'
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Failed to create directory: ' . $e->getMessage()
            ], 500);
        }
    }
    
    return new JsonResponse([
        'success' => true,
        'message' => 'Directory already exists'
    ]);
}

/**
 * Helper method to validate path (prevent directory traversal)
 */
private function isValidPath(string $path): bool
{
    // Normalize path
    $path = str_replace('\\', '/', $path);
    
    // Check for suspicious patterns
    if (
        strpos($path, '..') !== false || 
        strpos($path, './') !== false || 
        strpos($path, '/.') !== false ||
        strpos($path, ':') !== false
    ) {
        return false;
    }
    
    // Only allow paths within uploads directory
    if (strpos($path, 'public/uploads/') !== 0) {
        return false;
    }
    
    return true;
}



    #[Route('/debug-hf-token-length', name: 'admin_pack_debug_hf_token_length', methods: ['GET'])]
    public function debugHfTokenLength(): JsonResponse
    {
        $apiToken = $_SERVER['HUGGINGFACE_API_TOKEN'] ?? $_ENV['HUGGINGFACE_API_TOKEN'] ?? getenv('HUGGINGFACE_API_TOKEN');
        return new JsonResponse([
            'length' => strlen((string)$apiToken),
            'empty' => empty($apiToken),
            'set' => isset($apiToken)
        ]);
    }
}
