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

        $translationsQB = $conn->createQueryBuilder();
        $translationsSql = $translationsQB
            ->from(tAttributSprache::TABLE_NAME, 'sub_translations')
            ->select($this->hydrator->createSelect(tAttributSprache::class))
            ->where(
                $translationsQB->expr()->eq(
                    'attr.' . tAttribut::kAttribut,
                    'sub_translations.' . tAttributSprache::kAttribut
                )
            )
            ->getSQL()
        ;

        $qb = $conn->createQueryBuilder();
        $qb->select();

        $shopsQB = $conn->createQueryBuilder();
        $shopsSql = $shopsQB
            ->from(tAttributShop::TABLE_NAME, 'sub_shops')
            ->select($this->hydrator->createSelect(tAttributShop::class))
            ->where(
                $shopsQB->expr()->eq(
                    'attr.' . tAttribut::kAttribut,
                    'sub_shops' . tAttributShop::kAttribut
                )
            )
            ->getSQL()
        ;

        $qb = $conn->createQueryBuilder();
        $stmt = $qb
            ->from(tAttribut::TABLE_NAME, 'attr')
            ->select($this->hydrator->createSelect(tAttribut::class))
            ->addSelect("($translationsSql FOR JSON PATH) as translations")
            ->addSelect("($shopsSql FOR JSON PATH) as shops")
            ->where(
                $qb->expr()->eq('attr.' . tAttribut::kAttribut, ':relationType')
            )
            ->setParameters(
                array_merge(
                    ['relationType' => $attributeRelationType->getValue()],
                    $shopsQB->getParameters(),
                    $translationsQB->getParameters()
                )
            )
            ->execute()
        ;

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