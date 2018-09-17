<?php

namespace App;


use Doctrine\DBAL\Driver\Connection;

interface DbConnectionProviderInterface
{
    /**
     * @param string $tenant
     * @return Connection
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getDbal(string $tenant): Connection;
}