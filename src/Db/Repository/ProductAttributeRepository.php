<?php

namespace App\Db\Repository;


use App\Db\ConnectionProviderInterface;
use App\Db\Hydration\HydratorInterface;
use App\Db\Hydration\JsonHelperInterface;
use App\Db\Schema\tArtikelAttribut;
use App\Db\Schema\tArtikelAttributSprache;
use App\Db\Schema\tAttribut;
use App\Db\Schema\tAttributSprache;
use App\Db\TreeQueryFactory;
use App\Mapping\MapperInterface;
use App\Schema\Attribute;
use App\Schema\AttributeTranslation;
use App\Schema\ProductAttribute;
use App\Schema\ProductAttributeTranslation;
use function Functional\map;

class ProductAttributeRepository
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
     * @param int $tenantId
     * @param int $productId
     * @return ProductAttribute[]
     */
    public function getAll(int $tenantId, int $productId): array
    {
        $tArtikelAttribut_kArtikelAttribut = tArtikelAttribut::kArtikelAttribut;
        $tArtikelAttribut_kAttribut = tArtikelAttribut::kAttribut;
        $tArtikelAttributSprache_kArtikelAttribut = tArtikelAttributSprache::kArtikelAttribut;
        $tAttribut_kAttribut = tAttribut::kAttribut;
        $tAttributSprache_kAttribut = tAttributSprache::kAttribut;

        $conn = $this->connectionProvider->byTenantId($tenantId);
        $qb = $conn->createQueryBuilder();
        $qb
            ->from(tArtikelAttribut::TABLE_NAME, 'pattr')
            ->select($this->hydrator->createSelect(tArtikelAttribut::class))
            ->where(
                $qb->expr()->eq(tArtikelAttribut::kArtikel, ':productId')
            )
            ->setParameter('productId', $productId)
        ;

        $treeQuery = $this->treeQueryFactory->build($qb);
        $treeQuery->add(
            tArtikelAttributSprache::class,
            'translations',
            'translations_sub',
            "pattr.$tArtikelAttribut_kArtikelAttribut = translations_sub.$tArtikelAttributSprache_kArtikelAttribut"
        );
        $attrSub = $treeQuery->add(
            tAttribut::class,
            'attr',
            'attr_sub',
            "pattr.$tArtikelAttribut_kAttribut = attr_sub.$tAttribut_kAttribut"
        );
        $attrSub->add(
            tAttributSprache::class,
            'attrTrans',
            'attrTrans_sub',
            "attr_sub.$tAttribut_kAttribut = attrTrans_sub.$tAttributSprache_kAttribut"
        );

        $data = $treeQuery->execute();

        return map($data, function($pattr) {
            $tArtikelAttribut = $this->hydrator->toObject($pattr, tArtikelAttribut::class);
            $productAttribute = new ProductAttribute();
            $this->mapper->mapToObject($tArtikelAttribut, $productAttribute);
            $productAttribute->translations = map($pattr['translations'], function($pattrTrans) {
                return $this->mapper->map($this->hydrator->toObject($pattrTrans, tArtikelAttributSprache::class), ProductAttributeTranslation::class);
            });
            $attr = $this->hydrator->toObject($pattr['attr'][0], tAttribut::class);
            $productAttribute->attribute = new Attribute();
            $this->mapper->mapToObject($attr, $productAttribute->attribute);
            $productAttribute->attribute->translations = map($pattr['attr'][0]['attrTrans'], function($attrTranslation) {
                return $this->mapper->map(
                    $this->hydrator->toObject($attrTranslation, tAttributSprache::class),
                    AttributeTranslation::class
                );
            });
            return $productAttribute;
        });
    }
}