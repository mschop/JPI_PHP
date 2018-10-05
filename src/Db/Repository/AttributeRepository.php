<?php

namespace App\Db\Repository;


use App\Db\ConnectionProviderInterface;
use App\Db\Hydration\HydratorInterface;
use App\Db\Hydration\JsonHelperInterface;
use App\Db\Schema\tAttribut;
use App\Db\Schema\tAttributShop;
use App\Db\Schema\tAttributSprache;
use App\Db\TreeQueryFactory;
use App\Enums\AttributeRelationType;
use App\Mapping\MapperInterface;
use App\Schema\Attribute;
use App\Schema\AttributeShop;
use App\Schema\AttributeTranslation;
use function Functional\map;

class AttributeRepository
{
    protected $connectionProvider;
    protected $mapper;
    protected $hydrator;
    protected $jsonHelper;
    protected $treeQueryFactory;

    public function __construct(
        ConnectionProviderInterface $connectionProvider,
        MapperInterface $mapper,
        HydratorInterface $hydrator,
        JsonHelperInterface $jsonHelper,
        TreeQueryFactory $treeQueryFactory
    ) {
        $this->connectionProvider = $connectionProvider;
        $this->mapper = $mapper;
        $this->hydrator = $hydrator;
        $this->jsonHelper = $jsonHelper;
        $this->treeQueryFactory = $treeQueryFactory;
    }

    /**
     * @var int $tenantId
     * @var AttributeRelationType $attributeRelationType
     * @return Attribute[]
     * @throws
     */
    public function getAttributes(int $tenantId, AttributeRelationType $attributeRelationType): array
    {
        $conn = $this->connectionProvider->byTenantId($tenantId);

        $tAttribut_kAttribut = tAttribut::kAttribut;
        $tAttributSprache_kAttribut = tAttributSprache::kAttribut;
        $tAttributShop_kAttribut = tAttributShop::kAttribut;

        $qb = $conn->createQueryBuilder();
        $qb
            ->from(tAttribut::TABLE_NAME, 'attr')
            ->select($this->hydrator->createSelect(tAttribut::class))
            ->where(
                $qb->expr()->eq('attr.' . tAttribut::nBezugstyp, ':relationType')
            )
            ->setParameter('relationType', $attributeRelationType->getValue())
        ;

        $treeQuery = $this->treeQueryFactory->build($qb);
        $treeQuery->add(
            tAttributSprache::class,
            'translations',
            'sub_translations',
            "sub_translations.$tAttributSprache_kAttribut = attr.$tAttribut_kAttribut"
        );
        $treeQuery->add(
            tAttributShop::class,
            'shops',
            'sub_shops',
            "sub_shops.$tAttributShop_kAttribut = attr.$tAttribut_kAttribut"
        );

        $data = $treeQuery->execute();
        return map($data, function($row) {
            $tAttribut = $this->hydrator->toObject($row, tAttribut::class);
            $attr = new Attribute();
            $this->mapper->mapToObject($tAttribut, $attr);
            $attr->translations = $this->mapper->mapMultiple(
                $this->hydrator->multipleToObject($row['translations'], tAttributSprache::class),
                AttributeTranslation::class
            );
            if (isset($row['shops'])) {
                $attr->shops = $this->mapper->mapMultiple(
                    $this->hydrator->multipleToObject($row['shops'], tAttributShop::class),
                    AttributeShop::class
                );
            }
            return $attr;
        });
    }
}