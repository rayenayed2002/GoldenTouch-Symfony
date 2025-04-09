<?php

namespace App\Controller\Admin;

use App\Repository\DemandePackRepository;
use App\Repository\EventRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @Route("/admin")
 */
class DashboardController extends AbstractController
{
    private $entityManager;
    private $statistiquesController;

    public function __construct(
        EntityManagerInterface $entityManager,
        StatistiquesController $statistiquesController = null
    ) {
        $this->entityManager = $entityManager;
        $this->statistiquesController = $statistiquesController;
    }

    /**
     * @Route("/dashboard", name="admin_dashboard")
     */
    public function index(): Response
    {
        // Get initial data for the dashboard
        $year = date('Y');
        
        // Create mock data for the view if statistics controller is not available
        $purchaseTrends = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = new \DateTime();
            $date->modify("-$i days");
            
            $purchaseTrends[] = [
                'date' => $date->format('Y-m-d'),
                'purchases' => rand(5, 50), // Mock data
                'revenue' => rand(100, 5000) // Mock data
            ];
        }
        
        // Create mock review trends data
        $reviewTrends = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = new \DateTime();
            $date->modify("-$i days");
            
            $reviewTrends[] = [
                'date' => $date->format('Y-m-d'),
                'reviews' => rand(0, 10), // Mock data
                'avg_rating' => rand(30, 50) / 10 // Mock data between 3.0 and 5.0
            ];
        }
        
        // Initialize review statistics with default values
        $reviewStats = $this->generateMockReviewStats();
        
        // Try to get stats from the StatistiquesController if available
        $revenueStats = null;
        $packStats = [];
        $requestStats = [];
        $userStats = [];
        
        // Get active events count (mock data or from database)
        $activeEvents = $this->getActiveEventsCount();
        $topEvents = [];
        
        if ($this->statistiquesController) {
            // Create a request object with the year parameter
            $request = new Request(['year' => $year]);
            
            // Get all stats from the StatistiquesController
            $statsResponse = $this->statistiquesController->getAllStats($request);
            $statsData = json_decode($statsResponse->getContent(), true);
            
            // Extract data for the view
            $revenueStats = $statsData['revenueStats'] ?? null;
            $packStats = $statsData['packStats'] ?? [];
            $reviewStats = $statsData['reviewStats'] ?? $reviewStats; // Use default values as fallback
            $reviewTrends = $statsData['reviewTrends'] ?? $reviewTrends; // Use mock data as fallback
            $requestStats = $statsData['requestStats'] ?? [];
            $userStats = $statsData['userStats'] ?? [];
            $activeEvents = $statsData['activeEvents'] ?? $activeEvents;
            $topEvents = $statsData['topEvents'] ?? [];
        }
        
        return $this->render('admin/dashboard/index.html.twig', [
            'revenueStats' => $revenueStats,
            'packStats' => $packStats,
            'reviewStats' => $reviewStats,
            'reviewTrends' => $reviewTrends,
            'requestStats' => $requestStats,
            'userStats' => $userStats,
            'purchaseTrends' => $purchaseTrends,
            'activeEvents' => $activeEvents,
            'topEvents' => $topEvents
        ]);
    }

    /**
     * Get the count of active events
     */
    private function getActiveEventsCount(): int
    {
        try {
            // Try to get the count from the database
            $conn = $this->entityManager->getConnection();
            $sql = '
                SELECT COUNT(id) as count
                FROM pack
                WHERE date <= CURRENT_DATE() AND (end_date IS NULL OR end_date >= CURRENT_DATE())
            ';
            $stmt = $conn->prepare($sql);
            $resultSet = $stmt->executeQuery();
            return (int)$resultSet->fetchOne();
        } catch (\Exception $e) {
            // Return a default value if there's an error
            return 0;
        }
    }

    /**
     * @Route("/dashboard/refresh", name="admin_dashboard_refresh", methods={"GET"})
     */
    public function refreshDashboardData(Request $request): JsonResponse
    {
        try {
            // Get the year parameter from the request or use current year
            $year = $request->query->get('year', date('Y'));
            
            // Get active events count
            $activeEvents = $this->getActiveEventsCount();
            
            // Create mock top events data
            $topEvents = [];
            for ($i = 1; $i <= 5; $i++) {
                $topEvents[] = [
                    'id' => $i,
                    'name' => 'Event ' . $i,
                    'image' => null, // No image for mock data
                    'sales' => rand(50, 200),
                    'rating' => rand(35, 50) / 10 // Mock data between 3.5 and 5.0
                ];
            }
            
            // Create mock review trends data
            $reviewTrends = [];
            for ($i = 6; $i >= 0; $i--) {
                $date = new \DateTime();
                $date->modify("-$i days");
                
                $reviewTrends[] = [
                    'date' => $date->format('Y-m-d'),
                    'reviews' => rand(0, 10), // Mock data
                    'avg_rating' => rand(30, 50) / 10 // Mock data between 3.0 and 5.0
                ];
            }
            
            // Create default reviewStats with all required keys
            $defaultReviewStats = $this->generateMockReviewStats();
            
            // If StatistiquesController is available, use it
            if ($this->statistiquesController) {
                // Create a new request with the year parameter
                $statsRequest = new Request(['year' => $year]);
                
                // Get all stats from the StatistiquesController
                $response = $this->statistiquesController->getAllStats($statsRequest);
                $data = json_decode($response->getContent(), true);
                
                // Add activeEvents and topEvents to the response
                $data['activeEvents'] = $activeEvents;
                
                // Only override topEvents if it's not already set
                if (!isset($data['topEvents'])) {
                    $data['topEvents'] = $topEvents;
                }
                
                // Add reviewTrends to the response if not already set
                if (!isset($data['reviewTrends'])) {
                    $data['reviewTrends'] = $reviewTrends;
                }
                
                // Ensure reviewStats has all required keys
                if (!isset($data['reviewStats']) || empty($data['reviewStats'])) {
                    $data['reviewStats'] = $defaultReviewStats;
                } else {
                    // Make sure all required keys exist
                    $data['reviewStats'] = array_merge($defaultReviewStats, $data['reviewStats']);
                }
                
                return $this->json($data);
            }
            
            // Fallback to mock data if StatistiquesController is not available
            $mockData = [
                'success' => true,
                'revenueStats' => [
                    'monthly_data' => $this->generateMockMonthlyData(),
                    'total_revenue' => rand(10000, 50000),
                    'total_sales' => rand(100, 500),
                    'avg_revenue_per_pack' => rand(50, 200)
                ],
                'packStats' => $this->generateMockPackStats(),
                'reviewStats' => $defaultReviewStats,
                'reviewTrends' => $reviewTrends,
                'requestStats' => $this->generateMockRequestStats(),
                'userStats' => $this->generateMockUserStats(),
                'activeEvents' => $activeEvents,
                'topEvents' => $topEvents
            ];
            
            return $this->json($mockData);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'error' => 'Failed to refresh dashboard data: ' . $e->getMessage()
            ], 500);
        }
    }
    
    // Helper methods for generating mock data
    private function generateMockMonthlyData(): array
    {
        $data = [];
        for ($i = 1; $i <= 12; $i++) {
            $data[] = [
                'month' => $i,
                'revenue' => rand(1000, 10000)
            ];
        }
        return $data;
    }
    
    private function generateMockPackStats(): array
    {
        $packs = [];
        for ($i = 1; $i <= 5; $i++) {
            $packs[] = [
                'id' => $i,
                'description' => 'Pack ' . $i,
                'event_name' => 'Event ' . $i,
                'purchases' => rand(10, 100),
                'total_revenue' => rand(1000, 10000),
                'avg_rating' => rand(30, 50) / 10,
                'satisfaction_rate' => rand(70, 95),
                'purchases_change' => rand(1, 15),
                'revenue_change' => rand(1, 20)
            ];
        }
        return $packs;
    }
    
    /**
     * Generate mock review statistics with all required keys
     */
    private function generateMockReviewStats(): array
    {
        $total_reviews = rand(100, 500);
        $rating_5 = rand(50, 200);
        $rating_4 = rand(30, 150);
        $rating_3 = rand(10, 50);
        $rating_2 = rand(5, 30);
        $rating_1 = rand(1, 20);
        
        $total = $rating_5 + $rating_4 + $rating_3 + $rating_2 + $rating_1;
        $total = max($total, 1); // Avoid division by zero
        
        $rating_5_percent = round(($rating_5 / $total) * 100, 1);
        $rating_4_percent = round(($rating_4 / $total) * 100, 1);
        $rating_3_percent = round(($rating_3 / $total) * 100, 1);
        $rating_2_percent = round(($rating_2 / $total) * 100, 1);
        $rating_1_percent = round(($rating_1 / $total) * 100, 1);
        
        $positive = $rating_5 + $rating_4;
        $neutral = $rating_3;
        $negative = $rating_2 + $rating_1;
        
        $positive_sentiment = round(($positive / $total) * 100, 1);
        $neutral_sentiment = round(($neutral / $total) * 100, 1);
        $negative_sentiment = round(($negative / $total) * 100, 1);
        
        // Generate mock common words
        $commonWords = [];
        $words = ['excellent', 'amazing', 'good', 'great', 'awesome', 'disappointing', 'average', 'recommend', 'service', 'quality'];
        for ($i = 0; $i < count($words); $i++) {
            $commonWords[] = [
                'word' => $words[$i],
                'frequency' => rand(5, 30)
            ];
        }
        
        // Generate mock review trends
        $reviewTrends = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = new \DateTime();
            $date->modify("-$i days");
            
            $reviewTrends[] = [
                'date' => $date->format('Y-m-d'),
                'count' => rand(0, 10),
                'avg_rating' => rand(30, 50) / 10
            ];
        }
        
        return [
            'total_reviews' => $total_reviews,
            'avg_rating' => rand(35, 50) / 10,
            'rating_5' => $rating_5,
            'rating_4' => $rating_4,
            'rating_3' => $rating_3,
            'rating_2' => $rating_2,
            'rating_1' => $rating_1,
            'rating_5_percent' => $rating_5_percent,
            'rating_4_percent' => $rating_4_percent,
            'rating_3_percent' => $rating_3_percent,
            'rating_2_percent' => $rating_2_percent,
            'rating_1_percent' => $rating_1_percent,
            'positive_sentiment' => $positive_sentiment,
            'neutral_sentiment' => $neutral_sentiment,
            'negative_sentiment' => $negative_sentiment,
            'most_common_words' => $commonWords,
            'review_trends' => $reviewTrends
        ];
    }
    
    private function generateMockRequestStats(): array
    {
        return [
            ['statut' => 'pending', 'count' => rand(5, 20)],
            ['statut' => 'approved', 'count' => rand(20, 50)],
            ['statut' => 'rejected', 'count' => rand(1, 10)]
        ];
    }
    
    private function generateMockUserStats(): array
    {
        $totalUsers = rand(500, 2000);
        $newUsers = rand(50, 200);
        $activeUsers = rand(100, 500);
        
        return [
            'total_users' => $totalUsers,
            'new_users' => $newUsers,
            'active_users' => $activeUsers,
            'growth_rate' => round(($newUsers / $totalUsers) * 100, 2),
            'active_rate' => round(($activeUsers / $totalUsers) * 100, 2)
        ];
    }
}
