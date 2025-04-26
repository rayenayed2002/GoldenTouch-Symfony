<?php

namespace App\Controller\Admin;

use App\Entity\Avis;
use App\Entity\DemandePack;
use App\Entity\Event;
use App\Entity\Lieu;
use App\Entity\Pack;
use App\Entity\ReserverLieu;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\DemandePackRepository;
use Doctrine\ORM\Query\Expr\Join;

#[Route('/admin/advanced-statistiques', name: 'admin_advanced_statistiques_')]
class AdvancedStatistiquesController extends AbstractController
{
    #[Route('/download-pdf', name: 'admin_advanced_statistiques_download_pdf')]
    public function downloadPdf(\Knp\Snappy\Pdf $knpSnappyPdf): \Symfony\Component\HttpFoundation\Response
    {
        // Gather the same stats as in index
        $packStats = $this->getPackStats();
        $userStats = $this->getUserStats();
        $mostSoldPack = $this->getMostSoldPack();
        $averagePackPrice = $this->getAveragePackPrice();

        // Chart 1: Évolution des réservations (Line)
        // Transform reservation trends to ['labels'=>[], 'data'=>[]] for chart
        $reservationTrendsRaw = $this->getReservationTrends(); // array of ['week'=>..., 'reservation_count'=>...]
        $reservationTrends = [
            'labels' => [],
            'data' => []
        ];
        foreach ($reservationTrendsRaw as $row) {
            $reservationTrends['labels'][] = $row['week'];
            $reservationTrends['data'][] = $row['reservation_count'];
        }
        $reservationTrendsConfig = [
            'type' => 'line',
            'data' => [
                'labels' => $reservationTrends['labels'],
                'datasets' => [[
                    'label' => 'Réservations',
                    'data' => $reservationTrends['data'],
                    'borderColor' => 'rgba(115,103,240,1)',
                    'backgroundColor' => 'rgba(115,103,240,0.1)',
                    'fill' => true
                ]]
            ],
            'options' => [
                'plugins' => [
                    'legend' => ['display' => false]
                ]
            ]
        ];
        $reservationTrendsChartBase64 = $this->getChartBase64($reservationTrendsConfig);

        // Chart 2: Répartition des ventes des packs (Pie)
        // Transform pack type distribution to ['labels'=>[], 'data'=>[]] for chart
        $packTypeDistributionRaw = $this->getPackTypeDistribution(); // array of ['event_type'=>..., 'pack_count'=>...]
        $packTypeDistribution = [
            'labels' => [],
            'data' => []
        ];
        foreach ($packTypeDistributionRaw as $row) {
            $packTypeDistribution['labels'][] = $row['event_type'];
            $packTypeDistribution['data'][] = $row['pack_count'];
        }
        $packsSalesConfig = [
            'type' => 'pie',
            'data' => [
                'labels' => $packTypeDistribution['labels'],
                'datasets' => [[
                    'data' => $packTypeDistribution['data'],
                    'backgroundColor' => [
                        'rgba(115,103,240,0.8)',
                        'rgba(40,199,111,0.8)',
                        'rgba(255,159,67,0.8)',
                        'rgba(0,207,232,0.8)',
                        'rgba(234,84,85,0.8)'
                    ]
                ]]
            ]
        ];
        $packsSalesChartBase64 = $this->getChartBase64($packsSalesConfig);

        // Chart 3: Utilisateurs actifs par période (Bar)
        $usersActive = $this->getUsersActiveTrends(); // ['labels'=>[], 'data'=>[]]
        $usersActiveConfig = [
            'type' => 'bar',
            'data' => [
                'labels' => $usersActive['labels'],
                'datasets' => [[
                    'label' => 'Utilisateurs actifs',
                    'data' => $usersActive['data'],
                    'backgroundColor' => 'rgba(0,207,232,0.8)'
                ]]
            ]
        ];
        $usersActiveChartBase64 = $this->getChartBase64($usersActiveConfig);

        // Render the PDF HTML with charts
        $html = $this->renderView('admin/advanced_statistiques/report_pdf.html.twig', [
            'packStats' => $packStats,
            'userStats' => $userStats,
            'mostSoldPack' => $mostSoldPack,
            'averagePackPrice' => $averagePackPrice,
            'reservationTrendsChartBase64' => $reservationTrendsChartBase64,
            'packsSalesChartBase64' => $packsSalesChartBase64,
            'usersActiveChartBase64' => $usersActiveChartBase64,
        ]);
        // Generate PDF
        $pdfContent = $knpSnappyPdf->getOutputFromHtml($html);
        return new \Symfony\Component\HttpFoundation\Response($pdfContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="rapport-statistiques.pdf"'
        ]);
    }

    // Util: Générer un graphique Chart.js via QuickChart.io et retourner du base64
    private function getChartBase64(array $chartConfig): string
    {
        $url = 'https://quickchart.io/chart?c=' . urlencode(json_encode($chartConfig));
        $image = @file_get_contents($url);
        if ($image === false) {
            return '';
        }
        return base64_encode($image);
    }

    // Dummy pour la démo: à remplacer par vos vraies données
    private function getUsersActiveTrends(): array
    {
        return [
            'labels' => ['Semaine 1', 'Semaine 2', 'Semaine 3'],
            'data' => [5, 15, 8]
        ];
    }
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'index')]
    public function index(Request $request): Response
    {
        // Get all statistics data
        $packStats = $this->getPackStats();
        $userStats = $this->getUserStats();
        $mostSoldPack = $this->getMostSoldPack();
        $averagePackPrice = $this->getAveragePackPrice();
        $reservationTrends = $this->getReservationTrends();
        $packTypeDistribution = $this->getPackTypeDistribution();
        $locationReservations = $this->getLocationReservations();
        $activeInactivePacks = $this->getActiveInactivePacks();
        
        // Nouvelles statistiques avancées
        $monthlyRevenue = $this->getMonthlyRevenue();
        $customerSatisfaction = $this->getCustomerSatisfaction();
        $packPerformanceComparison = $this->getPackPerformanceComparison();
        $topPerformingLocations = $this->getTopPerformingLocations();
        $seasonalTrends = $this->getSeasonalTrends();
        $conversionRates = $this->getConversionRates();
        $clientRetentionRate = $this->getClientRetentionRate();
        $packCategoryPerformance = $this->getPackCategoryPerformance();

        return $this->render('admin/advanced_statistiques/index.html.twig', [
            'packStats' => $packStats, 
            'userStats' => $userStats,
            'mostSoldPack' => $mostSoldPack,
            'averagePackPrice' => $averagePackPrice,
            'reservationTrends' => $reservationTrends,
            'packTypeDistribution' => $packTypeDistribution,
            'locationReservations' => $locationReservations,
            'activeInactivePacks' => $activeInactivePacks,
            'monthlyRevenue' => $monthlyRevenue,
            'customerSatisfaction' => $customerSatisfaction,
            'packPerformanceComparison' => $packPerformanceComparison,
            'topPerformingLocations' => $topPerformingLocations,
            'seasonalTrends' => $seasonalTrends,
            'conversionRates' => $conversionRates,
            'clientRetentionRate' => $clientRetentionRate,
            'packCategoryPerformance' => $packCategoryPerformance,
        ]);
    }

    #[Route('/stat-data/{type}', name: 'admin_advanced_statistiques_stat_data', methods: ['GET'])]
    public function statData(string $type): \Symfony\Component\HttpFoundation\JsonResponse
    {
        switch ($type) {
            case 'packs':
                $data = $this->getPackStats();
                $data['chart_data'] = [
                    ['label' => 'Jan', 'value' => 10],
                    ['label' => 'Feb', 'value' => 15],
                    ['label' => 'Mar', 'value' => 8],
                    ['label' => 'Apr', 'value' => 20],
                ];
                break;
            case 'users':
                $data = $this->getUserStats();
                $data['chart_data'] = [
                    ['label' => 'Jan', 'value' => 5],
                    ['label' => 'Feb', 'value' => 9],
                    ['label' => 'Mar', 'value' => 7],
                    ['label' => 'Apr', 'value' => 12],
                ];
                break;
            case 'mostSoldPack':
                $data = $this->getMostSoldPack();
                $data['chart_data'] = [
                    ['label' => 'Jan', 'value' => 30],
                    ['label' => 'Feb', 'value' => 35],
                    ['label' => 'Mar', 'value' => 28],
                    ['label' => 'Apr', 'value' => 40],
                ];
                break;
            case 'avgPrice':
                $data = ['averagePackPrice' => $this->getAveragePackPrice()];
                $data['chart_data'] = [
                    ['label' => 'Jan', 'value' => 120],
                    ['label' => 'Feb', 'value' => 130],
                    ['label' => 'Mar', 'value' => 110],
                    ['label' => 'Apr', 'value' => 140],
                ];
                break;
            default:
                return $this->json(['error' => 'Invalid type'], 400);
        }
        return $this->json($data);
    }

    #[Route('/demande-packs', name: 'demande_packs')]
    public function demandePacksList(DemandePackRepository $demandePackRepository): Response
{
    // Eager load related entities to avoid N+1 queries
    $demandes = $this->entityManager->getRepository(DemandePack::class)
        ->createQueryBuilder('d')
        ->leftJoin('d.utilisateur', 'u')->addSelect('u')
        ->leftJoin('d.pack', 'p')->addSelect('p')
        ->leftJoin('d.event', 'e')->addSelect('e')
        ->orderBy('d.dateDemande', 'DESC')
        ->getQuery()
        ->getResult();

    return $this->render('admin/advanced_statistiques/demande_pack_list.html.twig', [
        'demandes' => $demandes,
    ]);
}

    /**
     * Get total number of packs and related statistics
     */
    private function getPackStats(): array
    {
        $totalPacks = $this->entityManager->getRepository(Pack::class)
            ->createQueryBuilder('p')
            ->select('COUNT(p.id)')
            ->getQuery()
            ->getSingleScalarResult();

        // Get packs with end date in the future (considering them as "new" packs)
        $thirtyDaysAgo = new \DateTime('-30 days');
        $newPacks = $this->entityManager->getRepository(Pack::class)
            ->createQueryBuilder('p')
            ->select('COUNT(p.id)')
            ->where('p.endDate IS NOT NULL AND p.endDate >= :date')
            ->setParameter('date', $thirtyDaysAgo)
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'total_packs' => $totalPacks,
            'new_packs' => $newPacks,
            'growth_rate' => $totalPacks > 0 ? round(($newPacks / $totalPacks) * 100, 2) : 0
        ];
    }

    /**
     * Get total number of users and related statistics
     */
    private function getUserStats(): array
    {
        $totalUsers = $this->entityManager->getRepository(Utilisateur::class)
            ->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->getQuery()
            ->getSingleScalarResult();

        // Get users created in the last 30 days
        $thirtyDaysAgo = new \DateTime('-30 days');
        $newUsers = $this->entityManager->getRepository(Utilisateur::class)
            ->createQueryBuilder('u')
            ->select('COUNT(u.id)')
            ->where('u.createdAt >= :date')
            ->setParameter('date', $thirtyDaysAgo)
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'total_users' => $totalUsers,
            'new_users' => $newUsers,
            'growth_rate' => $totalUsers > 0 ? round(($newUsers / $totalUsers) * 100, 2) : 0
        ];
    }

    /**
     * Get the most sold pack based on reservations/purchases
     */
    private function getMostSoldPack(): array
    {
        $conn = $this->entityManager->getConnection();
        
        $sql = '
            SELECT 
                p.id,
                p.description,
                COUNT(d.id) as total_sales
            FROM 
                pack p
            LEFT JOIN 
                demande_pack d ON p.id = d.pack_id
            GROUP BY 
                p.id
            ORDER BY 
                total_sales DESC
            LIMIT 1
        ';
        
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        $result = $resultSet->fetchAssociative();
        
        if (!$result) {
            return [
                'id' => null,
                'description' => 'No data available',
                'total_sales' => 0
            ];
        }
        
        return $result;
    }

    /**
     * Calculate the average pack price
     */
    private function getAveragePackPrice(): float
    {
        $result = $this->entityManager->getRepository(Pack::class)
            ->createQueryBuilder('p')
            ->select('AVG(p.prix)')
            ->getQuery()
            ->getSingleScalarResult();
        
        return round($result ?: 0, 2);
    }

    /**
     * Get reservation trends (weekly)
     */
    private function getReservationTrends(): array
    {
        $conn = $this->entityManager->getConnection();
        
        // Get weekly reservation counts for the last 8 weeks
        $sql = '
            SELECT 
                YEARWEEK(d.date_demande) as week,
                COUNT(d.id) as reservation_count
            FROM 
                demande_pack d
            WHERE 
                d.date_demande >= DATE_SUB(NOW(), INTERVAL 8 WEEK)
            GROUP BY 
                YEARWEEK(d.date_demande)
            ORDER BY 
                week ASC
        ';
        
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        $results = $resultSet->fetchAllAssociative();
        
        // Format the results with proper week labels
        $formattedResults = [];
        foreach ($results as $row) {
            $year = substr($row['week'], 0, 4);
            $week = substr($row['week'], 4, 2);
            
            // Create a date from the year and week number
            $date = new \DateTime();
            $date->setISODate($year, $week);
            
            $formattedResults[] = [
                'week' => $date->format('Y-m-d'),
                'reservation_count' => $row['reservation_count']
            ];
        }
        
        return $formattedResults;
    }

    /**
     * Get pack type distribution (percentage of each event type)
     */
    private function getPackTypeDistribution(): array
    {
        $conn = $this->entityManager->getConnection();
        
        $sql = '
            SELECT 
                e.categorie as event_type,
                COUNT(p.id) as pack_count
            FROM 
                pack p
            JOIN 
                event e ON p.event_id = e.id
            GROUP BY 
                e.categorie
        ';
        
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        $results = $resultSet->fetchAllAssociative();
        
        // Calculate total packs for percentage calculation
        $totalPacks = array_sum(array_column($results, 'pack_count'));
        
        // Add percentage to each result
        foreach ($results as &$row) {
            $row['percentage'] = $totalPacks > 0 ? round(($row['pack_count'] / $totalPacks) * 100, 2) : 0;
        }
        
        return $results;
    }

    /**
     * Get number of reservations per location
     */
    private function getLocationReservations(): array
    {
        $conn = $this->entityManager->getConnection();
        
        $sql = '
            SELECT 
                l.location,
                COUNT(r.id) as reservation_count
            FROM 
                lieu l
            LEFT JOIN 
                reserver_lieu r ON l.id = r.lieu_id
            GROUP BY 
                l.location
            ORDER BY 
                reservation_count DESC
        ';
        
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        
        return $resultSet->fetchAllAssociative();
    }

    /**
     * Get active vs inactive packs
     * A pack is considered active if its end_date is in the future or null
     */
    private function getActiveInactivePacks(): array
    {
        $conn = $this->entityManager->getConnection();
        
        // Count active packs (end_date is in the future or null)
        $sqlActive = '
            SELECT COUNT(id) as count
            FROM pack
            WHERE end_date IS NULL OR end_date >= CURDATE()
        ';
        
        $stmtActive = $conn->prepare($sqlActive);
        $resultActive = $stmtActive->executeQuery();
        $activePacks = (int)$resultActive->fetchOne();
        
        // Count inactive packs (end_date is in the past)
        $sqlInactive = '
            SELECT COUNT(id) as count
            FROM pack
            WHERE end_date IS NOT NULL AND end_date < CURDATE()
        ';
        
        $stmtInactive = $conn->prepare($sqlInactive);
        $resultInactive = $stmtInactive->executeQuery();
        $inactivePacks = (int)$resultInactive->fetchOne();
        
        $totalPacks = $activePacks + $inactivePacks;
        
        return [
            'active_packs' => $activePacks,
            'inactive_packs' => $inactivePacks,
            'active_percentage' => $totalPacks > 0 ? round(($activePacks / $totalPacks) * 100, 2) : 0,
            'inactive_percentage' => $totalPacks > 0 ? round(($inactivePacks / $totalPacks) * 100, 2) : 0
        ];
    }
    
    /**
     * Get monthly revenue data for the current year
     */
    private function getMonthlyRevenue(): array
    {
        $conn = $this->entityManager->getConnection();
        $currentYear = date('Y');
        
        $sql = '
            SELECT 
                MONTH(d.date_demande) as month,
                SUM(p.prix) as revenue,
                COUNT(d.id) as sales_count
            FROM 
                demande_pack d
            JOIN 
                pack p ON d.pack_id = p.id
            WHERE 
                YEAR(d.date_demande) = :year
                AND d.statut = "confirmé"
            GROUP BY 
                MONTH(d.date_demande)
            ORDER BY 
                month ASC
        ';
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('year', $currentYear);
        $resultSet = $stmt->executeQuery();
        $results = $resultSet->fetchAllAssociative();
        
        // Format the results to include all months
        $formattedResults = [];
        $totalRevenue = 0;
        $totalSales = 0;
        
        // Initialize all months with 0 revenue
        for ($i = 1; $i <= 12; $i++) {
            $formattedResults[$i] = [
                'month' => $i,
                'month_name' => date('F', mktime(0, 0, 0, $i, 1)),
                'revenue' => 0,
                'sales_count' => 0,
                'previous_month_change' => 0
            ];
        }
        
        // Fill in actual revenue data
        foreach ($results as $row) {
            $month = (int)$row['month'];
            $formattedResults[$month]['revenue'] = (float)$row['revenue'];
            $formattedResults[$month]['sales_count'] = (int)$row['sales_count'];
            $totalRevenue += (float)$row['revenue'];
            $totalSales += (int)$row['sales_count'];
        }
        
        // Calculate month-over-month change
        for ($i = 2; $i <= 12; $i++) {
            $previousMonthRevenue = $formattedResults[$i-1]['revenue'];
            $currentMonthRevenue = $formattedResults[$i]['revenue'];
            
            if ($previousMonthRevenue > 0) {
                $formattedResults[$i]['previous_month_change'] = round((($currentMonthRevenue - $previousMonthRevenue) / $previousMonthRevenue) * 100, 2);
            }
        }
        
        // Get previous year's data for comparison
        $previousYear = $currentYear - 1;
        $sqlPreviousYear = '
            SELECT 
                SUM(p.prix) as total_revenue
            FROM 
                demande_pack d
            JOIN 
                pack p ON d.pack_id = p.id
            WHERE 
                YEAR(d.date_demande) = :year
                AND d.statut = "confirmé"
        ';
        
        $stmtPreviousYear = $conn->prepare($sqlPreviousYear);
        $stmtPreviousYear->bindValue('year', $previousYear);
        $resultPreviousYear = $stmtPreviousYear->executeQuery();
        $previousYearRevenue = (float)$resultPreviousYear->fetchOne() ?: 0;
        
        // Calculate year-over-year growth
        $yearOverYearGrowth = 0;
        if ($previousYearRevenue > 0) {
            $yearOverYearGrowth = round((($totalRevenue - $previousYearRevenue) / $previousYearRevenue) * 100, 2);
        }
        
        return [
            'monthly_data' => array_values($formattedResults),
            'total_revenue' => $totalRevenue,
            'total_sales' => $totalSales,
            'avg_revenue_per_sale' => $totalSales > 0 ? round($totalRevenue / $totalSales, 2) : 0,
            'year_over_year_growth' => $yearOverYearGrowth,
            'previous_year_revenue' => $previousYearRevenue
        ];
    }
    
    /**
     * Get customer satisfaction metrics based on reviews
     */
    private function getCustomerSatisfaction(): array
    {
        $conn = $this->entityManager->getConnection();
        
        // Get overall average rating
        $sqlAvgRating = '
            SELECT AVG(note) as avg_rating
            FROM avis
        ';
        
        $stmtAvgRating = $conn->prepare($sqlAvgRating);
        $resultAvgRating = $stmtAvgRating->executeQuery();
        $avgRating = round((float)$resultAvgRating->fetchOne() ?: 0, 2);
        
        // Get rating distribution
        $sqlRatingDistribution = '
            SELECT 
                note as rating,
                COUNT(id) as count
            FROM 
                avis
            GROUP BY 
                note
            ORDER BY 
                note ASC
        ';
        
        $stmtRatingDistribution = $conn->prepare($sqlRatingDistribution);
        $resultRatingDistribution = $stmtRatingDistribution->executeQuery();
        $ratingDistribution = $resultRatingDistribution->fetchAllAssociative();
        
        // Format rating distribution
        $formattedRatingDistribution = [
            1 => 0,
            2 => 0,
            3 => 0,
            4 => 0,
            5 => 0
        ];
        
        $totalReviews = 0;
        foreach ($ratingDistribution as $row) {
            $rating = (int)$row['rating'];
            $count = (int)$row['count'];
            if ($rating >= 1 && $rating <= 5) {
                $formattedRatingDistribution[$rating] = $count;
                $totalReviews += $count;
            }
        }
        
        // Calculate satisfaction rate (percentage of 4-5 star reviews)
        $satisfiedReviews = $formattedRatingDistribution[4] + $formattedRatingDistribution[5];
        $satisfactionRate = $totalReviews > 0 ? round(($satisfiedReviews / $totalReviews) * 100, 2) : 0;
        
        // Get monthly satisfaction trend
        $sqlMonthlyTrend = '
            SELECT 
                YEAR(date_creation) as year,
                MONTH(date_creation) as month,
                AVG(note) as avg_rating,
                COUNT(id) as review_count
            FROM 
                avis
            WHERE 
                date_creation >= DATE_SUB(CURDATE(), INTERVAL 12 MONTH)
            GROUP BY 
                YEAR(date_creation), MONTH(date_creation)
            ORDER BY 
                year ASC, month ASC
        ';
        
        $stmtMonthlyTrend = $conn->prepare($sqlMonthlyTrend);
        $resultMonthlyTrend = $stmtMonthlyTrend->executeQuery();
        $monthlyTrend = $resultMonthlyTrend->fetchAllAssociative();
        
        // Format monthly trend data
        $formattedMonthlyTrend = [];
        foreach ($monthlyTrend as $row) {
            $year = (int)$row['year'];
            $month = (int)$row['month'];
            $monthName = date('M', mktime(0, 0, 0, $month, 1));
            
            $formattedMonthlyTrend[] = [
                'period' => "$monthName $year",
                'avg_rating' => round((float)$row['avg_rating'], 2),
                'review_count' => (int)$row['review_count']
            ];
        }
        
        // Get top rated packs
        $sqlTopRatedPacks = '
            SELECT 
                p.id,
                p.description,
                AVG(a.note) as avg_rating,
                COUNT(a.id) as review_count
            FROM 
                pack p
            JOIN 
                avis a ON p.id = a.id_pack
            GROUP BY 
                p.id
            HAVING 
                COUNT(a.id) >= 3
            ORDER BY 
                avg_rating DESC, review_count DESC
            LIMIT 5
        ';
        
        $stmtTopRatedPacks = $conn->prepare($sqlTopRatedPacks);
        $resultTopRatedPacks = $stmtTopRatedPacks->executeQuery();
        $topRatedPacks = $resultTopRatedPacks->fetchAllAssociative();
        
        return [
            'avg_rating' => $avgRating,
            'total_reviews' => $totalReviews,
            'rating_distribution' => $formattedRatingDistribution,
            'satisfaction_rate' => $satisfactionRate,
            'monthly_trend' => $formattedMonthlyTrend,
            'top_rated_packs' => $topRatedPacks
        ];
    }
    
    /**
     * Get pack performance comparison (current month vs previous month)
     */
    private function getPackPerformanceComparison(): array
    {
        $conn = $this->entityManager->getConnection();
        
        // Current month data
        $currentMonthStart = date('Y-m-01');
        $currentMonthEnd = date('Y-m-t');
        
        // Previous month data
        $previousMonthStart = date('Y-m-01', strtotime('-1 month'));
        $previousMonthEnd = date('Y-m-t', strtotime('-1 month'));
        
        // Get current month pack performance
        $sqlCurrentMonth = '
            SELECT 
                p.id,
                p.description,
                COUNT(d.id) as sales_count,
                SUM(p.prix) as revenue
            FROM 
                pack p
            LEFT JOIN 
                demande_pack d ON p.id = d.pack_id AND d.date_demande BETWEEN :start_date AND :end_date AND d.statut = "confirmé"
            GROUP BY 
                p.id
            ORDER BY 
                revenue DESC
            LIMIT 10
        ';
        
        $stmtCurrentMonth = $conn->prepare($sqlCurrentMonth);
        $stmtCurrentMonth->bindValue('start_date', $currentMonthStart);
        $stmtCurrentMonth->bindValue('end_date', $currentMonthEnd);
        $resultCurrentMonth = $stmtCurrentMonth->executeQuery();
        $currentMonthData = $resultCurrentMonth->fetchAllAssociative();
        
        // Get previous month pack performance for the same packs
        $packIds = array_column($currentMonthData, 'id');
        $packIdsString = implode(',', $packIds);
        
        $sqlPreviousMonth = '
            SELECT 
                p.id,
                COUNT(d.id) as sales_count,
                SUM(p.prix) as revenue
            FROM 
                pack p
            LEFT JOIN 
                demande_pack d ON p.id = d.pack_id AND d.date_demande BETWEEN :start_date AND :end_date AND d.statut = "confirmé"
            WHERE 
                p.id IN (' . ($packIdsString ?: '0') . ')
            GROUP BY 
                p.id
        ';
        
        $stmtPreviousMonth = $conn->prepare($sqlPreviousMonth);
        $stmtPreviousMonth->bindValue('start_date', $previousMonthStart);
        $stmtPreviousMonth->bindValue('end_date', $previousMonthEnd);
        $resultPreviousMonth = $stmtPreviousMonth->executeQuery();
        $previousMonthData = $resultPreviousMonth->fetchAllAssociative();
        
        // Create a lookup array for previous month data
        $previousMonthLookup = [];
        foreach ($previousMonthData as $row) {
            $previousMonthLookup[$row['id']] = [
                'sales_count' => (int)$row['sales_count'],
                'revenue' => (float)$row['revenue']
            ];
        }
        
        // Combine current and previous month data with growth calculations
        $comparisonData = [];
        foreach ($currentMonthData as $currentPack) {
            $packId = $currentPack['id'];
            $previousData = $previousMonthLookup[$packId] ?? ['sales_count' => 0, 'revenue' => 0];
            
            // Calculate growth percentages
            $salesGrowth = 0;
            if ($previousData['sales_count'] > 0) {
                $salesGrowth = round(((int)$currentPack['sales_count'] - $previousData['sales_count']) / $previousData['sales_count'] * 100, 2);
            }
            
            $revenueGrowth = 0;
            if ($previousData['revenue'] > 0) {
                $revenueGrowth = round(((float)$currentPack['revenue'] - $previousData['revenue']) / $previousData['revenue'] * 100, 2);
            }
            
            $comparisonData[] = [
                'id' => $packId,
                'description' => $currentPack['description'],
                'current_month_sales' => (int)$currentPack['sales_count'],
                'previous_month_sales' => $previousData['sales_count'],
                'sales_growth' => $salesGrowth,
                'current_month_revenue' => (float)$currentPack['revenue'],
                'previous_month_revenue' => $previousData['revenue'],
                'revenue_growth' => $revenueGrowth
            ];
        }
        
        // Sort by revenue growth (descending)
        usort($comparisonData, function($a, $b) {
            return $b['revenue_growth'] <=> $a['revenue_growth'];
        });
        
        return [
            'current_month' => date('F Y'),
            'previous_month' => date('F Y', strtotime('-1 month')),
            'comparison_data' => $comparisonData
        ];
    }
    
    /**
     * Get top performing locations based on revenue and reservation count
     */
    private function getTopPerformingLocations(): array
    {
        $conn = $this->entityManager->getConnection();
        
        $sql = '
            SELECT 
                l.id,
                l.location,
                COUNT(r.id) as reservation_count,
                SUM(l.price) as total_revenue,
                AVG(l.price) as avg_price
            FROM 
                lieu l
            LEFT JOIN 
                reserver_lieu r ON l.id = r.lieu_id
            GROUP BY 
                l.id
            ORDER BY 
                total_revenue DESC
            LIMIT 10
        ';
        
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        $results = $resultSet->fetchAllAssociative();
        
        // Calculate total reservations and revenue for percentage calculations
        $totalReservations = array_sum(array_column($results, 'reservation_count'));
        $totalRevenue = array_sum(array_column($results, 'total_revenue'));
        
        // Add percentage metrics to each location
        foreach ($results as &$location) {
            $location['reservation_count'] = (int)$location['reservation_count'];
            $location['total_revenue'] = (float)$location['total_revenue'];
            $location['avg_price'] = (float)$location['avg_price'];
            $location['reservation_percentage'] = $totalReservations > 0 ? 
                round(($location['reservation_count'] / $totalReservations) * 100, 2) : 0;
            $location['revenue_percentage'] = $totalRevenue > 0 ? 
                round(($location['total_revenue'] / $totalRevenue) * 100, 2) : 0;
        }
        
        return [
            'locations' => $results,
            'total_reservations' => $totalReservations,
            'total_revenue' => $totalRevenue
        ];
    }
    
    /**
     * Get seasonal trends in pack reservations
     */
    private function getSeasonalTrends(): array
    {
        $conn = $this->entityManager->getConnection();
        
        // Get reservation data by month for the last 2 years
        $sql = '
            SELECT 
                YEAR(d.date_demande) as year,
                MONTH(d.date_demande) as month,
                COUNT(d.id) as reservation_count,
                SUM(p.prix) as revenue
            FROM 
                demande_pack d
            JOIN 
                pack p ON d.pack_id = p.id
            WHERE 
                d.date_demande >= DATE_SUB(CURDATE(), INTERVAL 2 YEAR)
            GROUP BY 
                YEAR(d.date_demande), MONTH(d.date_demande)
            ORDER BY 
                year ASC, month ASC
        ';
        
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        $results = $resultSet->fetchAllAssociative();
        
        // Format the results by season
        $seasonalData = [
            'Winter' => ['reservation_count' => 0, 'revenue' => 0, 'months' => [12, 1, 2]],
            'Spring' => ['reservation_count' => 0, 'revenue' => 0, 'months' => [3, 4, 5]],
            'Summer' => ['reservation_count' => 0, 'revenue' => 0, 'months' => [6, 7, 8]],
            'Fall' => ['reservation_count' => 0, 'revenue' => 0, 'months' => [9, 10, 11]]
        ];
        
        $monthlyData = [];
        $yearlyData = [];
        
        foreach ($results as $row) {
            $year = (int)$row['year'];
            $month = (int)$row['month'];
            $reservationCount = (int)$row['reservation_count'];
            $revenue = (float)$row['revenue'];
            
            // Add to monthly data
            $monthName = date('M', mktime(0, 0, 0, $month, 1));
            if (!isset($monthlyData[$monthName])) {
                $monthlyData[$monthName] = ['reservation_count' => 0, 'revenue' => 0];
            }
            $monthlyData[$monthName]['reservation_count'] += $reservationCount;
            $monthlyData[$monthName]['revenue'] += $revenue;
            
            // Add to yearly data
            if (!isset($yearlyData[$year])) {
                $yearlyData[$year] = ['reservation_count' => 0, 'revenue' => 0];
            }
            $yearlyData[$year]['reservation_count'] += $reservationCount;
            $yearlyData[$year]['revenue'] += $revenue;
            
            // Add to seasonal data
            foreach ($seasonalData as $season => &$data) {
                if (in_array($month, $data['months'])) {
                    $data['reservation_count'] += $reservationCount;
                    $data['revenue'] += $revenue;
                    break;
                }
            }
        }
        
        // Format monthly data for chart display
        $formattedMonthlyData = [];
        foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12] as $month) {
            $monthName = date('M', mktime(0, 0, 0, $month, 1));
            $formattedMonthlyData[] = [
                'month' => $monthName,
                'reservation_count' => $monthlyData[$monthName]['reservation_count'] ?? 0,
                'revenue' => $monthlyData[$monthName]['revenue'] ?? 0
            ];
        }
        
        // Format yearly data
        $formattedYearlyData = [];
        foreach ($yearlyData as $year => $data) {
            $formattedYearlyData[] = [
                'year' => $year,
                'reservation_count' => $data['reservation_count'],
                'revenue' => $data['revenue']
            ];
        }
        
        // Format seasonal data
        $formattedSeasonalData = [];
        foreach ($seasonalData as $season => $data) {
            $formattedSeasonalData[] = [
                'season' => $season,
                'reservation_count' => $data['reservation_count'],
                'revenue' => $data['revenue']
            ];
        }
        
        return [
            'monthly_data' => $formattedMonthlyData,
            'yearly_data' => $formattedYearlyData,
            'seasonal_data' => $formattedSeasonalData
        ];
    }
    
    /**
     * Get conversion rates for pack reservations
     */
    private function getConversionRates(): array
    {
        $conn = $this->entityManager->getConnection();
        
        // Get total number of pack views (mock data as this would typically come from analytics)
        // In a real implementation, this would be tracked in a separate table
        $totalViews = 10000; // Mock value
        
        // Get total number of reservations
        $sqlReservations = '
            SELECT COUNT(id) as count
            FROM demande_pack
        ';
        
        $stmtReservations = $conn->prepare($sqlReservations);
        $resultReservations = $stmtReservations->executeQuery();
        $totalReservations = (int)$resultReservations->fetchOne();
        
        // Get confirmed reservations
        $sqlConfirmed = '
            SELECT COUNT(id) as count
            FROM demande_pack
            WHERE statut = "confirmé"
        ';
        
        $stmtConfirmed = $conn->prepare($sqlConfirmed);
        $resultConfirmed = $stmtConfirmed->executeQuery();
        $confirmedReservations = (int)$resultConfirmed->fetchOne();
        
        // Calculate conversion rates
        $viewToReservationRate = $totalViews > 0 ? round(($totalReservations / $totalViews) * 100, 2) : 0;
        $reservationToConfirmationRate = $totalReservations > 0 ? round(($confirmedReservations / $totalReservations) * 100, 2) : 0;
        $overallConversionRate = $totalViews > 0 ? round(($confirmedReservations / $totalViews) * 100, 2) : 0;
        
        // Get conversion rates by pack category
        $sqlByCategory = '
            SELECT 
                e.categorie,
                COUNT(DISTINCT d.id) as reservations,
                SUM(CASE WHEN d.statut = "confirmé" THEN 1 ELSE 0 END) as confirmed
            FROM 
                demande_pack d
            JOIN 
                pack p ON d.pack_id = p.id
            JOIN 
                event e ON p.event_id = e.id
            GROUP BY 
                e.categorie
        ';
        
        $stmtByCategory = $conn->prepare($sqlByCategory);
        $resultByCategory = $stmtByCategory->executeQuery();
        $conversionByCategory = $resultByCategory->fetchAllAssociative();
        
        // Calculate conversion rate for each category
        foreach ($conversionByCategory as &$category) {
            $reservations = (int)$category['reservations'];
            $confirmed = (int)$category['confirmed'];
            $category['conversion_rate'] = $reservations > 0 ? round(($confirmed / $reservations) * 100, 2) : 0;
        }
        
        // Get monthly conversion trend
        $sqlMonthlyTrend = '
            SELECT 
                YEAR(date_demande) as year,
                MONTH(date_demande) as month,
                COUNT(id) as total_reservations,
                SUM(CASE WHEN statut = "confirmé" THEN 1 ELSE 0 END) as confirmed_reservations
            FROM 
                demande_pack
            WHERE 
                date_demande >= DATE_SUB(CURDATE(), INTERVAL 12 MONTH)
            GROUP BY 
                YEAR(date_demande), MONTH(date_demande)
            ORDER BY 
                year ASC, month ASC
        ';
        
        $stmtMonthlyTrend = $conn->prepare($sqlMonthlyTrend);
        $resultMonthlyTrend = $stmtMonthlyTrend->executeQuery();
        $monthlyTrend = $resultMonthlyTrend->fetchAllAssociative();
        
        // Format monthly trend data
        $formattedMonthlyTrend = [];
        foreach ($monthlyTrend as $row) {
            $year = (int)$row['year'];
            $month = (int)$row['month'];
            $monthName = date('M', mktime(0, 0, 0, $month, 1));
            $totalReservations = (int)$row['total_reservations'];
            $confirmedReservations = (int)$row['confirmed_reservations'];
            
            $formattedMonthlyTrend[] = [
                'period' => "$monthName $year",
                'total_reservations' => $totalReservations,
                'confirmed_reservations' => $confirmedReservations,
                'conversion_rate' => $totalReservations > 0 ? round(($confirmedReservations / $totalReservations) * 100, 2) : 0
            ];
        }
        
        return [
            'total_views' => $totalViews,
            'total_reservations' => $totalReservations,
            'confirmed_reservations' => $confirmedReservations,
            'view_to_reservation_rate' => $viewToReservationRate,
            'reservation_to_confirmation_rate' => $reservationToConfirmationRate,
            'overall_conversion_rate' => $overallConversionRate,
            'by_category' => $conversionByCategory,
            'monthly_trend' => $formattedMonthlyTrend
        ];
    }
    
    /**
     * Get client retention rate and related metrics
     */
    private function getClientRetentionRate(): array
    {
        $conn = $this->entityManager->getConnection();
        
        // Get total number of unique clients
        $sqlTotalClients = '
            SELECT COUNT(DISTINCT utilisateur_id) as count
            FROM demande_pack
        ';
        
        $stmtTotalClients = $conn->prepare($sqlTotalClients);
        $resultTotalClients = $stmtTotalClients->executeQuery();
        $totalClients = (int)$resultTotalClients->fetchOne();
        
        // Get number of returning clients (clients with more than one reservation)
        $sqlReturningClients = '
            SELECT COUNT(*) as count
            FROM (
                SELECT utilisateur_id, COUNT(*) as reservation_count
                FROM demande_pack
                GROUP BY utilisateur_id
                HAVING COUNT(*) > 1
            ) as returning_clients
        ';
        
        $stmtReturningClients = $conn->prepare($sqlReturningClients);
        $resultReturningClients = $stmtReturningClients->executeQuery();
        $returningClients = (int)$resultReturningClients->fetchOne();
        
        // Calculate retention rate
        $retentionRate = $totalClients > 0 ? round(($returningClients / $totalClients) * 100, 2) : 0;
        
        // Get average reservations per client
        $sqlAvgReservations = '
            SELECT AVG(reservation_count) as avg_reservations
            FROM (
                SELECT utilisateur_id, COUNT(*) as reservation_count
                FROM demande_pack
                GROUP BY utilisateur_id
            ) as client_reservations
        ';
        
        $stmtAvgReservations = $conn->prepare($sqlAvgReservations);
        $resultAvgReservations = $stmtAvgReservations->executeQuery();
        $avgReservationsPerClient = round((float)$resultAvgReservations->fetchOne() ?: 0, 2);
        
        // Get top loyal clients
        $sqlTopClients = '
            SELECT 
                d.utilisateur_id,
                u.nom,
                u.prenom,
                COUNT(d.id) as reservation_count,
                SUM(p.prix) as total_spent
            FROM 
                demande_pack d
            JOIN 
                utilisateur u ON d.utilisateur_id = u.id
            JOIN 
                pack p ON d.pack_id = p.id
            GROUP BY 
                d.utilisateur_id
            ORDER BY 
                reservation_count DESC, total_spent DESC
            LIMIT 5
        ';
        
        $stmtTopClients = $conn->prepare($sqlTopClients);
        $resultTopClients = $stmtTopClients->executeQuery();
        $topLoyalClients = $resultTopClients->fetchAllAssociative();
        
        return [
            'total_clients' => $totalClients,
            'returning_clients' => $returningClients,
            'retention_rate' => $retentionRate,
            'avg_reservations_per_client' => $avgReservationsPerClient,
            'top_loyal_clients' => $topLoyalClients
        ];
    }
    
    /**
     * Get pack category performance metrics
     */
    private function getPackCategoryPerformance(): array
    {
        $conn = $this->entityManager->getConnection();
        
        $sql = '
            SELECT 
                e.categorie,
                COUNT(p.id) as pack_count,
                COUNT(d.id) as reservation_count,
                SUM(p.prix) as total_revenue,
                AVG(p.prix) as avg_price,
                AVG(a.note) as avg_rating
            FROM 
                event e
            LEFT JOIN 
                pack p ON e.id = p.event_id
            LEFT JOIN 
                demande_pack d ON p.id = d.pack_id
            LEFT JOIN 
                avis a ON p.id = a.id_pack
            GROUP BY 
                e.categorie
            ORDER BY 
                total_revenue DESC
        ';
        
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();
        $results = $resultSet->fetchAllAssociative();
        
        // Calculate totals for percentage calculations
        $totalPacks = array_sum(array_column($results, 'pack_count'));
        $totalReservations = array_sum(array_column($results, 'reservation_count'));
        $totalRevenue = array_sum(array_column($results, 'total_revenue'));
        
        // Add percentage metrics to each category
        foreach ($results as &$category) {
            $category['pack_count'] = (int)$category['pack_count'];
            $category['reservation_count'] = (int)$category['reservation_count'];
            $category['total_revenue'] = (float)$category['total_revenue'];
            $category['avg_price'] = (float)$category['avg_price'];
            $category['avg_rating'] = round((float)$category['avg_rating'] ?: 0, 2);
            
            $category['pack_percentage'] = $totalPacks > 0 ? 
                round(($category['pack_count'] / $totalPacks) * 100, 2) : 0;
            $category['reservation_percentage'] = $totalReservations > 0 ? 
                round(($category['reservation_count'] / $totalReservations) * 100, 2) : 0;
            $category['revenue_percentage'] = $totalRevenue > 0 ? 
                round(($category['total_revenue'] / $totalRevenue) * 100, 2) : 0;
        }
        
        return [
            'categories' => $results,
            'total_packs' => $totalPacks,
            'total_reservations' => $totalReservations,
            'total_revenue' => $totalRevenue
        ];
    }
}