<?php

namespace App\Repository;

use App\Entity\Size;
use App\Entity\SubCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

class ProductsSizeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Size::class);
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function saveSize(Size $size)
    {
        $entityManager = $this->getEntityManager();
        $entityManager->persist($size);
        $entityManager->flush();
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function removeSize(Size $size){
        $entityManager = $this->getEntityManager();
        $entityManager->remove($size);
        $entityManager->flush();
    }
}