<?php

namespace App\Db;


use App\Db\Hydration\HydratorInterface;
use App\Db\Hydration\JsonHelperInterface;
use Doctrine\DBAL\Query\QueryBuilder;

class TreeQueryFactory
{
    protected $hydrator;
    protected $jsonHelper;

    public function __construct(HydratorInterface $hydrator, JsonHelperInterface $jsonHelper)
    {
        $this->hydrator = $hydrator;
        $this->jsonHelper = $jsonHelper;
    }

    public function build(QueryBuilder $queryBuilder)
    {
        return new TreeQuery($this->hydrator, $this->jsonHelper, $queryBuilder);
    }
}