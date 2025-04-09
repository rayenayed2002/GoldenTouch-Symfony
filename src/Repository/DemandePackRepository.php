<?php

namespace App\Repository;

use App\Entity\DemandePack;
use App\Enum\StatusEnum;
use DateInterval;
use DateTime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class DemandePackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DemandePack::class);
    }

    public function findByPackStatistics(): array
    {
        try {
            $qb = $this->createQueryBuilder('dp')
                ->select('p.id, p.description, e.nom as event_name, 
                         COUNT(dp.id) as purchases, 
                         COALESCE(AVG(a.note), 0) as avg_rating,
                         p.prix as price,
                         COUNT(DISTINCT dp.utilisateur) as unique_buyers,
                         SUM(p.prix) as total_revenue')
                ->join('dp.pack', 'p')
                ->join('p.event', 'e')
                ->leftJoin('App\Entity\Avis', 'a', 'WITH', 'a.idPack = p.id')
                ->groupBy('p.id, p.description, e.nom, p.prix')
                ->orderBy('purchases', 'DESC');

            $results = $qb->getQuery()->getResult();

            // Calculate percentage changes
            foreach ($results as &$pack) {
                // Get previous period stats for comparison
                $previousStats = $this->findByPreviousPeriodStats($pack['id']);
                
                $pack['purchases_change'] = $previousStats && $previousStats['prev_purchases'] > 0 ? 
                    (($pack['purchases'] - $previousStats['prev_purchases']) / max(1, $previousStats['prev_purchases'])) * 100 : 0;
                    
                $pack['revenue_change'] = $previousStats && $previousStats['prev_revenue'] > 0 ? 
                    (($pack['total_revenue'] - $previousStats['prev_revenue']) / max(1, $previousStats['prev_revenue'])) * 100 : 0;
                
                // Add sentiment analysis data for each pack
                $packSentiments = $this->findByPackSentiments($pack['id']);
                $pack['sentiment_analysis'] = $packSentiments;
            }

            return $results;
        } catch (\Exception $e) {
            error_log('Error in findByPackStatistics: ' . $e->getMessage());
            return [];
        }
    }

    public function findByPackSentiments(int $packId): array
    {
        try {
            $qb = $this->getEntityManager()->createQueryBuilder()
                ->select('a.note')
                ->from('App\Entity\Avis', 'a')
                ->where('a.idPack = :packId')
                ->setParameter('packId', $packId);
                
            $ratings = $qb->getQuery()->getResult();
            
            $positive = 0;
            $neutral = 0;
            $negative = 0;
            
            foreach ($ratings as $rating) {
                $score = $rating['note'];
                if ($score >= 4) {
                    $positive++;
                } elseif ($score >= 3) {
                    $neutral++;
                } else {
                    $negative++;
                }
            }
            
            $total = max(1, count($ratings));
            return [
                'positive' => round(($positive / $total) * 100),
                'neutral' => round(($neutral / $total) * 100),
                'negative' => round(($negative / $total) * 100)
            ];
        } catch (\Exception $e) {
            error_log('Error in findByPackSentiments: ' . $e->getMessage());
            return [
                'positive' => 0,
                'neutral' => 0,
                'negative' => 0
            ];
        }
    }

    public function findByRevenueStats(): array
    {
        try {
            $qb = $this->createQueryBuilder('dp')
                ->select('
                    COUNT(dp.id) as total_sales,
                    SUM(p.prix) as total_revenue,
                    AVG(p.prix) as avg_revenue_per_pack,
                    COUNT(DISTINCT dp.utilisateur) as unique_buyers
                ')
                ->join('dp.pack', 'p');

            $result = $qb->getQuery()->getOneOrNullResult();

            return [
                'total_sales' => (int)($result['total_sales'] ?? 0),
                'total_revenue' => (float)($result['total_revenue'] ?? 0),
                'avg_revenue_per_pack' => (float)($result['avg_revenue_per_pack'] ?? 0),
                'unique_buyers' => (int)($result['unique_buyers'] ?? 0)
            ];
        } catch (\Exception $e) {
            error_log('Error in findByRevenueStats: ' . $e->getMessage());
            return [
                'total_sales' => 0,
                'total_revenue' => 0,
                'avg_revenue_per_pack' => 0,
                'unique_buyers' => 0
            ];
        }
    }

    public function findByPreviousPeriodStats(int $packId): array
    {
        try {
            $endDate = new DateTime('-30 days');
            $startDate = new DateTime('-60 days');
            
            $qb = $this->createQueryBuilder('dp')
                ->select('
                    COUNT(dp.id) as prev_purchases,
                    SUM(p.prix) as prev_revenue
                ')
                ->join('dp.pack', 'p')
                ->where('p.id = :packId')
                ->andWhere('dp.dateCreation BETWEEN :start AND :end')
                ->setParameter('packId', $packId)
                ->setParameter('start', $startDate)
                ->setParameter('end', $endDate);
                
            $stats = $qb->getQuery()->getOneOrNullResult();
            
            if (!$stats || !$stats['prev_purchases']) {
                return ['prev_purchases' => 0, 'prev_revenue' => 0];
            }
            
            return $stats;
        } catch (\Exception $e) {
            error_log('Error in findByPreviousPeriodStats: ' . $e->getMessage());
            return ['prev_purchases' => 0, 'prev_revenue' => 0];
        }
    }

    public function findByPurchaseTrends(): array
    {
        try {
            $endDate = new \DateTime();
            $startDate = (new \DateTime())->modify('-30 days');

            $qb = $this->createQueryBuilder('dp')
                ->select('
                    DATE(dp.dateCreation) as date,
                    COUNT(dp.id) as purchases,
                    SUM(p.prix) as revenue,
                    COUNT(DISTINCT dp.utilisateur) as unique_buyers
                ')
                ->join('dp.pack', 'p')
                ->where('dp.dateCreation BETWEEN :start AND :end')
                ->setParameter('start', $startDate)
                ->setParameter('end', $endDate)
                ->groupBy('date')
                ->orderBy('date', 'ASC');

            $results = $qb->getQuery()->getResult();

            // Fill in missing dates with zero values
            $filledResults = [];
            $currentDate = clone $startDate;
            while ($currentDate <= $endDate) {
                $dateStr = $currentDate->format('Y-m-d');
                $found = false;
                foreach ($results as $result) {
                    if ($result['date'] instanceof \DateTime) {
                        $resultDate = $result['date']->format('Y-m-d');
                    } else {
                        $resultDate = $result['date'];
                    }
                    
                    if ($resultDate === $dateStr) {
                        $filledResults[] = $result;
                        $found = true;
                        break;
                    }
                }
                if (!$found) {
                    $filledResults[] = [
                        'date' => $dateStr,
                        'purchases' => 0,
                        'revenue' => '0.00',
                        'unique_buyers' => 0
                    ];
                }
                $currentDate->modify('+1 day');
            }

            return $filledResults;
        } catch (\Exception $e) {
            error_log('Error in findByPurchaseTrends: ' . $e->getMessage());
            return [];
        }
    }

    public function findByReviewTrends(): array
    {
        try {
            $endDate = new \DateTime();
            $startDate = (new \DateTime())->modify('-30 days');

            $qb = $this->createQueryBuilder('dp')
                ->select('
                    DATE(a.dateCreation) as date,
                    COUNT(a.id) as reviews,
                    AVG(a.note) as avg_rating
                ')
                ->join('dp.pack', 'p')
                ->join('App\Entity\Avis', 'a', 'WITH', 'a.idPack = p.id')
                ->where('a.dateCreation BETWEEN :start AND :end')
                ->setParameter('start', $startDate)
                ->setParameter('end', $endDate)
                ->groupBy('date')
                ->orderBy('date', 'ASC');

            $results = $qb->getQuery()->getResult();

            // Fill in missing dates with zero values
            $filledResults = [];
            $currentDate = clone $startDate;
            while ($currentDate <= $endDate) {
                $dateStr = $currentDate->format('Y-m-d');
                $found = false;
                foreach ($results as $result) {
                    if ($result['date'] instanceof \DateTime) {
                        $resultDate = $result['date']->format('Y-m-d');
                    } else {
                        $resultDate = $result['date'];
                    }
                    
                    if ($resultDate === $dateStr) {
                        $filledResults[] = $result;
                        $found = true;
                        break;
                    }
                }
                if (!$found) {
                    $filledResults[] = [
                        'date' => $dateStr,
                        'reviews' => 0,
                        'avg_rating' => 0
                    ];
                }
                $currentDate->modify('+1 day');
            }

            return $filledResults;
        } catch (\Exception $e) {
            error_log('Error in findByReviewTrends: ' . $e->getMessage());
            return [];
        }
    }

    public function findByPackStatusDistribution(): array
    {
        try {
            $qb = $this->createQueryBuilder('dp')
                ->select('dp.statut as status, COUNT(dp.id) as count')
                ->groupBy('dp.statut')
                ->getQuery();

            $results = $qb->getResult();

            // Initialize with all possible statuses as strings
            $statuses = [
                'EN_ATTENTE' => 0,
                'EN_ATTENTE_CONFIRMATION_UTILISATEUR' => 0,
                'EN_PERSONNALISATION' => 0,
                'CONFIRME' => 0,
                'EN_COURS' => 0,
                'TERMINE' => 0,
                'ANNULE' => 0
            ];

            // Map actual results
            foreach ($results as $result) {
                // Convert enum to string if needed
                $status = $result['status'];
                if ($status instanceof StatusEnum) {
                    $status = $status->value;
                }
                
                if (array_key_exists($status, $statuses)) {
                    $statuses[$status] = (int)$result['count'];
                }
            }

            // Format results for chart with labels
            $formattedResults = [];
            foreach ($statuses as $status => $count) {
                $formattedResults[] = [
                    'status' => $status,
                    'status_label' => match($status) {
                        'EN_ATTENTE' => 'En attente',
                        'EN_ATTENTE_CONFIRMATION_UTILISATEUR' => 'En attente de confirmation',
                        'EN_PERSONNALISATION' => 'En personnalisation',
                        'CONFIRME' => 'Confirmé',
                        'EN_COURS' => 'En cours',
                        'TERMINE' => 'Terminé',
                        'ANNULE' => 'Annulé',
                        default => $status
                    },
                    'count' => $count
                ];
            }

            return $formattedResults;
        } catch (\Exception $e) {
            error_log('Error in findByPackStatusDistribution: ' . $e->getMessage());
            return [];
        }
    }

    public function findByReviewAnalytics(): array
    {
        try {
            // Get total reviews count and average rating
            $qb = $this->createQueryBuilder('dp')
                ->select('
                    COUNT(DISTINCT a.id) as total_reviews,
                    COALESCE(AVG(a.note), 0) as avg_rating
                ')
                ->join('dp.pack', 'p')
                ->join('App\Entity\Avis', 'a', 'WITH', 'a.idPack = p.id');
            
            $basicStats = $qb->getQuery()->getOneOrNullResult();
            
            // Get all reviews for sentiment analysis
            $reviewsQb = $this->createQueryBuilder('dp')
                ->select('a.id, a.note, a.commentaire, p.id as packId, p.description as packName')
                ->join('dp.pack', 'p')
                ->join('App\Entity\Avis', 'a', 'WITH', 'a.idPack = p.id')
                ->where('a.commentaire IS NOT NULL');
            
            $reviews = $reviewsQb->getQuery()->getResult();
            
            // Initialize counters
            $positive = 0;
            $neutral = 0;
            $negative = 0;
            $packComments = [];
            $allComments = [];
            
            // Analyze each review
            foreach ($reviews as $review) {
                $sentiment = $this->analyzeSentiment($review['commentaire']);
                $allComments[] = $review['commentaire'];
                
                // Track comments by pack
                if (!isset($packComments[$review['packId']])) {
                    $packComments[$review['packId']] = [
                        'pack_id' => $review['packId'],
                        'pack_name' => $review['packName'],
                        'comments' => [],
                        'positive' => 0,
                        'neutral' => 0,
                        'negative' => 0,
                        'total_reviews' => 0
                    ];
                }
                
                $packComments[$review['packId']]['comments'][] = $review['commentaire'];
                $packComments[$review['packId']][$sentiment]++;
                $packComments[$review['packId']]['total_reviews']++;
                
                // Update overall sentiment counts
                if ($sentiment === 'positive') $positive++;
                elseif ($sentiment === 'neutral') $neutral++;
                else $negative++;
            }
            
            // Convert pack comments to array and sort by total reviews
            $topCommentedPacks = array_values($packComments);
            usort($topCommentedPacks, function($a, $b) {
                return $b['total_reviews'] - $a['total_reviews'];
            });
            
            // Take only top 5 and add sentiment percentages
            $topCommentedPacks = array_slice($topCommentedPacks, 0, 5);
            foreach ($topCommentedPacks as &$pack) {
                $total = max(1, $pack['positive'] + $pack['neutral'] + $pack['negative']);
                $pack['sentiment'] = [
                    'positive' => round(($pack['positive'] / $total) * 100),
                    'neutral' => round(($pack['neutral'] / $total) * 100),
                    'negative' => round(($pack['negative'] / $total) * 100)
                ];
            }
            
            // Get word frequency analysis
            $wordFrequency = $this->getWordFrequency($allComments);
            $wordCloudData = [];
            foreach ($wordFrequency as $word => $count) {
                $wordCloudData[] = [
                    'word' => $word,
                    'frequency' => $count
                ];
            }
            
            // Calculate sentiment percentages
            $totalSentiments = $positive + $neutral + $negative;
            if ($totalSentiments == 0) {
                // If no sentiments were analyzed, provide default percentages
                $positivePct = 0;
                $neutralPct = 0;
                $negativePct = 0;
            } else {
                $positivePct = round(($positive / $totalSentiments) * 100);
                $neutralPct = round(($neutral / $totalSentiments) * 100);
                $negativePct = round(($negative / $totalSentiments) * 100);
            }
            
            // Use actual data or provide fallback
            $totalReviews = (int)($basicStats['total_reviews'] ?? 0);
            $avgRating = (float)($basicStats['avg_rating'] ?? 0);
            
            return [
                'total_reviews' => $totalReviews,
                'avg_rating' => number_format($avgRating, 1),
                'sentiment_distribution' => [
                    'positive_sentiment' => $positivePct,
                    'neutral_sentiment' => $neutralPct,
                    'negative_sentiment' => $negativePct
                ],
                'most_common_words' => !empty($wordCloudData) ? $wordCloudData : [],
                'top_commented_packs' => !empty($topCommentedPacks) ? $topCommentedPacks : []
            ];
        } catch (\Exception $e) {
            error_log('Error in findByReviewAnalytics: ' . $e->getMessage());
            return [
                'total_reviews' => 0,
                'avg_rating' => '0.0',
                'sentiment_distribution' => [
                    'positive_sentiment' => 0,
                    'neutral_sentiment' => 0,
                    'negative_sentiment' => 0
                ],
                'most_common_words' => [],
                'top_commented_packs' => []
            ];
        }
    }

    public function findByPackComments(int $packId): array
    {
        try {
            $qb = $this->getEntityManager()->createQueryBuilder()
                ->select('a.commentaire')
                ->from('App\Entity\Avis', 'a')
                ->where('a.idPack = :packId')
                ->andWhere('a.commentaire IS NOT NULL')
                ->setParameter('packId', $packId);

            $results = $qb->getQuery()->getResult();
            return array_column($results, 'commentaire');
        } catch (\Exception $e) {
            error_log('Error in findByPackComments: ' . $e->getMessage());
            return [];
        }
    }

    public function findByAllComments(): array
    {
        try {
            $qb = $this->getEntityManager()->createQueryBuilder()
                ->select('a.commentaire')
                ->from('App\Entity\Avis', 'a')
                ->where('a.commentaire IS NOT NULL');

            $results = $qb->getQuery()->getResult();
            return array_column($results, 'commentaire');
        } catch (\Exception $e) {
            error_log('Error in findByAllComments: ' . $e->getMessage());
            return [];
        }
    }

    public function findByPackReviewTrends(int $packId): array
    {
        try {
            $qb = $this->getEntityManager()->createQueryBuilder()
                ->select('SUBSTRING(a.dateCreation, 1, 10) as date, 
                         COUNT(a.id) as count,
                         AVG(a.note) as avg_rating')
                ->from('App\Entity\Avis', 'a')
                ->where('a.idPack = :packId')
                ->andWhere('a.dateCreation >= :startDate')
                ->setParameter('packId', $packId)
                ->setParameter('startDate', new DateTime('-30 days'))
                ->groupBy('date')
                ->orderBy('date', 'ASC');

            $results = $qb->getQuery()->getResult();

            foreach ($results as &$result) {
                // Get comments for this date
                $dateComments = $this->findByPackCommentsForDate($packId, $result['date']);
                $result['sentiment'] = $this->analyzeSentiments($dateComments);
            }

            return $results;
        } catch (\Exception $e) {
            error_log('Error in findByPackReviewTrends: ' . $e->getMessage());
            return [];
        }
    }

    public function findByPackCommentsForDate(int $packId, string $date): array
    {
        try {
            $qb = $this->getEntityManager()->createQueryBuilder()
                ->select('a.commentaire')
                ->from('App\Entity\Avis', 'a')
                ->where('a.idPack = :packId')
                ->andWhere('SUBSTRING(a.dateCreation, 1, 10) = :date')
                ->andWhere('a.commentaire IS NOT NULL')
                ->setParameter('packId', $packId)
                ->setParameter('date', $date);

            $results = $qb->getQuery()->getResult();
            return array_column($results, 'commentaire');
        } catch (\Exception $e) {
            error_log('Error in findByPackCommentsForDate: ' . $e->getMessage());
            return [];
        }
    }

    private function analyzeSentiments(array $comments): array
    {
        try {
            $positiveWords = [
                'excellent', 'parfait', 'super', 'génial', 'incroyable', 'fantastique',
                'merveilleux', 'extraordinaire', 'formidable', 'magnifique', 'superbe',
                'adorable', 'agréable', 'satisfait', 'content', 'heureux', 'ravi',
                'recommande', 'bravo', 'merci', 'bien', 'bon', 'cool', 'top',
                'plaisir', 'adore', 'aime', 'qualité', 'professionnel', 'réussi',
                'efficace', 'rapide', 'ponctuel', 'aimable', 'souriant', 'compétent',
                'good', 'great', 'awesome', 'amazing', 'excellent', 'wonderful',
                'perfect', 'fantastic', 'terrific', 'outstanding', 'superb',
                'brilliant', 'exceptional', 'marvelous', 'splendid', 'fabulous',
                'delightful', 'pleasant', 'satisfied', 'happy', 'impressed',
                'recommend', 'thanks', 'thank you', 'love', 'enjoy', 'nice',
                'quality', 'professional', 'efficient', 'fast', 'friendly', 'helpful'
            ];

            $negativeWords = [
                'mauvais', 'terrible', 'horrible', 'décevant', 'nul', 'médiocre',
                'catastrophique', 'désastreux', 'insatisfait', 'déçu', 'mécontent',
                'problème', 'erreur', 'pire', 'mal', 'pas bon', 'pas bien', 'bof',
                'dommage', 'regrettable', 'difficile', 'cher', 'lent', 'retard',
                'impoli', 'incompétent', 'arnaque', 'escroquerie', 'déplorable',
                'bad', 'terrible', 'horrible', 'disappointing', 'awful', 'poor',
                'worst', 'mediocre', 'unsatisfactory', 'disappointed', 'unhappy',
                'problem', 'error', 'mistake', 'worse', 'not good', 'not nice',
                'unfortunately', 'regrettable', 'difficult', 'expensive', 'slow', 'late',
                'rude', 'incompetent', 'scam', 'fraud', 'waste', 'useless'
            ];

            $positive = 0;
            $negative = 0;
            $neutral = 0;
            
            foreach ($comments as $comment) {
                if (empty($comment)) continue;
                
                $comment = strtolower($comment);
                $positiveCount = 0;
                $negativeCount = 0;
                
                foreach ($positiveWords as $word) {
                    $positiveCount += substr_count($comment, $word);
                }
                
                foreach ($negativeWords as $word) {
                    $negativeCount += substr_count($comment, $word);
                }
                
                if ($positiveCount > $negativeCount) {
                    $positive++;
                } elseif ($negativeCount > $positiveCount) {
                    $negative++;
                } else {
                    $neutral++;
                }
            }
            
            $total = max(1, $positive + $negative + $neutral);
            
            return [
                'positive' => round(($positive / $total) * 100),
                'negative' => round(($negative / $total) * 100),
                'neutral' => round(($neutral / $total) * 100)
            ];
        } catch (\Exception $e) {
            error_log('Error in analyzeSentiments: ' . $e->getMessage());
            return [
                'positive' => 0,
                'negative' => 0,
                'neutral' => 0
            ];
        }
    }

    private function analyzeSentiment(string $text): string
    {
        $positiveWords = [
            'excellent', 'parfait', 'super', 'génial', 'incroyable', 'fantastique',
            'merveilleux', 'extraordinaire', 'formidable', 'magnifique', 'superbe',
            'adorable', 'agréable', 'satisfait', 'content', 'heureux', 'ravi',
            'recommande', 'bravo', 'merci', 'bien', 'bon', 'cool', 'top',
            'plaisir', 'adore', 'aime', 'qualité', 'professionnel', 'réussi',
            'efficace', 'rapide', 'ponctuel', 'aimable', 'souriant', 'compétent',
            'good', 'great', 'awesome', 'amazing', 'excellent', 'wonderful',
            'perfect', 'fantastic', 'terrific', 'outstanding', 'superb',
            'brilliant', 'exceptional', 'marvelous', 'splendid', 'fabulous',
            'delightful', 'pleasant', 'satisfied', 'happy', 'impressed',
            'recommend', 'thanks', 'thank you', 'love', 'enjoy', 'nice',
            'quality', 'professional', 'efficient', 'fast', 'friendly', 'helpful'
        ];

        $negativeWords = [
            'mauvais', 'terrible', 'horrible', 'décevant', 'nul', 'médiocre',
            'catastrophique', 'désastreux', 'insatisfait', 'déçu', 'mécontent',
            'problème', 'erreur', 'pire', 'mal', 'pas bon', 'pas bien', 'bof',
            'dommage', 'regrettable', 'difficile', 'cher', 'lent', 'retard',
            'impoli', 'incompétent', 'arnaque', 'escroquerie', 'déplorable',
            'bad', 'terrible', 'horrible', 'disappointing', 'awful', 'poor',
            'worst', 'mediocre', 'unsatisfactory', 'disappointed', 'unhappy',
            'problem', 'error', 'mistake', 'worse', 'not good', 'not nice',
            'unfortunately', 'regrettable', 'difficult', 'expensive', 'slow', 'late',
            'rude', 'incompetent', 'scam', 'fraud', 'waste', 'useless'
        ];

        $text = mb_strtolower($text);
        $positiveCount = 0;
        $negativeCount = 0;
        
        // Count positive words
        foreach ($positiveWords as $word) {
            // Check for whole word matches or word with punctuation
            preg_match_all('/\b' . preg_quote($word, '/') . '\b/u', $text, $matches);
            $positiveCount += count($matches[0]);
        }
        
        // Count negative words
        foreach ($negativeWords as $word) {
            // Check for whole word matches or word with punctuation
            preg_match_all('/\b' . preg_quote($word, '/') . '\b/u', $text, $matches);
            $negativeCount += count($matches[0]);
        }
        
        // Check for negations that might flip sentiment
        $negations = ['ne pas', 'n\'est pas', 'pas', 'jamais', 'aucun', 'not', 'don\'t', 'doesn\'t', 'didn\'t', 'won\'t', 'can\'t', 'couldn\'t'];
        $negationCount = 0;
        
        foreach ($negations as $negation) {
            $negationCount += substr_count($text, $negation);
        }
        
        // Adjust counts if negations are present (simplistic approach)
        if ($negationCount > 0) {
            // Swap counts if negations are found (simplified approach)
            $temp = $positiveCount;
            $positiveCount = $negativeCount;
            $negativeCount = $temp;
        }
        
        if ($positiveCount > $negativeCount) {
            return 'positive';
        } elseif ($negativeCount > $positiveCount) {
            return 'negative';
        }
        
        // If equal or no sentiment words found, determine by looking for specific phrases
        if (preg_match('/(j\'aime|I like|I love|I enjoy|très bien|very good)/ui', $text)) {
            return 'positive';
        }
        
        if (preg_match('/(je n\'aime pas|I don\'t like|I hate|I dislike|très mauvais|very bad)/ui', $text)) {
            return 'negative';
        }
        
        return 'neutral';
    }

    private function getWordFrequency(array $comments): array
    {
        try {
            $wordCounts = [];
            $stopWords = [
                'le', 'la', 'les', 'un', 'une', 'des', 'et', 'est', 'à', 'de', 'du', 'en', 'pour', 'dans',
                'par', 'sur', 'au', 'aux', 'ce', 'ces', 'cette', 'son', 'sa', 'ses', 'mon', 'ma', 'mes',
                'ton', 'ta', 'tes', 'il', 'elle', 'ils', 'elles', 'nous', 'vous', 'qui', 'que', 'quoi',
                'comment', 'où', 'quand', 'pourquoi', 'car', 'mais', 'ou', 'donc', 'ni', 'si', 'alors',
                'the', 'a', 'an', 'and', 'is', 'to', 'of', 'for', 'in', 'on', 'by', 'at', 'this', 'that',
                'these', 'those', 'my', 'your', 'his', 'her', 'its', 'our', 'their', 'it', 'they', 'we',
                'you', 'who', 'what', 'which', 'how', 'where', 'when', 'why', 'because', 'but', 'or',
                'so', 'if', 'then', 'as', 'with', 'from', 'was', 'were', 'am', 'are', 'been', 'being'
            ];

            foreach ($comments as $comment) {
                if (empty($comment)) continue;
                
                $text = mb_strtolower($comment);
                $text = preg_replace('/[^\p{L}\s]/u', ' ', $text); // Replace non-letters with spaces
                $words = explode(' ', $text);
                $words = array_filter($words, function($word) use ($stopWords) {
                    return strlen($word) > 2 && !in_array($word, $stopWords);
                });

                foreach ($words as $word) {
                    $word = trim($word);
                    if (!empty($word)) {
                        if (!isset($wordCounts[$word])) {
                            $wordCounts[$word] = 0;
                        }
                        $wordCounts[$word]++;
                    }
                }
            }

            arsort($wordCounts);
            $result = array_slice($wordCounts, 0, 20, true); // Return top 20 words
            
            return $result;
        } catch (\Exception $e) {
            error_log('Error in getWordFrequency: ' . $e->getMessage());
            return [];
        }
    }

    private function calculateChangePercentage($previous, $current): float
    {
        try {
            if ($previous == 0) return 0;
            return round((($current - $previous) / $previous) * 100, 1);
        } catch (\Exception $e) {
            error_log('Error in calculateChangePercentage: ' . $e->getMessage());
            return 0;
        }
    }
}
