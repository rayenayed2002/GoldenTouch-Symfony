<?php

namespace App\Controller\Admin;

use App\Entity\Achats;
use App\Entity\Avis;
use App\Entity\DemandePack;
use App\Entity\Pack;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/statistiques")
 */
class StatistiquesController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/revenue", name="admin_statistiques_revenue", methods={"GET"})
     */
    public function getRevenueStats(Request $request): JsonResponse
    {
        try {
            $year = $request->query->get('year', date('Y'));
            
            $conn = $this->entityManager->getConnection();
            
            $sql = '
                SELECT 
                    MONTH(a.date_achat) as month,
                    SUM(p.prix) as revenue
                FROM 
                    achats a
                JOIN 
                    pack p ON a.id_pack = p.id
                WHERE 
                    YEAR(a.date_achat) = :year
                GROUP BY 
                    MONTH(a.date_achat)
                ORDER BY 
                    month ASC
            ';
            
            $stmt = $conn->prepare($sql);
            $resultSet = $stmt->executeQuery(['year' => $year]);
            
            // Format the results to include all months with 0 revenue for missing months
            $results = $resultSet->fetchAllAssociative();
            $formattedResults = [];
            
            // Initialize all months with 0 revenue
            for ($i = 1; $i <= 12; $i++) {
                $formattedResults[$i] = [
                    'month' => $i,
                    'revenue' => 0
                ];
            }
            
            // Fill in actual revenue data
            foreach ($results as $row) {
                $formattedResults[$row['month']]['revenue'] = (float)$row['revenue'];
            }
            
            // Calculate total revenue
            $totalRevenue = array_sum(array_column($formattedResults, 'revenue'));
            
            // Get total number of purchases
            $totalPurchases = $this->entityManager->getRepository(Achats::class)
                ->createQueryBuilder('a')
                ->select('COUNT(a.id)')
                ->where('YEAR(a.dateAchat) = :year')
                ->setParameter('year', $year)
                ->getQuery()
                ->getSingleScalarResult();
            
            // Calculate average revenue per purchase
            $avgRevenue = $totalPurchases > 0 ? $totalRevenue / $totalPurchases : 0;
            
            return $this->json([
                'success' => true,
                'monthly_data' => array_values($formattedResults),
                'total_revenue' => $totalRevenue,
                'total_sales' => $totalPurchases,
                'avg_revenue_per_pack' => $avgRevenue
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'error' => 'Failed to get revenue stats: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * @Route("/packs", name="admin_statistiques_packs", methods={"GET"})
     */
    public function getPackStats(): JsonResponse
    {
        try {
            $conn = $this->entityManager->getConnection();
            
            $sql = '
                SELECT 
                    p.id,
                    p.description,
                    p.event_name,
                    COUNT(a.id) as purchases,
                    SUM(p.prix) as total_revenue,
                    AVG(av.note) as avg_rating
                FROM 
                    pack p
                LEFT JOIN 
                    achats a ON p.id = a.id_pack
                LEFT JOIN 
                    avis av ON p.id = av.id_pack
                GROUP BY 
                    p.id
                ORDER BY 
                    purchases DESC
            ';
            
            $stmt = $conn->prepare($sql);
            $resultSet = $stmt->executeQuery();
            $results = $resultSet->fetchAllAssociative();
            
            // Calculate additional metrics
            foreach ($results as &$pack) {
                // Calculate satisfaction rate (percentage of ratings >= 4)
                $satisfactionSql = '
                    SELECT 
                        COUNT(id) as total_satisfied
                    FROM 
                        avis
                    WHERE 
                        id_pack = :packId AND note >= 4
                ';
                
                $satisfactionStmt = $conn->prepare($satisfactionSql);
                $satisfactionResult = $satisfactionStmt->executeQuery(['packId' => $pack['id']]);
                $satisfiedCount = $satisfactionResult->fetchOne();
                
                $totalRatingsSql = '
                    SELECT 
                        COUNT(id) as total_ratings
                    FROM 
                        avis
                    WHERE 
                        id_pack = :packId
                ';
                
                $totalRatingsStmt = $conn->prepare($totalRatingsSql);
                $totalRatingsResult = $totalRatingsStmt->executeQuery(['packId' => $pack['id']]);
                $totalRatings = $totalRatingsResult->fetchOne();
                
                $pack['satisfaction_rate'] = $totalRatings > 0 ? round(($satisfiedCount / $totalRatings) * 100) : 0;
                
                // Add mock change percentages for demo purposes
                $pack['purchases_change'] = rand(1, 15);
                $pack['revenue_change'] = rand(1, 20);
            }
            
            return $this->json([
                'success' => true,
                'data' => $results
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'error' => 'Failed to get pack stats: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * @Route("/reviews", name="admin_statistiques_reviews", methods={"GET"})
     */
    /**
     * Get review statistics for the dashboard
     */
    public function getReviewStats(): JsonResponse
    {
        try {
            $conn = $this->entityManager->getConnection();
            
            // Get total number of reviews
            $sqlTotalReviews = 'SELECT COUNT(id) as total_reviews FROM avi';
            $stmtTotalReviews = $conn->prepare($sqlTotalReviews);
            $resultTotalReviews = $stmtTotalReviews->executeQuery();
            $totalReviews = (int)$resultTotalReviews->fetchOne();
            
            // Get average rating
            $sqlAvgRating = 'SELECT AVG(note) as avg_rating FROM avi';
            $stmtAvgRating = $conn->prepare($sqlAvgRating);
            $resultAvgRating = $stmtAvgRating->executeQuery();
            $avgRating = (float)$resultAvgRating->fetchOne();
            
            // Get rating distribution
            $sqlRatingDistribution = '
                SELECT 
                    note as rating,
                    COUNT(id) as count
                FROM 
                    avi
                GROUP BY 
                    note
                ORDER BY 
                    note DESC
            ';
            
            $stmtRatingDistribution = $conn->prepare($sqlRatingDistribution);
            $resultRatingDistribution = $stmtRatingDistribution->executeQuery();
            $ratingDistribution = $resultRatingDistribution->fetchAllAssociative();
            
            // Format rating distribution for easy access in template
            $formattedRatingDistribution = [
                'rating_1' => 0,
                'rating_1_percent' => 0,
                'rating_2' => 0,
                'rating_2_percent' => 0,
                'rating_3' => 0,
                'rating_3_percent' => 0,
                'rating_4' => 0,
                'rating_4_percent' => 0,
                'rating_5' => 0,
                'rating_5_percent' => 0
            ];
            
            foreach ($ratingDistribution as $rating) {
                $ratingValue = (int)$rating['rating'];
                if ($ratingValue >= 1 && $ratingValue <= 5) {
                    $formattedRatingDistribution["rating_{$ratingValue}"] = (int)$rating['count'];
                    $formattedRatingDistribution["rating_{$ratingValue}_percent"] = $totalReviews > 0 
                        ? round(((int)$rating['count'] / $totalReviews) * 100, 1) 
                        : 0;
                }
            }
            
            // Get sentiment distribution
            $positive = $formattedRatingDistribution['rating_4'] + $formattedRatingDistribution['rating_5'];
            $neutral = $formattedRatingDistribution['rating_3'];
            $negative = $formattedRatingDistribution['rating_1'] + $formattedRatingDistribution['rating_2'];
            
            $sentimentDistribution = [
                'positive_sentiment' => $totalReviews > 0 ? round(($positive / $totalReviews) * 100, 1) : 0,
                'neutral_sentiment' => $totalReviews > 0 ? round(($neutral / $totalReviews) * 100, 1) : 0,
                'negative_sentiment' => $totalReviews > 0 ? round(($negative / $totalReviews) * 100, 1) : 0
            ];
            
            // Get most common words from review comments
            $sqlCommonWords = '
                SELECT 
                    LOWER(SUBSTRING_INDEX(SUBSTRING_INDEX(CONCAT(" ", commentaire, " "), " ", n.n), " ", -1)) as word,
                    COUNT(*) as frequency
                FROM 
                    avi,
                    (
                        SELECT a.n + b.n * 10 + 1 as n
                        FROM 
                            (SELECT 0 as n UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) a,
                            (SELECT 0 as n UNION SELECT 1 UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9) b
                        ORDER BY n
                    ) n
                WHERE 
                    LENGTH(CONCAT(" ", commentaire, " ")) - LENGTH(REPLACE(CONCAT(" ", commentaire, " "), " ", "")) >= n.n
                    AND LENGTH(LOWER(SUBSTRING_INDEX(SUBSTRING_INDEX(CONCAT(" ", commentaire, " "), " ", n.n), " ", -1))) > 3
                    AND LOWER(SUBSTRING_INDEX(SUBSTRING_INDEX(CONCAT(" ", commentaire, " "), " ", n.n), " ", -1)) NOT IN 
                    ("this", "that", "with", "from", "your", "which", "their", "what", "have", "were", "they", "will", "been", "when", "would", "could", "should", "there", "than", "then", "some", "pour", "dans", "avec", "cette", "pour", "vous", "votre", "nous", "notre", "sont", "mais", "plus", "moins", "tres", "tout", "tous", "toute", "toutes")
                GROUP BY 
                    word
                HAVING 
                    COUNT(*) > 1
                ORDER BY 
                    frequency DESC
                LIMIT 10
            ';
            
            $stmtCommonWords = $conn->prepare($sqlCommonWords);
            $resultCommonWords = $stmtCommonWords->executeQuery();
            $commonWords = $resultCommonWords->fetchAllAssociative();
            
            // Get review trends for the last 7 days
            $sqlReviewTrends = '
                SELECT 
                    DATE(date_creation) as date,
                    COUNT(id) as count,
                    AVG(note) as avg_rating
                FROM 
                    avi
                WHERE 
                    date_creation >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)
                GROUP BY 
                    DATE(date_creation)
                ORDER BY 
                    date ASC
            ';
            
            $stmtReviewTrends = $conn->prepare($sqlReviewTrends);
            $resultReviewTrends = $stmtReviewTrends->executeQuery();
            $reviewTrends = $resultReviewTrends->fetchAllAssociative();
            
            // Format review trends
            $formattedReviewTrends = [];
            $startDate = new \DateTime('-7 days');
            $endDate = new \DateTime();
            $interval = new \DateInterval('P1D');
            $dateRange = new \DatePeriod($startDate, $interval, $endDate);
            
            foreach ($dateRange as $date) {
                $dateStr = $date->format('Y-m-d');
                $found = false;
                
                foreach ($reviewTrends as $trend) {
                    if ($trend['date'] === $dateStr) {
                        $formattedReviewTrends[] = [
                            'date' => $dateStr,
                            'count' => (int)$trend['count'],
                            'avg_rating' => round((float)$trend['avg_rating'], 1)
                        ];
                        $found = true;
                        break;
                    }
                }
                
                if (!$found) {
                    $formattedReviewTrends[] = [
                        'date' => $dateStr,
                        'count' => 0,
                        'avg_rating' => 0
                    ];
                }
            }
            
            return $this->json([
                'success' => true,
                'reviewTrends' => $reviewTrends
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'error' => 'Failed to get review trends: ' . $e->getMessage()
            ], 500);
        }
    }

   /**
 * Get all statistics for the dashboard
 * 
 * @Route("/all", name="admin_statistiques_all", methods={"GET"})
 */
public function getAllStats(Request $request): JsonResponse
{
    try {
        // Get the year parameter from the request or use current year
        $year = $request->query->get('year', date('Y'));
        
        // Get revenue statistics
        $revenueResponse = $this->getRevenueStats($request);
        $revenueData = json_decode($revenueResponse->getContent(), true);
        
        // Get pack statistics
        $packResponse = $this->getPackStats();
        $packData = json_decode($packResponse->getContent(), true);
        
        // Get review statistics
        $reviewResponse = $this->getReviewStats();
        $reviewData = json_decode($reviewResponse->getContent(), true);
        
        // Get active events count
        $activeEvents = $this->getActiveEventsCount();
        
        // Initialize empty arrays for data that might not be available
        $reviewTrendsData = ['reviewTrends' => []];
        $requestData = ['requestStats' => []];
        $userData = ['userStats' => []];
        $topEventsData = ['topEvents' => []];
        
        // Try to get review trends if the method exists
        if (method_exists($this, 'getReviewTrends')) {
            $reviewTrendsResponse = $this->getReviewTrends();
            $reviewTrendsData = json_decode($reviewTrendsResponse->getContent(), true);
        }
        
        // Try to get request statistics if the method exists
        if (method_exists($this, 'getRequestStats')) {
            $requestResponse = $this->getRequestStats();
            $requestData = json_decode($requestResponse->getContent(), true);
        }
        
        // Try to get user statistics if the method exists
        if (method_exists($this, 'getUserStats')) {
            $userResponse = $this->getUserStats();
            $userData = json_decode($userResponse->getContent(), true);
        }
        
        // Try to get top events if the method exists
        if (method_exists($this, 'getTopEvents')) {
            $topEventsResponse = $this->getTopEvents();
            $topEventsData = json_decode($topEventsResponse->getContent(), true);
        }
        
        // Combine all data
        $allStats = [
            'success' => true,
            'revenueStats' => $revenueData['revenueStats'] ?? null,
            'packStats' => $packData['packStats'] ?? [],
            'reviewStats' => $reviewData['reviewStats'] ?? [],
            'reviewTrends' => $reviewTrendsData['reviewTrends'] ?? [],
            'requestStats' => $requestData['requestStats'] ?? [],
            'userStats' => $userData['userStats'] ?? [],
            'topEvents' => $topEventsData['topEvents'] ?? [],
            'activeEvents' => $activeEvents
        ];
        
        return $this->json($allStats);
    } catch (\Exception $e) {
        // Log the error
        error_log('Error in getAllStats: ' . $e->getMessage());
        
        return $this->json([
            'success' => false,
            'error' => 'Failed to get all stats: ' . $e->getMessage(),
            'revenueStats' => null,
            'packStats' => [],
            'reviewStats' => [],
            'reviewTrends' => [],
            'requestStats' => [],
            'userStats' => [],
            'topEvents' => [],
            'activeEvents' => 0
        ], 500);
    }
}

    /**
     * Get review trends data for the dashboard
     */
    public function getReviewTrends(): JsonResponse
    {
        try {
            $conn = $this->entityManager->getConnection();
            
            // Get review data grouped by date for the last 7 days
            $sql = '
                SELECT 
                    DATE(a.date_creation) as date,
                    COUNT(a.id) as reviews,
                    AVG(a.note) as avg_rating
                FROM 
                    avi a
                WHERE 
                    a.date_creation >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)
                GROUP BY 
                    DATE(a.date_creation)
                ORDER BY 
                    date ASC
            ';
            
            $stmt = $conn->prepare($sql);
            $result = $stmt->executeQuery();
            $reviewData = $result->fetchAllAssociative();
            
            // Fill in missing dates with zero values
            $reviewTrends = [];
            $startDate = new \DateTime('-7 days');
            $endDate = new \DateTime();
            
            $interval = new \DateInterval('P1D');
            $dateRange = new \DatePeriod($startDate, $interval, $endDate);
            
            foreach ($dateRange as $date) {
                $dateStr = $date->format('Y-m-d');
                $found = false;
                
                foreach ($reviewData as $data) {
                    if ($data['date'] === $dateStr) {
                        $reviewTrends[] = [
                            'date' => $dateStr,
                            'reviews' => (int)$data['reviews'],
                            'avg_rating' => round((float)$data['avg_rating'], 1)
                        ];
                        $found = true;
                        break;
                    }
                }
                
                if (!$found) {
                    $reviewTrends[] = [
                        'date' => $dateStr,
                        'reviews' => 0,
                        'avg_rating' => 0
                    ];
                }
            }
            
            return $this->json([
                'success' => true,
                'reviewTrends' => $reviewTrends
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'error' => 'Failed to get review trends: ' . $e->getMessage(),
                'reviewTrends' => []
            ]);
        }
    }

    /**
     * Get active events count
     */
   

    /**
     * Get top performing events
     */
    public function getTopEvents(): JsonResponse
    {
        try {
            $conn = $this->entityManager->getConnection();
            
            $sql = '
                SELECT 
                    e.id,
                    e.nom as event_name,
                    COUNT(a.id) as total_sales,
                    SUM(p.prix) as total_revenue,
                    AVG(av.note) as avg_rating
                FROM 
                    evenement e
                LEFT JOIN 
                    pack p ON p.evenement_id = e.id
                LEFT JOIN 
                    achat a ON a.pack_id = p.id
                LEFT JOIN 
                    avi av ON av.pack_id = p.id
                GROUP BY 
                    e.id
                ORDER BY 
                    total_sales DESC
                LIMIT 5
            ';
            
            $stmt = $conn->prepare($sql);
            $result = $stmt->executeQuery();
            $topEvents = $result->fetchAllAssociative();
            
            // Format the data
            foreach ($topEvents as &$event) {
                $event['total_sales'] = (int)$event['total_sales'];
                $event['total_revenue'] = round((float)$event['total_revenue'], 2);
                $event['avg_rating'] = round((float)$event['avg_rating'], 1);
            }
            
            return $this->json([
                'success' => true,
                'topEvents' => $topEvents
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'error' => 'Failed to get top events: ' . $e->getMessage(),
                'topEvents' => []
            ]);
        }
    }

    /**
     * @Route("/requests", name="admin_statistiques_requests", methods={"GET"})
     */
    public function getRequestStats(): JsonResponse
    {
        try {
            $conn = $this->entityManager->getConnection();
            
            // Get total number of requests
            $sqlTotalRequests = 'SELECT COUNT(id) as total_requests FROM demande_pack';
            $stmtTotalRequests = $conn->prepare($sqlTotalRequests);
            $resultTotalRequests = $stmtTotalRequests->executeQuery();
            $totalRequests = (int)$resultTotalRequests->fetchOne();
            
            // Get requests by status
            $sqlRequestsByStatus = '
                SELECT 
                    statut as status,
                    COUNT(id) as count,
                    (COUNT(id) / :total_requests * 100) as percent
                FROM 
                    demande_pack
                GROUP BY 
                    statut
            ';
            
            $stmtRequestsByStatus = $conn->prepare($sqlRequestsByStatus);
            $stmtRequestsByStatus->bindValue('total_requests', $totalRequests > 0 ? $totalRequests : 1);
            $resultRequestsByStatus = $stmtRequestsByStatus->executeQuery();
            $requestsByStatus = $resultRequestsByStatus->fetchAllAssociative();
            
            // Format status distribution
            $statusDistribution = [
                'pending' => 0,
                'pending_percent' => 0,
                'approved' => 0,
                'approved_percent' => 0,
                'rejected' => 0,
                'rejected_percent' => 0,
                'completed' => 0,
                'completed_percent' => 0
            ];
            
            foreach ($requestsByStatus as $status) {
                $statusKey = strtolower($status['status']);
                if (isset($statusDistribution[$statusKey])) {
                    $statusDistribution[$statusKey] = (int)$status['count'];
                    $statusDistribution["{$statusKey}_percent"] = round((float)$status['percent'], 1);
                }
            }
            
            // Get average response time (in hours)
            $sqlAvgResponseTime = '
                SELECT 
                    AVG(TIMESTAMPDIFF(HOUR, date_creation, date_modification)) as avg_response_time
                FROM 
                    demande_pack
                WHERE 
                    date_modification IS NOT NULL
                    AND statut != "pending"
            ';
            
            $stmtAvgResponseTime = $conn->prepare($sqlAvgResponseTime);
            $resultAvgResponseTime = $stmtAvgResponseTime->executeQuery();
            $avgResponseTime = (float)$resultAvgResponseTime->fetchOne();
            
            // Get request trends for the last 7 days
            $sqlRequestTrends = '
                SELECT 
                    DATE(date_creation) as date,
                    COUNT(id) as count,
                    statut as status
                FROM 
                    demande_pack
                WHERE 
                    date_creation >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)
                GROUP BY 
                    DATE(date_creation), statut
                ORDER BY 
                    date ASC
            ';
            
            $stmtRequestTrends = $conn->prepare($sqlRequestTrends);
            $resultRequestTrends = $stmtRequestTrends->executeQuery();
            $requestTrends = $resultRequestTrends->fetchAllAssociative();
            
            // Format request trends
            $formattedRequestTrends = [];
            $startDate = new \DateTime('-7 days');
            $endDate = new \DateTime();
            $interval = new \DateInterval('P1D');
            $dateRange = new \DatePeriod($startDate, $interval, $endDate);
            
            foreach ($dateRange as $date) {
                $dateStr = $date->format('Y-m-d');
                $dayData = [
                    'date' => $dateStr,
                    'total' => 0,
                    'pending' => 0,
                    'approved' => 0,
                    'rejected' => 0,
                    'completed' => 0
                ];
                
                foreach ($requestTrends as $trend) {
                    if ($trend['date'] === $dateStr) {
                        $statusKey = strtolower($trend['status']);
                        if (isset($dayData[$statusKey])) {
                            $dayData[$statusKey] = (int)$trend['count'];
                            $dayData['total'] += (int)$trend['count'];
                        }
                    }
                }
                
                $formattedRequestTrends[] = $dayData;
            }
            
            // Get most requested pack types
            $sqlMostRequestedPacks = '
                SELECT 
                    type_pack as pack_type,
                    COUNT(id) as count,
                    (COUNT(id) / :total_requests * 100) as percent
                FROM 
                    demande_pack
                GROUP BY 
                    type_pack
                ORDER BY 
                    count DESC
                LIMIT 5
            ';
            
            $stmtMostRequestedPacks = $conn->prepare($sqlMostRequestedPacks);
            $stmtMostRequestedPacks->bindValue('total_requests', $totalRequests > 0 ? $totalRequests : 1);
            $resultMostRequestedPacks = $stmtMostRequestedPacks->executeQuery();
            $mostRequestedPacks = $resultMostRequestedPacks->fetchAllAssociative();
            
            // Combine all request statistics
            $requestStats = [
                'total_requests' => $totalRequests,
                'avg_response_time' => round($avgResponseTime, 1),
                'request_trends' => $formattedRequestTrends,
                'most_requested_packs' => $mostRequestedPacks
            ];
            
            // Merge in the status distribution
            $requestStats = array_merge($requestStats, $statusDistribution);
            
            return $this->json([
                'success' => true,
                'requestStats' => $requestStats
            ]);
        } catch (\Exception $e) {
            // Log the error
            error_log('Error in getRequestStats: ' . $e->getMessage());
            
            return $this->json([
                'success' => false,
                'error' => 'Failed to get request statistics: ' . $e->getMessage(),
                'requestStats' => [
                    'total_requests' => 0,
                    'avg_response_time' => 0,
                    'pending' => 0,
                    'pending_percent' => 0,
                    'approved' => 0,
                    'approved_percent' => 0,
                    'rejected' => 0,
                    'rejected_percent' => 0,
                    'completed' => 0,
                    'completed_percent' => 0,
                    'request_trends' => [],
                    'most_requested_packs' => []
                ]
            ]);
        }
    }

    /**
     * @Route("/users", name="admin_statistiques_users", methods={"GET"})
     */
    public function getUserStats(): JsonResponse
    {
        try {
            $conn = $this->entityManager->getConnection();
            
            // Get total number of users
            $sqlTotalUsers = 'SELECT COUNT(id) as total_users FROM utilisateur';
            $stmtTotalUsers = $conn->prepare($sqlTotalUsers);
            $resultTotalUsers = $stmtTotalUsers->executeQuery();
            $totalUsers = (int)$resultTotalUsers->fetchOne();
            
            // Get users by role
            $sqlUsersByRole = '
                SELECT 
                    roles,
                    COUNT(id) as count
                FROM 
                    utilisateur
                GROUP BY 
                    roles
            ';
            
            $stmtUsersByRole = $conn->prepare($sqlUsersByRole);
            $resultUsersByRole = $stmtUsersByRole->executeQuery();
            $usersByRole = $resultUsersByRole->fetchAllAssociative();
            
            // Format role distribution
            $roleDistribution = [
                'admin_count' => 0,
                'user_count' => 0,
                'client_count' => 0
            ];
            
            foreach ($usersByRole as $role) {
                $roleJson = $role['roles'];
                if (strpos($roleJson, 'ROLE_ADMIN') !== false) {
                    $roleDistribution['admin_count'] += (int)$role['count'];
                } elseif (strpos($roleJson, 'ROLE_CLIENT') !== false) {
                    $roleDistribution['client_count'] += (int)$role['count'];
                } else {
                    $roleDistribution['user_count'] += (int)$role['count'];
                }
            }
            
            // Get new users in the last 30 days
            $sqlNewUsers = '
                SELECT 
                    COUNT(id) as new_users
                FROM 
                    utilisateur
                WHERE 
                    date_creation >= DATE_SUB(CURDATE(), INTERVAL 30 DAY)
            ';
            
            $stmtNewUsers = $conn->prepare($sqlNewUsers);
            $resultNewUsers = $stmtNewUsers->executeQuery();
            $newUsers = (int)$resultNewUsers->fetchOne();
            
            // Get user registration trends for the last 7 days
            $sqlUserTrends = '
                SELECT 
                    DATE(date_creation) as date,
                    COUNT(id) as count
                FROM 
                    utilisateur
                WHERE 
                    date_creation >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)
                GROUP BY 
                    DATE(date_creation)
                ORDER BY 
                    date ASC
            ';
            
            $stmtUserTrends = $conn->prepare($sqlUserTrends);
            $resultUserTrends = $stmtUserTrends->executeQuery();
            $userTrends = $resultUserTrends->fetchAllAssociative();
            
            // Format user trends
            $formattedUserTrends = [];
            $startDate = new \DateTime('-7 days');
            $endDate = new \DateTime();
            $interval = new \DateInterval('P1D');
            $dateRange = new \DatePeriod($startDate, $interval, $endDate);
            
            foreach ($dateRange as $date) {
                $dateStr = $date->format('Y-m-d');
                $found = false;
                
                foreach ($userTrends as $trend) {
                    if ($trend['date'] === $dateStr) {
                        $formattedUserTrends[] = [
                            'date' => $dateStr,
                            'count' => (int)$trend['count']
                        ];
                        $found = true;
                        break;
                    }
                }
                
                if (!$found) {
                    $formattedUserTrends[] = [
                        'date' => $dateStr,
                        'count' => 0
                    ];
                }
            }
            
            // Combine all user statistics
            $userStats = array_merge(
                [
                    'total_users' => $totalUsers,
                    'new_users_30_days' => $newUsers,
                    'new_users_percent' => $totalUsers > 0 ? round(($newUsers / $totalUsers) * 100, 1) : 0,
                    'user_trends' => $formattedUserTrends
                ],
                $roleDistribution
            );
            
            return $this->json([
                'success' => true,
                'userStats' => $userStats
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'error' => 'Failed to get user statistics: ' . $e->getMessage(),
                'userStats' => [
                    'total_users' => 0,
                    'new_users_30_days' => 0,
                    'new_users_percent' => 0,
                    'admin_count' => 0,
                    'user_count' => 0,
                    'client_count' => 0,
                    'user_trends' => []
                ]
            ]);
        }
    }

  
    /**
     * Get active events count
     */
    private function getActiveEventsCount(): int
    {
        try {
            $conn = $this->entityManager->getConnection();
            $sql = '
                SELECT COUNT(id) as count
                FROM event
                WHERE date <= CURRENT_DATE() AND date IS NOT NULL
            ';
            $stmt = $conn->prepare($sql);
            $resultSet = $stmt->executeQuery();
            return (int)$resultSet->fetchOne();
        } catch (\Exception $e) {
            return 0;
        }
    }

    /**
     * Get top performing events
     */
    
}