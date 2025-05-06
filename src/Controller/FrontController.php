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

class FrontController extends AbstractController
{
    public function __construct(
        private PackRepository $packRepository,
        private AvisRepository $avisRepository,
        private EntityManagerInterface $entityManager,
        private UtilisateurRepository $utilisateurRepository,
        private GrammarCorrectionService $grammarCorrectionService,
        private \App\Service\ToxicityDetectionService $toxicityDetectionService
    ) {}

    #[Route('/', name: 'front_index')]
    public function index(Request $request, \Knp\Component\Pager\PaginatorInterface $paginator): Response
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

    #[Route('/about', name: 'front_about')]
    public function about(): Response
    {
        return $this->render('Front/about.html');
    }

    #[Route('/blog', name: 'front_blog')]
    public function blog(): Response
    {
        return $this->render('Front/blog.html');
    }

    #[Route('/blog-details', name: 'front_blog_details')]
    public function blogDetails(): Response
    {
        return $this->render('Front/blog-details.html');
    }

    #[Route('/booking', name: 'front_booking')]
    public function booking(): Response
    {
        return $this->render('Front/booking.html');
    }

    #[Route('/cart', name: 'front_cart')]
    public function cart(): Response
    {
        return $this->render('Front/cart.html');
    }

    #[Route('/checkout', name: 'front_checkout')]
    public function checkout(): Response
    {
        return $this->render('Front/checkout.html');
    }

    #[Route('/contact', name: 'front_contact')]
    public function contact(): Response
    {
        return $this->render('Front/contact.html');
    }

    #[Route('/faq', name: 'front_faq')]
    public function faq(): Response
    {
        return $this->render('Front/faq.html');
    }

    #[Route('/service', name: 'front_service')]
    public function service(): Response
    {
        return $this->render('Front/service.html');
    }

    #[Route('/service-details', name: 'front_service_details')]
    public function serviceDetails(): Response
    {
        return $this->render('Front/service-details.html');
    }

    #[Route('/shop', name: 'front_shop')]
    public function shop(): Response
    {
        return $this->render('Front/shop.html');
    }

    #[Route('/shop-details', name: 'front_shop_details')]
    public function shopDetails(): Response
    {
        return $this->render('Front/shop-details.html');
    }

    #[Route('/taxi', name: 'front_taxi')]
    public function taxi(): Response
    {
        return $this->render('Front/taxi.html');
    }

    #[Route('/taxi-details', name: 'front_taxi_details')]
    public function taxiDetails(): Response
    {
        return $this->render('Front/taxi-details.html');
    }

    #[Route('/team', name: 'front_team')]
    public function team(): Response
    {
        return $this->render('Front/team.html');
    }

    #[Route('/team-details', name: 'front_team_details')]
    public function teamDetails(): Response
    {
        return $this->render('Front/team-details.html');
    }

    #[Route('/wishlist', name: 'front_wishlist')]
    public function wishlist(): Response
    {
        return $this->render('Front/wishlist.html');
    }

    #[Route('/error', name: 'front_error')]
    public function error(): Response
    {
        return $this->render('Front/error.html');
    }
}