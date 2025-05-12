<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request; // Cette ligne manquait
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CategorieRepository;
use App\Entity\Categorie; // Nécessaire pour le paramètre Categorie
use App\Form\CategorieType; // Nécessaire pour le formulaire
use Doctrine\ORM\EntityManagerInterface; // Ajoutez ce use en haut du fichier

final class CategoriesController extends AbstractController
{
    #[Route('/categories', name: 'app_categories')]
    public function index(CategorieRepository $categorieRepository): Response
    {
        // Récupérer toutes les catégories
        $Categorie = $categorieRepository->findAll();
        
        return $this->render('materiels/showCat.html.twig', [
            'Categorie' => $Categorie,
        ]);
    }

    #[Route('/{id_cat}/edit', name: 'app_categorie_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Categorie $categorie, CategorieRepository $categorieRepository): Response
    {
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categorieRepository->save($categorie, true);

            return $this->redirectToRoute('app_categories', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('category/edit.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/khjehbf/{id_cat}', name: 'app_categorie_delete', methods: ['POST'])]
    public function delete(
        Request $request, 
        Categorie $categorie, 
        EntityManagerInterface $entityManager
    ): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorie->getIdCat(), $request->request->get('_token'))) {
            $entityManager->remove($categorie);
            $entityManager->flush();
        }
    
        return $this->redirectToRoute('app_categories', [], Response::HTTP_SEE_OTHER);
    }
}