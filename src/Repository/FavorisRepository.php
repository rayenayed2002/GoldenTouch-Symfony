<?php

namespace App\Repository;

use App\Entity\Favoris;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class FavorisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Favoris::class);
    }

    public function findByUser($userId)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.user = :userId')
            ->setParameter('userId', $userId)
            ->orderBy('f.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findOneByUserAndLieu($userId, $lieuId)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.user = :userId')
            ->andWhere('f.lieu = :lieuId')
            ->setParameter('userId', $userId)
            ->setParameter('lieuId', $lieuId)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function countByLieu($lieuId)
    {
        return $this->createQueryBuilder('f')
            ->select('COUNT(f.id)')
            ->andWhere('f.lieu = :lieuId')
            ->setParameter('lieuId', $lieuId)
            ->getQuery()
            ->getSingleScalarResult();
    }
} 