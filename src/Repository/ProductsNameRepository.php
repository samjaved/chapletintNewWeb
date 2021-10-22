<?php

namespace App\Repository;

use App\Entity\ProductName;
use App\Entity\Size;
use App\Entity\SubCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

class ProductsNameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductName::class);
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function saveName(ProductName $productName)
    {
        $entityManager = $this->getEntityManager();
        $entityManager->persist($productName);
        $entityManager->flush();
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function removeName(ProductName $productName){
        $entityManager = $this->getEntityManager();
        $entityManager->remove($productName);
        $entityManager->flush();
    }
}