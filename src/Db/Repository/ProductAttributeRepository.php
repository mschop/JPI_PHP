<?php

namespace App\Db\Repository;


use App\Db\ConnectionProviderInterface;
use App\Db\Hydration\HydratorInterface;
use App\Db\Hydration\JsonHelperInterface;
use App\Db\Schema\tArtikelAttribut;
use App\Db\Schema\tArtikelAttributSprache;
use App\Db\Schema\tAttribut;
use App\Db\Schema\tAttributSprache;
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

    public function __construct(
        ConnectionProviderInterface $connectionProvider,
        MapperInterface $mapper,
        HydratorInterface $hydrator,
        JsonHelperInterface $jsonHelper
    ) {
        $this->connectionProvider = $connectionProvider;
        $this->mapper = $mapper;
        $this->hydrator = $hydrator;
        $this->jsonHelper = $jsonHelper;
    }

    /**
     * @param int $tenantId
     * @param int $productId
     * @return ProductAttribute[]
     */
    public function getAll(int $tenantId, int $productId): array
    {
        $conn = $this->connectionProvider->byTenantId($tenantId);
        $sql = "
            SELECT " . $this->hydrator->createSelect(tArtikelAttribut::class) . ",
                (
                    SELECT " . $this->hydrator->createSelect(tArtikelAttributSprache::class) . "
                    FROM " . tArtikelAttributSprache::TABLE_NAME . " AS pattr_trans
                    WHERE pattr_trans." . tArtikelAttributSprache::kArtikelAttribut . " = pattr." . tArtikelAttribut::kArtikelAttribut . "
                    FOR JSON PATH
                ) AS translations,
                (
                    SELECT " . $this->hydrator->createSelect(tAttribut::class) . ",
                        (
                            SELECT " . $this->hydrator->createSelect(tAttributSprache::class) . "
                            FROM " . tAttributSprache::TABLE_NAME . " AS attr_trans
                            WHERE attr_trans." . tAttributSprache::kAttribut . " = attr." . tAttribut::kAttribut . "
                            FOR JSON PATH
                        ) AS attributeTranslations
                    FROM " . tAttribut::TABLE_NAME . " as attr
                    WHERE attr." . tAttribut::kAttribut . " = pattr." . tArtikelAttribut::kAttribut . "
                    FOR JSON PATH
                ) AS attribute
            FROM tArtikelAttribut AS pattr
            WHERE kArtikel = :productId
            FOR JSON PATH        
        ";

        $stmt = $conn->prepare($sql);
        $stmt->execute(['productId' => $productId]);
        $data = $this->jsonHelper->createResult($stmt);

        return map($data, function($pattr) {
            $tArtikelAttribut = $this->hydrator->toObject($pattr, tArtikelAttribut::class);
            $productAttribute = new ProductAttribute();
            $this->mapper->mapToObject($tArtikelAttribut, $productAttribute);
            $productAttribute->translations = map($pattr['translations'], function($pattrTrans) {
                return $this->mapper->map($this->hydrator->toObject($pattrTrans, tArtikelAttributSprache::class), ProductAttributeTranslation::class);
            });
            $attr = $this->hydrator->toObject($pattr['attribute'][0], tAttribut::class);
            $productAttribute->attribute = new Attribute();
            $this->mapper->mapToObject($attr, $productAttribute->attribute);
            $productAttribute->attribute->translations = map($pattr['attribute'][0]['attributeTranslations'], function($attrTranslation) {
                return $this->mapper->map(
                    $this->hydrator->toObject($attrTranslation, tAttributSprache::class),
                    AttributeTranslation::class
                );
            });
            return $productAttribute;
        });
    }
}