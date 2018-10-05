<?php

namespace App\Db;


use App\Db\Hydration\HydratorInterface;
use App\Db\Hydration\JsonHelperInterface;
use Doctrine\DBAL\Query\QueryBuilder;

class TreeQuery
{
    protected $hydrator;
    protected $jsonHelper;
    protected $qb;
    protected $subs = [];

    public function __construct(HydratorInterface $hydrator, JsonHelperInterface $jsonHelper, QueryBuilder $qb)
    {
        $this->hydrator = $hydrator;
        $this->jsonHelper = $jsonHelper;
        $this->qb = $qb;
    }

    public function add(string $entity, string $alias, string $subAlias, string $condition): TreeQuery
    {
        $qb = $this->qb->getConnection()->createQueryBuilder();
        $qb
            ->from($entity::TABLE_NAME, $subAlias)
            ->where($condition)
            ->select($this->hydrator->createSelect($entity))
        ;
        $treeQuery = new TreeQuery($this->hydrator, $this->jsonHelper, $qb);
        $this->subs[$alias] = $treeQuery;
        return $treeQuery;
    }

    public function getQueryBuilder(): QueryBuilder
    {
        return $this->qb;
    }

    public function build(): array
    {
        $parameters = $this->qb->getParameters();
        /** @var TreeQuery $sub */
        foreach ($this->subs as $alias => $sub) {
            list($sql, $subParameters) = $sub->build();
            $this->qb->addSelect("($sql) AS [$alias]");
            $parameters = array_merge($parameters, $subParameters);
        }
        return [$this->qb->getSQL() . ' FOR JSON PATH', $parameters];
    }

    public function execute(): array
    {
        list($sql, $parameter) = $this->build();
        $stmt = $this->qb->getConnection()->prepare($sql);
        $stmt->execute($parameter);
        return $this->jsonHelper->createResult($stmt);
    }
}