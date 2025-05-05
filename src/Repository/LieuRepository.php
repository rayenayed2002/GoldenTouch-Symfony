<?php

namespace App\Repository;
use App\Entity\Lieu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Lieu>
 */
class LieuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lieu::class);
    }

  
    public function findByMonthlyReservations(): array
    {
        $qb = $this->createQueryBuilder('l')
            ->select(
                'COUNT(r.id) as count',
                'MONTH(r.date_reservation) as month',
                'YEAR(r.date_reservation) as year'
            )
            ->join('App\\Entity\\ReserverLieu', 'r', 'WITH', 'r.lieu_id = l.id')
            ->where('r.date_reservation >= :startDate')
            ->setParameter('startDate', new \DateTime('-6 months'))
            ->groupBy('year, month')
            ->orderBy('year', 'ASC')
            ->addOrderBy('month', 'ASC');

        return $qb->getQuery()->getResult();
    }

    public function getTopLieux(): array
    {
        $qb = $this->createQueryBuilder('l')
            ->select('l.name, COUNT(r.id) as reservations, AVG(l.capacity) as occupancy')
            ->leftJoin('l.reservations', 'r')
            ->groupBy('l.id')
            ->orderBy('reservations', 'DESC')
            ->setMaxResults(5);

        return $qb->getQuery()->getResult();
    }

    public function getCategoryDistribution(): array
    {
        $qb = $this->createQueryBuilder('l')
            ->select('l.category, COUNT(l.id) as count')
            ->groupBy('l.category')
            ->orderBy('count', 'DESC');

        return $qb->getQuery()->getResult();
    }

    public function findAllPaginated(int $page = 1, int $limit = 10, string $searchTerm = '', ?string $category = null, ?string $orderBy = null): array
    {
        $offset = ($page - 1) * $limit;
        $qb = $this->createQueryBuilder('l');

        if ($searchTerm) {
            $qb->andWhere('l.name LIKE :search OR l.description LIKE :search OR l.location LIKE :search')
               ->setParameter('search', '%' . $searchTerm . '%');
        }

        if ($category) {
            $qb->andWhere('l.category = :category')
               ->setParameter('category', $category);
        }

        switch ($orderBy) {
            case 'price_asc':
                $qb->orderBy('l.price', 'ASC');
                break;
            case 'price_desc':
                $qb->orderBy('l.price', 'DESC');
                break;
            case 'capacity_asc':
                $qb->orderBy('l.capacity', 'ASC');
                break;
            case 'capacity_desc':
                $qb->orderBy('l.capacity', 'DESC');
                break;
            default:
                $qb->orderBy('l.id', 'ASC');
        }

        $query = $qb->getQuery();

        $total = count($query->getResult());
        $pages = ceil($total / $limit);

        $results = $qb->setFirstResult($offset)
                      ->setMaxResults($limit)
                      ->getQuery()
                      ->getResult();

        return [
            'results' => $results,
            'total' => $total,
            'pages' => $pages,
            'currentPage' => $page,
            'limit' => $limit,
            'hasPreviousPage' => $page > 1,
            'hasNextPage' => $page < $pages
        ];
    }
    public function searchByName(string $searchTerm): array
    {
        return $this->createQueryBuilder('l')
            ->where('LOWER(l.name) LIKE LOWER(:searchTerm)')
            ->orWhere('LOWER(l.location) LIKE LOWER(:searchTerm)')
            ->orWhere('LOWER(l.ville) LIKE LOWER(:searchTerm)')
            ->orWhere('LOWER(l.category) LIKE LOWER(:searchTerm)')
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->orderBy('l.name', 'ASC')
            ->setMaxResults(10) // Limite les résultats
            ->getQuery()
            ->getResult();
    }

    public function findPopularLieux(int $limit = 3): array
    {
        return $this->createQueryBuilder('l')
            ->orderBy('l.price', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findNewLieux(int $limit = 3): array
    {
        return $this->createQueryBuilder('l')
            ->orderBy('l.id', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findByCategoryPaginated(string $category, int $page = 1, int $limit = 10): array
    {
        $offset = ($page - 1) * $limit;

        return $this->createQueryBuilder('l')
            ->where('l.category = :category')
            ->setParameter('category', $category)
            ->orderBy('l.id', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function searchLieux(string $searchTerm = '', string $location = '', string $category = '', ?float $minPrice = null, ?float $maxPrice = null, int $page = 1, int $limit = 10): array
    {
        $offset = ($page - 1) * $limit;
        $qb = $this->createQueryBuilder('l');

        if ($searchTerm) {
            $qb->andWhere('LOWER(l.name) LIKE LOWER(:searchTerm) OR LOWER(l.description) LIKE LOWER(:searchTerm)')
               ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }

        if ($location) {
            $qb->andWhere('LOWER(l.location) LIKE LOWER(:location) OR LOWER(l.ville) LIKE LOWER(:location)')
               ->setParameter('location', '%' . $location . '%');
        }

        if ($category) {
            $qb->andWhere('l.category = :category')
               ->setParameter('category', $category);
        }

        if ($minPrice !== null) {
            $qb->andWhere('l.price >= :minPrice')
               ->setParameter('minPrice', $minPrice);
        }

        if ($maxPrice !== null) {
            $qb->andWhere('l.price <= :maxPrice')
               ->setParameter('maxPrice', $maxPrice);
        }

        $total = count($qb->getQuery()->getResult());
        $lastPage = ceil($total / $limit);

        $results = $qb->orderBy('l.id', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();

        return [
            'results' => array_map(function($lieu) {
                return [
                    'id' => $lieu->getId(),
                    'name' => $lieu->getName(),
                    'description' => $lieu->getDescription(),
                    'location' => $lieu->getLocation(),
                    'ville' => $lieu->getVille(),
                    'category' => $lieu->getCategory(),
                    'price' => $lieu->getPrice(),
                    'capacity' => $lieu->getCapacity(),
                    'imageUrl' => $lieu->getImageUrl()
                ];
            }, $results),
            'currentPage' => $page,
            'lastPage' => $lastPage,
            'hasPreviousPage' => $page > 1,
            'hasNextPage' => $page < $lastPage
        ];
    }
    public function getLocationStats(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
            SELECT COUNT(*) as total_locations, SUM(capacity) as total_capacity, AVG(price) as avg_price
            FROM lieu
        ';
        $result = $conn->executeQuery($sql)->fetchAssociative();
        
        // Récupérer les lieux les plus chers
        $sqlMostExpensive = '
            SELECT id, name, price
            FROM lieu
            ORDER BY price DESC
            LIMIT 5
        ';
        $mostExpensive = $conn->executeQuery($sqlMostExpensive)->fetchAllAssociative();
        
        return [
            'total_locations' => (int)($result['total_locations'] ?? 0),
            'total_capacity' => (int)($result['total_capacity'] ?? 0),
            'avg_price' => (float)($result['avg_price'] ?? 0),
            'most_expensive' => $mostExpensive
        ];
    }

    public function getTrendingLieux(int $limit = 5): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
            SELECT l.*, 
                   COUNT(r.id) as reservation_count,
                   AVG(a.rating) as average_rating,
                   COUNT(DISTINCT r.user_id) as unique_users
            FROM lieu l
            LEFT JOIN reserver_lieu r ON l.id = r.lieu_id
            LEFT JOIN avis a ON l.id = a.lieu_id
            WHERE r.date_reservation >= DATE_SUB(NOW(), INTERVAL 30 DAY)
            GROUP BY l.id
            ORDER BY reservation_count DESC, average_rating DESC
            LIMIT :limit
        ';
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue('limit', $limit, \PDO::PARAM_INT);
        $result = $stmt->executeQuery()->fetchAllAssociative();
        
        return array_map(fn($row) => [
            'id' => $row['id'],
            'name' => $row['name'],
            'reservation_count' => (int)$row['reservation_count'],
            'average_rating' => round((float)$row['average_rating'], 1),
            'unique_users' => (int)$row['unique_users']
        ], $result);
    }

    public function getPriceTrends(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
            SELECT 
                DATE_FORMAT(r.date_reservation, "%Y-%m") as month,
                AVG(l.price) as average_price,
                MIN(l.price) as min_price,
                MAX(l.price) as max_price
            FROM reserver_lieu r
            JOIN lieu l ON r.lieu_id = l.id
            GROUP BY month
            ORDER BY month DESC
            LIMIT 6
        ';
        return $conn->executeQuery($sql)->fetchAllAssociative();
    }

    public function getCategoryTrends(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
            SELECT 
                l.category,
                COUNT(r.id) as reservation_count,
                AVG(l.price) as average_price,
                COUNT(DISTINCT r.user_id) as unique_users
            FROM lieu l
            LEFT JOIN reserver_lieu r ON l.id = r.lieu_id
            WHERE r.date_reservation >= DATE_SUB(NOW(), INTERVAL 30 DAY)
            GROUP BY l.category
            ORDER BY reservation_count DESC
        ';
        return $conn->executeQuery($sql)->fetchAllAssociative();
    }

    public function getMonthlyReservations(): array
{
    return $this->createQueryBuilder('r')
        ->select('MONTH(r.dateReservation) as month', 'COUNT(r.id) as total')
        ->where('r.dateReservation >= :startDate')
        ->setParameter('startDate', new \DateTime('-6 months'))
        ->groupBy('month')
        ->orderBy('month', 'ASC')
        ->getQuery()
        ->getResult();
}

public function getMonthlyRevenue(): array
{
    return $this->createQueryBuilder('r')
        ->select('MONTH(r.dateReservation) as month', 'SUM(l.price) as revenue')
        ->join('r.lieu', 'l')
        ->where('r.dateReservation >= :startDate')
        ->setParameter('startDate', new \DateTime('-6 months'))
        ->groupBy('month')
        ->orderBy('month', 'ASC')
        ->getQuery()
        ->getResult();
}
}
