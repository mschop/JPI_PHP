<?php

namespace App\Repository;


use App\DbConnectionProviderInterface;
use App\Dto\ProductDto;
use App\Hydration\HydratorInterface;
use App\Mapping\MapperInterface;
use App\Schema\tArtikel;
use App\Schema\tMandant;
use AutoMapperPlus\Exception\UnregisteredMappingException;

class ProductRepository
{
    protected $dbConnectionProvider;
    protected $hydrator;
    protected $mapper;

    public function __construct(
        DbConnectionProviderInterface $dbConnectionProvider,
        HydratorInterface $hydrator,
        MapperInterface $mapper
    ) {
        $this->dbConnectionProvider = $dbConnectionProvider;
        $this->hydrator = $hydrator;
        $this->mapper = $mapper;
    }

    /**
     * @param $tenantId
     * @param $productId
     * @param $join
     * @return ProductDto
     * @throws \App\DbConnectionException
     * @throws \App\TenantNotFoundException
     * @throws UnregisteredMappingException
     */
    public function get(int $tenantId, int $productId, array $join): ProductDto
    {
        $conn = $this->dbConnectionProvider->byTenantId($tenantId);
        $qb = $conn->createQueryBuilder();
        $qb
            ->from(tArtikel::TABLE_NAME, 'a')
            ->select($this->hydrator->createSelect(tArtikel::class, 'a'))
            ->where(
                $qb->expr()->eq('a.' . tArtikel::kArtikel, ':productId')
            )
            ->setParameter('productId', $productId)
        ;

        $result = $qb->execute()->fetch(\PDO::FETCH_ASSOC);
        $tArtikel = $this->hydrator->toObject($result, tArtikel::class, 'a');
        return $this->mapper->map($tArtikel, ProductDto::class);
    }
}