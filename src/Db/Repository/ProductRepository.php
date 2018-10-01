<?php

namespace App\Db\Repository;


use App\Db\ConnectionProviderInterface;
use App\Db\Hydration\HydratorInterface;
use App\Db\Schema\tArtikel;
use App\Schema\Product;
use App\Mapping\MapperInterface;
use AutoMapperPlus\Exception\UnregisteredMappingException;

class ProductRepository
{
    const JOIN_DESCRIPTION = 'Description';
    const JOIN_BUY_INTERVAL = 'BuyInterval';

    protected $dbConnectionProvider;
    protected $hydrator;
    protected $mapper;
    protected $productDescriptionRepository;
    protected $productBuyIntervalRepository;

    public function __construct(
        ConnectionProviderInterface $dbConnectionProvider,
        HydratorInterface $hydrator,
        MapperInterface $mapper,
        ProductDescriptionRepository $productDescriptionRepository,
        ProductBuyIntervalRepository $productBuyIntervalRepository
    ) {
        $this->dbConnectionProvider = $dbConnectionProvider;
        $this->hydrator = $hydrator;
        $this->mapper = $mapper;
        $this->productDescriptionRepository = $productDescriptionRepository;
        $this->productBuyIntervalRepository = $productBuyIntervalRepository;
    }

    public function has(int $tenantId, int $productId): bool
    {
        $conn = $this->dbConnectionProvider->byTenantId($tenantId);
        $qb = $conn->createQueryBuilder();
        $result = $qb
            ->from(tArtikel::TABLE_NAME)
            ->where(
                $qb->expr()->eq(tArtikel::kArtikel, ':productId')
            )
            ->setParameter('productId', $productId)
            ->select(tArtikel::kArtikel)
            ->execute()
            ->fetchColumn();
        return !!$result;
    }

    /**
     * @param $tenantId
     * @param $productId
     * @param $join
     * @return Product
     * @throws \App\Db\ConnectionException
     * @throws \App\Db\TenantNotFoundException
     * @throws UnregisteredMappingException
     */
    public function get(int $tenantId, int $productId, array $join): Product
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
        /** @var Product $product */
        $product = $this->mapper->map($tArtikel, Product::class);
        if (in_array(static::JOIN_DESCRIPTION, $join)) {
            $product->descriptions = $this->productDescriptionRepository->getAll($tenantId, $productId);
        }
        if (in_array(static::JOIN_BUY_INTERVAL, $join)) {
            $product->buyIntervals = $this->productBuyIntervalRepository->getAllOfProduct($tenantId, $productId);
        }
        return $product;
    }
}