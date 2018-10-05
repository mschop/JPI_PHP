<?php

namespace App\Db\Hydration;


use Doctrine\DBAL\Driver\Statement;

interface JsonHelperInterface
{
    /**
     * @param Statement $stmt
     * @return object|array
     */
    public function createResult(Statement $stmt);
}