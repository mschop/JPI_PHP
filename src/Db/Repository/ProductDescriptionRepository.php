<?php

namespace App\Db\Repository;


use App\Db\ConnectionProviderInterface;
use App\Db\Hydration\HydratorInterface;
use App\Db\Schema\tArtikelBeschreibung;
use App\Schema\ProductDescription;
use App\Mapping\MapperInterface;
use function Functional\map;

class ProductDescriptionRepository
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
     * @return ProductDescription[]
     * @throws
     */
    public function getAll(int $tenantId, int $productId): array
    {
        $conn = $this->connectionProvider->byTenantId($tenantId);
        $qb = $conn->createQueryBuilder();
        $qb
            ->from(tArtikelBeschreibung::TABLE_NAME, 'tab')
            ->select($this->hydrator->createSelect(tArtikelBeschreibung::class, 'tab'))
            ->where(
                $qb->expr()->eq(tArtikelBeschreibung::kArtikel, ':productId')
            )
            ->setParameter('productId', $productId)
        ;

        $all = $qb->execute()->fetchAll(\PDO::FETCH_ASSOC);
        $all = map($all, function(array $row) {
            return $this->hydrator->toObject($row, tArtikelBeschreibung::class, 'tab');
        });
        return $this->mapper->mapMultiple($all, ProductDescription::class);
    }
}