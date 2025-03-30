<?php

namespace App\Repository;

use App\Entity\Pack;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pack::class);
    }

    public function findAvailablePacks(): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.description IS NOT NULL')
            ->andWhere('p.description != :empty')
            ->setParameter('empty', '')
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByCategory(string $category): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.categorie = :category')
            ->setParameter('category', $category)
            ->getQuery()
            ->getResult();
    }

    public function findTrendingPacks(int $limit = 3): array
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.capacity', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}