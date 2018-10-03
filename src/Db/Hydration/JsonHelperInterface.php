<?php

namespace App\Db\Hydration;


use Doctrine\DBAL\Driver\Statement;

interface JsonHelperInterface
{
    /**
     * @return object|array
     */
    public function createResult(Statement $stmt);
}