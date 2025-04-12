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
            ->where('l.name LIKE :searchTerm')
            ->orWhere('l.location LIKE :searchTerm')
            ->orWhere('l.ville LIKE :searchTerm')
            ->orWhere('l.category LIKE :searchTerm')
            ->setParameter('searchTerm', '%'.$searchTerm.'%')
            ->orderBy('l.name', 'ASC')
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
}
