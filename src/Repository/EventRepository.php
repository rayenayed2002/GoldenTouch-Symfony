<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Enum\CategorieEvent;  // Ensure this is the correct path


/**
 * @extends ServiceEntityRepository<Event>
 */
class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }

    //    /**
    //     * @return Event[] Returns an array of Event objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Event
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    public function findByTopPerformance(int $limit = 5): array
    {
        try {
            $result = $this->createQueryBuilder('e')
                ->select('e.id, e.nom as event_name, 
                         COUNT(DISTINCT p.id) as total_packs,
                         COUNT(DISTINCT dp.id) as total_sales,
                         SUM(p.prix) as total_revenue,
                         AVG(COALESCE(a.note, 0)) as avg_rating,
                         COUNT(DISTINCT dp.user) as unique_customers')
                ->leftJoin('App\Entity\Pack', 'p', 'WITH', 'p.event = e.id')
                ->leftJoin('p.demandePacks', 'dp')
                ->leftJoin('App\Entity\Avis', 'a', 'WITH', 'a.idPack = p.id')
                ->groupBy('e.id, e.nom')
                ->orderBy('total_sales', 'DESC')
                ->setMaxResults($limit)
                ->getQuery()
                ->getResult();
            
            return $result;
        } catch (\Exception $e) {
            error_log('Error in findByTopPerformance: ' . $e->getMessage());
            return [];
        }
    }
    
    public function findActiveEvents(): int
    {
        try {
            $now = new \DateTime();
            $count = $this->createQueryBuilder('e')
                ->select('COUNT(e.id)')
                ->where('e.dateDebut <= :now')
                ->andWhere('e.dateFin >= :now')
                ->setParameter('now', $now)
                ->getQuery()
                ->getSingleScalarResult();
                
            return $count ? (int)$count : 0;
        } catch (\Exception $e) {
            error_log('Error in findActiveEvents: ' . $e->getMessage());
            return 0;
        }
    }

    public function searchAndSortEvents(?string $searchTerm, string $sortBy): array
    {
        $qb = $this->createQueryBuilder('e');
    
        if ($searchTerm) {
            $qb->where('e.nom LIKE :searchTerm')
                ->orWhere('e.categorie IN (:categories)')
                ->setParameter('searchTerm', '%'.$searchTerm.'%')
                ->setParameter('categories', $this->getMatchingCategories($searchTerm));
        }
    
        // Add sorting
        switch ($sortBy) {
            case 'name_asc':
                $qb->orderBy('e.nom', 'ASC');
                break;
            case 'name_desc':
                $qb->orderBy('e.nom', 'DESC');
                break;
            case 'date_asc':
                $qb->orderBy('e.date', 'ASC');
                break;
            case 'date_desc':
                $qb->orderBy('e.date', 'DESC');
                break;
            case 'category_asc':
                $qb->orderBy('e.categorie', 'ASC');
                break;
            default:
                $qb->orderBy('e.date', 'DESC');
        }
    
        return $qb->getQuery()->getResult();
    }
    
    private function getMatchingCategories(string $searchTerm): array
    {
        $categories = [];
        foreach (CategorieEvent::cases() as $category) {
            if (stripos($category->value, $searchTerm) !== false) {
                $categories[] = $category;
            }
        }
        return $categories;
    }
}
