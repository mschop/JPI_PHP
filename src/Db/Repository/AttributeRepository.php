<?php

namespace App\Db\Repository;


use App\Db\ConnectionProviderInterface;
use App\Db\Hydration\HydratorInterface;
use App\Db\Hydration\JsonHelperInterface;
use App\Db\Schema\tAttribut;
use App\Db\Schema\tAttributShop;
use App\Db\Schema\tAttributSprache;
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
     * @var int $tenantId
     * @var AttributeRelationType $attributeRelationType
     * @return Attribute[]
     * @throws
     */
    public function getAttributes(int $tenantId, AttributeRelationType $attributeRelationType): array
    {
        $conn = $this->connectionProvider->byTenantId($tenantId);
        $query = "
            SELECT " . $this->hydrator->createSelect(tAttribut::class) . ",
              (
                SELECT " . $this->hydrator->createSelect(tAttributSprache::class) . "
                FROM " . tAttributSprache::TABLE_NAME . " AS attrLang
                WHERE attr." . tAttribut::kAttribut . " = attrLang." . tAttributSprache::kAttribut . "
                FOR JSON PATH
              ) AS translations,
              (
                SELECT " . $this->hydrator->createSelect(tAttributShop::class) . "
                FROM . " . tAttributShop::TABLE_NAME . " AS attrShop
                WHERE attr." . tAttribut::kAttribut . " = attrShop." . tAttributShop::kAttribut . "
                FOR JSON PATH
              ) AS shops
            FROM " . tAttribut::TABLE_NAME . " AS attr
            WHERE attr." . tAttribut::nBezugstyp . " = ?
            FOR JSON PATH 
        ";
        $stmt = $conn->prepare($query);
        $stmt->execute([$attributeRelationType->getValue()]);
        $data = $this->jsonHelper->createResult($stmt);
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