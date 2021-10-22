<?php

namespace App\Repository;

use App\Entity\ProductItemCode;
use App\Entity\ProductName;
use App\Entity\Size;
use App\Entity\SubCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

class ProductsItemCodesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductItemCode::class);
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function saveCode(ProductItemCode $productItemCode)
    {
        $entityManager = $this->getEntityManager();
        $entityManager->persist($productItemCode);
        $entityManager->flush();
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function removeCode(ProductItemCode $productItemCode){
        $entityManager = $this->getEntityManager();
        $entityManager->remove($productItemCode);
        $entityManager->flush();
    }
}