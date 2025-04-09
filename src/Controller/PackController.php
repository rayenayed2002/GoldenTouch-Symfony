<?php

namespace App\Controller;

use App\Entity\Pack;
use App\Entity\Avis;
use App\Repository\PackRepository;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PackController extends AbstractController
{
    public function __construct(
        private PackRepository $packRepository,
        private AvisRepository $avisRepository,
        private EntityManagerInterface $entityManager
    ) {}

    #[Route('/packs', name: 'app_packs')]
    public function index(Request $request): Response
    {
        $filter = $request->query->get('filter', 'all');
        $allPacks = $this->packRepository->findAll();
        $trendingPacks = $this->packRepository->findBy([], ['prix' => 'DESC'], 3);
        $newPacks = $this->packRepository->findBy([], ['id' => 'DESC'], 3);

        $packs = match ($filter) {
            'trending' => ['results' => $trendingPacks, 'currentPage' => 1, 'lastPage' => 1, 'hasPreviousPage' => false, 'hasNextPage' => false],
            'new' => ['results' => $newPacks, 'currentPage' => 1, 'lastPage' => 1, 'hasPreviousPage' => false, 'hasNextPage' => false],
            default => $allPacks,
        };

        return $this->render('pack/index.html.twig', [
            'packs' => $packs,
            'trendingPacks' => $trendingPacks,
            'currentFilter' => $filter
        ]);
    }


    #[Route('/pack', name: 'app_pack_index')]
    public function indexpack(Request $request): Response
    {
        $filter = $request->query->get('filter', 'all');
        $page = $request->query->getInt('page', 1);
        $limit = 10;
        
        $allPacks = $this->packRepository->findAllPaginated($page, $limit);
        $trendingPacks = $this->packRepository->findBy([], ['prix' => 'DESC'], 3);
        $newPacks = $this->packRepository->findBy([], ['id' => 'DESC'], 3);

        $packs = match ($filter) {
            'trending' => ['results' => $trendingPacks, 'currentPage' => 1, 'lastPage' => 1, 'hasPreviousPage' => false, 'hasNextPage' => false],
            'new' => ['results' => $newPacks, 'currentPage' => 1, 'lastPage' => 1, 'hasPreviousPage' => false, 'hasNextPage' => false],
            default => ['results' => $allPacks['results'], 'currentPage' => $allPacks['currentPage'], 'lastPage' => $allPacks['lastPage'], 'hasPreviousPage' => $allPacks['hasPreviousPage'], 'hasNextPage' => $allPacks['hasNextPage']],
        };

        return $this->render('pack/pack.html.twig', [
            'packs' => $packs,
            'trendingPacks' => ['results' => $trendingPacks, 'currentPage' => 1, 'lastPage' => 1, 'hasPreviousPage' => false, 'hasNextPage' => false],
            'currentFilter' => $filter
        ]);
    }

    #[Route('/pack/{id}', name: 'app_pack_details')]
    public function details(Pack $pack): Response
    {
        // Get similar packs based on category
        $similarPacks = $this->packRepository->findBy(
            ['event' => $pack->getEvent()], 
            ['prix' => 'ASC'], 
            3
        );

        // Get reviews for this specific pack with user information
        $avis = $this->entityManager->getRepository(Avis::class)->findAvisWithUserInfo($pack->getId());

        return $this->render('pack/details.html.twig', [
            'pack' => $pack,
            'similarPacks' => $similarPacks,
            'trendingPacks' => $this->packRepository->findBy([], ['prix' => 'DESC'], 3),
            'avis' => $avis
        ]);
    }

    #[Route('/pack/show/{id}', name: 'app_pack_show')]
    public function show(Pack $pack): Response
    {
        return $this->render('pack/show.html.twig', [
            'pack' => $pack
        ]);
    }

    #[Route('/pack/edit/{id}', name: 'app_pack_edit')]
    public function edit(Request $request, Pack $pack, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PackType::class, $pack);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_pack_show', ['id' => $pack->getId()]);
        }

        return $this->render('pack/edit.html.twig', [
            'pack' => $pack,
            'form' => $form->createView()
        ]);
    }

    #[Route('/pack/delete/{id}', name: 'app_pack_delete', methods: ['POST'])]
    public function delete(Request $request, Pack $pack, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pack->getId(), $request->request->get('_token'))) {
            $entityManager->remove($pack);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_packs');
    }
}