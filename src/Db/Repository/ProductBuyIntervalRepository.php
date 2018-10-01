<?php

namespace App\Db\Repository;


use App\Db\ConnectionProviderInterface;
use App\Db\Hydration\HydratorInterface;
use App\Db\Schema\tArtikelAbnahme;
use App\Mapping\MapperInterface;
use App\Schema\ProductBuyInterval;

class ProductBuyIntervalRepository
{
    protected $connectionProvider;
    protected $mapper;
    protected $hydrator;

    public function __construct(
        ConnectionProviderInterface $connectionProvider,
        MapperInterface $mapper,
        HydratorInterface $hydrator
    ) {
        $this->connectionProvider = $connectionProvider;
        $this->mapper = $mapper;
        $this->hydrator = $hydrator;
    }

    /**
     * @param int $tenantId
     * @param int $productId
     * @return ProductBuyInterval
     * @throws \App\Db\ConnectionException
     * @throws \App\Db\TenantNotFoundException
     */
    public function getAllOfProduct(int $tenantId, int $productId): array
    {
        $conn = $this->connectionProvider->byTenantId($tenantId);
        $qb = $conn->createQueryBuilder();
        $items = $qb
            ->from(tArtikelAbnahme::TABLE_NAME, 'taa')
            ->select($this->hydrator->createSelect(tArtikelAbnahme::class, 'taa'))
            ->where(
                $qb->expr()->eq('taa.' . tArtikelAbnahme::kArtikel, ':productId')
            )
            ->setParameter('productId', $productId)
            ->execute()
            ->fetchAll();
        $items = $this->hydrator->multipleToObject($items, tArtikelAbnahme::class, 'taa');
        return $this->mapper->mapMultiple($items, ProductBuyInterval::class);
    }
}