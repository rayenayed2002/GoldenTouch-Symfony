<?php

namespace App\Controller;

use App\Entity\Materielle;  // <-- Add this line
use App\Repository\MaterielleRepository;
use App\Repository\EventRepository;

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

final class MaterielsController extends AbstractController
{
    #[Route('/materielss', name: 'app_materielss')]
    public function index(MaterielleRepository $materielleRepository, EntityManagerInterface $entityManager): Response
    {
        $entityManager->clear(); // ✅ Use the passed entityManager, not $this->entityManager
    
        $materiels = $materielleRepository->findAll();
    
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
            // Récupérer le fichier uploadé
            $photoFile = $form->get('photo_mat')->getData();
            
            if ($photoFile) {
                if (!$photoFile instanceof \Symfony\Component\HttpFoundation\File\UploadedFile) {
                    throw new \Exception('Le fichier uploadé est invalide.');
                }
            
                $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoFile->guessExtension();
            
                try {
                    $photoFile->move(
                        $this->getParameter('materiel_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    throw new \Exception('Erreur lors de l\'upload du fichier.');
                }
            
                $materiel->setPhotoMat($newFilename);
            
                // ⚡️ Appel à Gemini après l'upload
                $imagePath = $this->getParameter('materiel_directory') . '/' . $newFilename;
                $description = $this->generateDescriptionFromImageWithGemini($imagePath);
                $materiel->setDescriptionMat($description);
            }
            
    
            $entityManager->persist($materiel);
            $entityManager->flush();
    
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
    public function liste(MaterielleRepository $materielleRepository): Response
    {
        $materiels = $materielleRepository->findAll();

        return $this->render('materiels/listeMat.html.twig', [
            'materiels' => $materiels,
        ]);
    }
 #[Route('/materiels/{id}', name: 'app_materiels_show_Details', methods: ['GET'])]
public function showDetails(Materielle $materielle,EventRepository $eventRepository): Response
{
    $events = $eventRepository->findAll();

   

    // Générer le code-barres en base64
    // Passer le SVG ou PNG encodé à Twig
    return $this->render('materiels/detailsMat.html.twig', [
        'materiel' => $materielle,
        'events' => $events

    ]);
}
private function generateDescriptionFromImageWithGemini(string $imagePath): string
{
    $apiKey = 'AIzaSyCTc8nu8Q1JpPHo6FCZBrWZz0Xmmy_rLBs';
    $imageData = base64_encode(file_get_contents($imagePath));

    $body = [
        "contents" => [
            [
                "parts" => [
                    ["text" => "Analyse cette image et génère une description simple en français."],
                    [
                        "inline_data" => [
                            "mime_type" => "image/jpeg",
                            "data" => $imageData
                        ]
                    ]
                ]
            ]
        ]
    ];

    $client = HttpClient::create(); // Création directe du client
    
    try {
        $response = $client->request(
            'POST',
            'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro-vision:generateContent?key='.$apiKey,
            ['json' => $body]
        );

        $data = $response->toArray();
        return $data['candidates'][0]['content']['parts'][0]['text'] ?? 'Description non disponible.';
    } catch (\Exception $e) {
        return 'Erreur lors de la génération de la description : '.$e->getMessage();
    }
}




}
