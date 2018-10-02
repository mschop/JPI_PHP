<?php

namespace App\Db\Repository;


use App\Db\ConnectionProviderInterface;
use App\Db\Hydration\HydratorInterface;
use App\Db\Schema\tAttributSprache;
use App\Mapping\MapperInterface;
use App\Schema\AttributeTranslation;

class AttributeTranslationRepository
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
     * @return AttributeTranslation[]
     * @throws
     */
    public function getAll(int $tenantId): array
    {
        $conn = $this->connectionProvider->byTenantId($tenantId);
        $result = $conn
            ->createQueryBuilder()
            ->from(tAttributSprache::TABLE_NAME, 'tas')
            ->select($this->hydrator->createSelect(tAttributSprache::class, 'tas'))
            ->execute()
            ->fetchAll();
        $result = $this->hydrator->multipleToObject($result, tAttributSprache::class, 'tas');
        return $this->mapper->mapMultiple($result, AttributeTranslation::class);
    }
}