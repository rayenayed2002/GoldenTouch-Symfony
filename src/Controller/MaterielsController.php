<?php

namespace App\Controller;

use App\Entity\Materielle;  // <-- Add this line
use App\Repository\MaterielleRepository;
use App\Repository\EventRepository;
use App\Repository\ReservMatRepository;
use App\Entity\Categorie;  // <-- Add this line
use App\Repository\CategorieRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;  // <-- Add this line
use App\Form\MaterielleType;
use Symfony\Component\Form\Extension\Core\Type\FileType; // ✅ Correct import
use Picqer\Barcode\BarcodeGeneratorPNG;
use Picqer\Barcode\BarcodeGeneratorSVG;  // si tu veux générer du SVG
use Picqer\Barcode\BarcodeGeneratorHTML;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\HttpClient;
use Knp\Component\Pager\PaginatorInterface;

final class MaterielsController extends AbstractController
{
    #[Route('/materielss', name: 'app_materielss')]
public function index(Request $request, MaterielleRepository $materielleRepository, EntityManagerInterface $entityManager): Response
{
    $entityManager->clear();
    
    $searchTerm = $request->query->get('q', '');
    $sortBy = $request->query->get('sort', 'id_mat'); // Par défaut tri par ID
    $direction = $request->query->get('direction', 'ASC'); // Par défaut ordre ascendant
    
    if ($searchTerm) {
        $materiels = $materielleRepository->search($searchTerm, $sortBy, $direction);
    } else {
        $materiels = $materielleRepository->findBy([], [$sortBy => $direction]);
    }
    
    if ($request->isXmlHttpRequest()) {
        return $this->render('materiels/_materiels_grid.html.twig', [
            'materiels' => $materiels
        ]);
    }
    
    return $this->render('materiels/index.html.twig', [
        'materiels' => $materiels,
    ]);
}
 

    

  

    #[Route('/materiels/new', name: 'app_materiels_new')]
public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
{
    $materiel = new Materielle();
    $form = $this->createForm(MaterielleType::class, $materiel);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

        // Vérification si nom_mat existe déjà
        $existingMateriel = $entityManager->getRepository(Materielle::class)
            ->findOneBy(['nom_mat' => $materiel->getNom_mat()]);

        if ($existingMateriel) {
            $this->addFlash('error', 'Un matériel avec ce nom existe déjà.');
            return $this->redirectToRoute('app_materiels_new');
        }

        // Récupération de la photo
        $photoFile = $form->get('photo_mat')->getData();
        if ($photoFile) {
            if (!$photoFile instanceof \Symfony\Component\HttpFoundation\File\UploadedFile) {
                throw new \Exception('Le fichier uploadé est invalide.');
            }

            $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = 'Images/' . $safeFilename . '.' . $photoFile->guessExtension();

            // Vérifier si le dossier Images existe, sinon le créer
            $uploadDir = $this->getParameter('kernel.project_dir').'/public/uploads/materiels/Images';
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            try {
                $photoFile->move(
                    $uploadDir,
                    $safeFilename . '.' . $photoFile->guessExtension()
                );
            } catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                throw new \Exception('Erreur lors de l\'upload du fichier.');
            }

            $materiel->setPhotoMat($newFilename);
        }

        $entityManager->persist($materiel);
        $entityManager->flush();

        $this->addFlash('success', 'Matériel ajouté avec succès.');
        return $this->redirectToRoute('app_materielss');
    }

    return $this->render('materiels/show.html.twig', [
        'form' => $form->createView(),
    ]);
}

    
   
#[Route('/materiels/{id}/delete', name: 'app_materiels_delete', methods: ['POST'])]
public function delete(Request $request, Materielle $materiel, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete' . $materiel->getIdMat(), $request->request->get('_token'))) {
        $entityManager->remove($materiel);
        $entityManager->flush();
    }

    return $this->redirectToRoute('app_materielss');
}
#[Route('/materiels/{id}/edit', name: 'app_materiels_edit')]
public function edit(Request $request, Materielle $materiel, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
{
    $form = $this->createForm(MaterielleType::class, $materiel);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $photoFile = $form->get('photo_mat')->getData();

        if ($photoFile) {
            $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoFile->guessExtension();

            $photoFile->move(
                $this->getParameter('materiel_directory'),
                $newFilename
            );

            $materiel->setPhotoMat($newFilename);
        }

        $entityManager->flush();

        return $this->redirectToRoute('app_materiels_show', ['id' => $materiel->getIdMat()]);
    }

    return $this->render('materiels/edit.html.twig', [
        'form' => $form->createView(),
        'materiel' => $materiel,
    ]);
}
#[Route('/materiel/{id}', name: 'app_materiels_show', methods: ['GET'])]
public function show(Materielle $materielle): Response
{
    // Créer le contenu du code-barres à partir des données du matériel
    $barcodeContent = sprintf(
        "Nom: %s\nUnité: %s\nPrix: %.2f DT",
        $materielle->getNomMat(),
        $materielle->getQuantiteMat(),
        $materielle->getPrixMat()
        
    );

    // Générer le code-barres en base64
    $generator = new BarcodeGeneratorPNG();
    $barcode = base64_encode(
        $generator->getBarcode($barcodeContent, $generator::TYPE_CODE_128)
    );

    // Passer le SVG ou PNG encodé à Twig
    return $this->render('materiels/detail.html.twig', [
        'materiel' => $materielle,
        'barcode' => $barcode,
    ]);
}
#[Route('/materiels/{id}/generate-pdf', name: 'app_materiels_generate_pdf', methods: ['POST'])]
public function generatePdf(Request $request, Materielle $materielle): Response
{
    $quantity = (int) $request->request->get('quantity', 1);

    $barcodeContent = sprintf(
        "Nom: %s | Qté: %s | Prix: %.2f DT",
        $materielle->getNomMat(),
        $materielle->getQuantiteMat(),
        $materielle->getPrixMat()
    );

    $generator = new BarcodeGeneratorPNG();
    $barcodeImage = base64_encode(
        $generator->getBarcode($barcodeContent, $generator::TYPE_CODE_128)
    );

    // Générer le HTML
    $html = '
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .ticket {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
        .ticket img {
            max-width: 100%;
            height: auto;
        }
    </style>
    <h2>Tickets - ' . htmlspecialchars($materielle->getNomMat()) . '</h2>
    ';
    
    for ($i = 0; $i < $quantity; $i++) {
        $html .= sprintf(
            '<div class="ticket"><img src="data:image/png;base64,%s" /></div>',
            $barcodeImage
        );
    }

    // Générer le PDF avec Dompdf
    $options = new Options();
    $options->set('defaultFont', 'Arial');
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    return new Response($dompdf->output(), 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="tickets.pdf"',
    ]);
}
#[Route('/materiels/sort', name: 'app_materiels_sort', methods: ['GET'])]
public function sort(Request $request, MaterielleRepository $repo): Response
{
    $order = $request->query->get('order', 'asc'); // 'asc' ou 'desc'

    $materiels = $repo->createQueryBuilder('m')
        ->orderBy('m.prix_mat', $order)
        ->getQuery()
        ->getResult();

    return $this->render('materiels/_search_results.html.twig', [
        'materiels' => $materiels,
    ]);
}
#[Route('/liste/Mat', name: 'app_materiels_index')]
public function liste(Request $request, MaterielleRepository $materielleRepository, PaginatorInterface $paginator, CategorieRepository $categorieRepository): Response
{
    $orderBy = $request->query->get('orderby', 'default');
    $searchTerm = $request->query->get('search', '');
    $categorieId = $request->query->get('categorie'); // 🔥 On récupère la catégorie choisie

    $qb = $materielleRepository->createQueryBuilder('m');

    if (!empty($searchTerm)) {
        $qb->andWhere('m.nom_mat LIKE :searchTerm OR m.description_mat LIKE :searchTerm')
           ->setParameter('searchTerm', '%'.$searchTerm.'%');
    }

    if ($categorieId) {
        $qb->andWhere('m.categorie = :categorie')
           ->setParameter('categorie', $categorieId);
    }

    switch ($orderBy) {
        case 'price_asc': $qb->orderBy('m.prix_mat', 'ASC'); break;
        case 'price_desc': $qb->orderBy('m.prix_mat', 'DESC'); break;
        case 'name': $qb->orderBy('m.nom_mat', 'ASC'); break;
        case 'quantity': $qb->orderBy('m.quantite_mat', 'DESC'); break;
    }

    $minPrice = $request->query->get('minPrice');
    $maxPrice = $request->query->get('maxPrice');

    if ($minPrice !== null && $maxPrice !== null) {
        $qb->andWhere('m.prix_mat BETWEEN :minPrice AND :maxPrice')
           ->setParameter('minPrice', $minPrice)
           ->setParameter('maxPrice', $maxPrice);
    }

    $materiels = $paginator->paginate(
        $qb,
        $request->query->getInt('page', 1),
        6
    );

    $categories = $categorieRepository->findAll();

    if ($request->isXmlHttpRequest()) {
        return $this->render('materiels/_materiels_list.html.twig', [
            'materiels' => $materiels
        ]);
    }

    return $this->render('materiels/listeMat.html.twig', [
        'materiels' => $materiels,
        'categories' => $categories,
    ]);
}


#[Route('/materiels/{id}', name: 'app_materiels_show_Details', methods: ['GET'])]
public function showDetails(Materielle $materielle, EventRepository $eventRepository, ReservMatRepository $reservMatRepo): Response
{
    $events = $eventRepository->findAll();

    // Formatage des données
    $labels = [];
    $data = [];
    
    

    return $this->render('materiels/detailsMat.html.twig', [
        'materiel' => $materielle,
        'events' => $events,
        'reservationLabels' => $labels,
        'reservationData' => $data
    ]);
}
private function generateDescriptionFromImageWithGemini(string $imagePath): string
{
    // 1. Verify image exists and is readable
    if (!file_exists($imagePath)) {
        throw new \RuntimeException("Image file not found at path: $imagePath");
    }

    // 2. Get API key with proper error handling
    $apiKey = $this->getParameter('gemini_api_key');
    if (empty($apiKey)) {
        throw new \RuntimeException('Gemini API key not configured');
    }

    // 3. Prepare image data
    try {
        $imageData = base64_encode(file_get_contents($imagePath));
        $mimeType = mime_content_type($imagePath) ?: 'image/jpeg'; // fallback
    } catch (\Exception $e) {
        throw new \RuntimeException("Failed to process image: ".$e->getMessage());
    }

    // 4. Build request payload
    $body = [
        "contents" => [
            [
                "parts" => [
                    ["text" => "Analyse cette image et génère une description simple en français."],
                    [
                        "inline_data" => [
                            "mime_type" => $mimeType,
                            "data" => $imageData
                        ]
                    ]
                ]
            ]
        ]
    ];

    // 5. Make API request with improved error handling
    $client = HttpClient::create();
    
    try {
        $response = $client->request(
            'POST',
            'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro-vision:generateContent?key='.$apiKey,
            [
                'json' => $body,
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'timeout' => 30 // Increase timeout if needed
            ]
        );

        $data = $response->toArray();
        
        // 6. Better response parsing
        if (!isset($data['candidates'][0]['content']['parts'][0]['text'])) {
            throw new \RuntimeException('Unexpected API response format');
        }
        
        return $data['candidates'][0]['content']['parts'][0]['text'];
        
    } catch (\Exception $e) {
        // Log full error details
        error_log("Gemini API Error: ".$e->getMessage());
        if ($e instanceof \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface) {
            error_log("Network error occurred");
        }
        
        return 'Erreur technique: '.$e->getMessage(); // Return more detailed error
    }
}


}