<?php

namespace App\Controller;

use App\Entity\Materielle;  // <-- Add this line
use App\Repository\MaterielleRepository;
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

final class MaterielsController extends AbstractController
{
    #[Route('/materielss', name: 'app_materiels')]
    public function index(MaterielleRepository $materielleRepository, EntityManagerInterface $entityManager): Response
    {
        $entityManager->clear(); // ✅ Use the passed entityManager, not $this->entityManager
    
        $materiels = $materielleRepository->findAll();
    
        return $this->render('materiels/index.html.twig', [
            'materiels' => $materiels,
        ]);
    }
    

    #[Route('/materiels/search', name: 'app_materiels_search', methods: ['GET'])]
    public function search(Request $request, MaterielleRepository $materielleRepository): Response
    {
        $query = $request->query->get('q', ''); // Récupère la valeur du champ "q"
        $materiels = $materielleRepository->searchByName($query);

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
                        $this->getParameter('materiel_directory'), // Assurez-vous que ce paramètre existe dans services.yaml
                        $newFilename
                    );
                } catch (FileException $e) {
                    throw new \Exception('Erreur lors de l\'upload du fichier.');
                }
    
                $materiel->setPhotoMat('/uploads' . $newFilename); // Stocker le chemin relatif
            }
    
            $entityManager->persist($materiel);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_materiels');
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

    return $this->redirectToRoute('app_materiels');
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
#[Route('/materiels/{id}', name: 'app_materiels_show', methods: ['GET'])]
public function show(Materielle $materielle): Response
{
    // Créer le contenu du code-barres à partir des données du matériel
    $barcodeContent = sprintf(
        "Nom: %s\nUnité: %s\nPrix: %.2f DT",
        $materielle->getNomMat(),
        $materielle->getPrixMat(),
        $materielle->getQuantiteMat()
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

}
