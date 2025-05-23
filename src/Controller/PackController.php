<?php

namespace App\Controller;

use App\Entity\Pack;
use App\Entity\Avis;
use App\Entity\DemandePack; 
use App\Entity\NotificationsAdmin; 
use App\Repository\PackRepository;
use App\Repository\AvisRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\DemandePackRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\DemandePackType;
use App\Form\BookingType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Clock\ClockInterface;
use App\Service\GrammarCorrectionService;

use App\Repository\NotificationsAdminRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class PackController extends AbstractController
{

    public function __construct(
        private PackRepository $packRepository,
        private AvisRepository $avisRepository,
        private EntityManagerInterface $entityManager,
        private UtilisateurRepository $utilisateurRepository,
        private GrammarCorrectionService $grammarCorrectionService,
        private \App\Service\ToxicityDetectionService $toxicityDetectionService
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
    public function indexpack(Request $request, \Knp\Component\Pager\PaginatorInterface $paginator): Response
    {
        $page = $request->query->getInt('page', 1);
        $limit = 6;
        $searchTerm = $request->query->get('q');
        $category = $request->query->get('category', 'all');
        $minPrice = $request->query->get('minPrice');
        $maxPrice = $request->query->get('maxPrice');
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('You must be logged in to add an event.');
        }
        // Create base query
        $queryBuilder = $this->packRepository->createQueryBuilder('p')
            ->leftJoin('p.event', 'e');

        // Apply sorting
        $orderby = $request->query->get('orderby', 'menu_order');
        if ($orderby === 'price') {
            $queryBuilder->orderBy('p.prix', 'ASC');
        } elseif ($orderby === 'price-desc') {
            $queryBuilder->orderBy('p.prix', 'DESC');
        }

        // Apply filters
        if ($searchTerm) {
            $queryBuilder->andWhere('e.nom LIKE :searchTerm OR p.description LIKE :searchTerm')
                        ->setParameter('searchTerm', '%'.$searchTerm.'%');
        }

        if ($category && $category !== 'all') {
            $queryBuilder->andWhere('e.categorie = :category')
                        ->setParameter('category', $category);
        }

        if ($minPrice !== null && $minPrice !== '') {
            $queryBuilder->andWhere('p.prix >= :minPrice')
                        ->setParameter('minPrice', $minPrice);
        }

        if ($maxPrice !== null && $maxPrice !== '') {
            $queryBuilder->andWhere('p.prix <= :maxPrice')
                        ->setParameter('maxPrice', $maxPrice);
        }

        $query = $queryBuilder->getQuery();

        // Paginate results
        $packs = $paginator->paginate(
            $query,
            $page,
            $limit
        );

        $categories = $this->packRepository->findAllCategories();

        if ($request->isXmlHttpRequest()) {
            return $this->render('pack/_pack_list.html.twig', [
                'packs' => $packs,
                'selectedCategory' => $category,
                'minPrice' => $minPrice,
                'maxPrice' => $maxPrice
            ]);
        }

        $sortOptions = [
            ['value' => 'menu_order', 'label' => 'Tri par défaut'],
            ['value' => 'price', 'label' => 'Trier par prix : croissant'],
            ['value' => 'price-desc', 'label' => 'Trier par prix : décroissant'],
        ];
        $currentSort = $request->query->get('orderby', 'menu_order');

        return $this->render('pack/pack.html.twig', [
            'packs' => $packs,
            'categories' => $categories,
            'selectedCategory' => $category,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
            'sortOptions' => $sortOptions,
            'currentSort' => $currentSort,
            'allPacks' => $this->packRepository->findAll(),
        ]);
    }
    
    #[Route('/pack/{id}', name: 'app_pack_details')]
    public function details(Pack $pack): Response
    {
        $similarPacks = $this->packRepository->findBy(
            ['event' => $pack->getEvent()], 
            ['prix' => 'ASC'], 
            3
        );

        $avis = $this->entityManager->getRepository(Avis::class)->findAvisWithUserInfo($pack->getId());

        return $this->render('pack/details.html.twig', [
            'pack' => $pack,
            'similarPacks' => $similarPacks,
            'trendingPacks' => $this->packRepository->findBy([], ['prix' => 'DESC'], 3),
            'avis' => $avis
        ]);
    }

    #[Route('/pack/shop/{id}', name: 'app_pack_shop_details')]
    public function shopDetails(Request $request, Pack $pack): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('You must be logged in to add an event.');
        }
        // Get the category from the pack's event
        $category = $pack->getCategorie();
        $relatedPacks = [];
        if ($category) {
            $relatedPacks = $this->packRepository->findRelatedByCategory($category, $pack->getId(), 4);
        }

        $demandePacks = $this->entityManager->getRepository(DemandePack::class)
            ->createQueryBuilder('dp')
            ->leftJoin('dp.user', 'u')
            ->addSelect('u')
            ->getQuery()
            ->getResult();

        $avis = $this->entityManager->getRepository(Avis::class)->findAvisWithUserInfo($pack->getId());

        return $this->render('pack/shop-details.html.twig', [
            'pack' => $pack,
            'relatedPacks' => $relatedPacks,
            'demandePacks' => $demandePacks,
            'avis' => $avis
        ]);
    }

    #[Route('/pack/book/{id}', name: 'app_pack_booking')]
    public function booking(Request $request, Pack $pack, EntityManagerInterface $entityManager, ClockInterface $clock): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('You must be logged in to add an event.');
        }
    
        $form = $this->createForm(BookingType::class, null, [
            'attr' => ['novalidate' => 'novalidate']
        ]);
        $form->handleRequest($request);
    
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $formData = $form->getData();
                try {
                    $demande = new DemandePack();
                    $demande->setPack($pack);
                    $demande->setPrix($pack->getPrix());
                    
                    // Set event ID to match pack ID
                    $event = $entityManager->getReference('App\Entity\Event', $pack->getId());
                    $demande->setEvent($event);
                    
                    // Get the date from form and ensure it's a DateTime object
                    $eventDate = $formData['eventDate'];
                    if (!$eventDate instanceof \DateTimeInterface) {
                        if (is_string($eventDate)) {
                            $eventDate = new \DateTime($eventDate);
                        } else {
                            throw new \InvalidArgumentException('Invalid date format');
                        }
                    }
                    $demande->setDateDemande($eventDate);
                    
                    $demande->setUser($user);
                    $demande->setStatut('EN_ATTENTE');
    
                    $userMessage = $formData['message'];
                    $session = $request->getSession();
                    $toxicityResult = $this->toxicityDetectionService->detect($userMessage);
                    $labelsEn = $toxicityResult['en'] ?? [];
                    $labelsFr = $toxicityResult['fr'] ?? [];
                    $isToxic = false;
                    foreach (array_merge($labelsEn, $labelsFr) as $label) {
                        if ($label['label'] === 'toxic' && $label['score'] > 0.5) {
                            $isToxic = true;
                            break;
                        }
                    }
    
                    if ($isToxic) {
                        $lastToxicMessage = $session->get('last_toxic_message');
                        if ($lastToxicMessage !== $userMessage) {
                            $session->set('last_toxic_message', $userMessage);
                            $errorMsg = 'Votre message contient des propos inappropriés. Veuillez les corriger avant de soumettre.';
                            if ($request->isXmlHttpRequest()) {
                                return new JsonResponse([
                                    'success' => false,
                                    'message' => $errorMsg
                                ]);
                            }
                            $this->addFlash('error', $errorMsg);
                            return $this->redirectToRoute('app_pack_booking', ['id' => $pack->getId()]);
                        } else {
                            $adminMessage = $this->toxicityDetectionService->maskToxicWords($userMessage, array_merge($labelsEn, $labelsFr));
                            $session->remove('last_toxic_message');
                        }
                    } else {
                        $adminMessage = $this->grammarCorrectionService->correct($userMessage) ?: $userMessage;
                        $session->remove('last_toxic_message');
                    }
    
                    $notification = new NotificationsAdmin();
                    $adminId = $pack->getAdminId();
                    $adminUser = $entityManager->getRepository(\App\Entity\User::class)->find($adminId);
                    if ($adminUser) {
                        $notification->setAdmin($adminUser);
                    }
                    $notification->setUser($user);
                    $notification->setDemandePack($demande);
                    $notification->setMessage(sprintf(
                        "Nouvelle demande de réservation pour le pack %s\nNombre de personnes: %d\nMessage: %s",
                        $pack->getNom(),
                        $formData['personCount'],
                        $adminMessage
                    ));
                    $notification->setStatut('NON_LU');
                    $notification->setDateCreation(new \DateTime());
                    $entityManager->persist($demande);
                    $entityManager->persist($notification);
                    $entityManager->flush();
    
                    if ($request->isXmlHttpRequest()) {
                        return new JsonResponse([
                            'success' => true, 
                            'message' => 'Demande enregistrée avec succès!',
                            'redirect' => $this->generateUrl('app_pack_booking', ['id' => $pack->getId()])
                        ]);
                    }
    
                    $this->addFlash('success', 'Votre demande a été enregistrée avec succès!');
                    return $this->redirectToRoute('app_pack_booking', ['id' => $pack->getId()]);
                } catch (\Exception $e) {
                    if ($request->isXmlHttpRequest()) {
                        return new JsonResponse([
                            'success' => false, 
                            'message' => 'Erreur serveur: ' . $e->getMessage()
                        ]);
                    }
                    
                    $this->addFlash('error', 'Une erreur est survenue: ' . $e->getMessage());
                    return $this->redirectToRoute('app_pack_booking', ['id' => $pack->getId()]);
                }
            } else {
                if ($request->isXmlHttpRequest()) {
                    $errors = [];
                    foreach ($form->getErrors(true) as $error) {
                        $fieldName = $error->getOrigin()->getName();
                        $errors[$fieldName][] = $error->getMessage();
                    }
                    return new JsonResponse(['success' => false, 'errors' => $errors]);
                }
                
                $this->addFlash('warning', 'Veuillez corriger les erreurs dans le formulaire');
            }
        }
    
        return $this->render('pack/booking.html.twig', [
            'pack' => $pack,
            'form' => $form->createView()
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

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/demande-packs', name: 'admin_advanced_statistiques_demande_packs', methods: ['GET'])]
    public function listDemandePacks(Request $request, \Knp\Component\Pager\PaginatorInterface $paginator, \App\Repository\NotificationsAdminRepository $notificationsRepo): Response
    {
        $q = $request->query->get('q');
        $repo = $this->entityManager->getRepository(DemandePack::class);
        $qb = $repo->createQueryBuilder('d')
            ->leftJoin('d.user', 'u')->addSelect('u')
            ->leftJoin('d.pack', 'p')->addSelect('p')
            ->leftJoin('d.event', 'e')->addSelect('e');

        if ($q) {
            $qb->andWhere('u.nom LIKE :q OR e.nom LIKE :q')
               ->setParameter('q', '%' . $q . '%');
        }

        $qb->orderBy('d.dateDemande', 'DESC');

        $pagination = $paginator->paginate(
            $qb->getQuery(),
            $request->query->getInt('page', 1),
            10
        );

        $notifications = $notificationsRepo->findLatest(5);

        return $this->render('admin/advanced_statistiques/demande_pack_list.html.twig', [
            'pagination' => $pagination,
            'demandes' => $pagination->getItems(),
            'q' => $q,
            'latestNotifications' => $notifications,
        ]);
    }
}