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

    public function findAllPaginated(int $page = 1, int $limit = 10): array
    {
        $offset = ($page - 1) * $limit;

        return $this->createQueryBuilder('l')
            ->orderBy('l.id', 'ASC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
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

    // Statistiques globales
    $stats = $conn->executeQuery('
        SELECT 
            COUNT(*) as total_locations,
            AVG(price) as avg_price,
            SUM(capacity) as total_capacity
        FROM lieu
    ')->fetchAssociative();

    // Répartition par catégorie
    $stats['by_category'] = $conn->executeQuery('
        SELECT category, COUNT(*) as count 
        FROM lieu 
        GROUP BY category
        ORDER BY count DESC
    ')->fetchAllAssociative();

    // Top 5 des lieux les plus chers
    $stats['most_expensive'] = $conn->executeQuery('
        SELECT name, price 
        FROM lieu 
        ORDER BY price DESC 
        LIMIT 5
    ')->fetchAllAssociative();

    return $stats;
}

public function getMonthlyStats(): array
{
    return $this->getEntityManager()->getConnection()->executeQuery('
        SELECT 
            DATE_FORMAT(CURRENT_DATE(), "%Y-%m") as month,
            COUNT(*) as locations_added,
            (SELECT COUNT(*) FROM lieu WHERE DATE_FORMAT(created_at, "%Y-%m") = DATE_FORMAT(DATE_SUB(CURRENT_DATE(), INTERVAL 1 MONTH), "%Y-%m")) as prev_month_count,
            (SELECT AVG(price) FROM lieu) as avg_price
        FROM lieu
        WHERE DATE_FORMAT(created_at, "%Y-%m") = DATE_FORMAT(CURRENT_DATE(), "%Y-%m")
    ')->fetchAssociative();
}

}
