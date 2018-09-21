<?php

namespace App;


use Doctrine\DBAL\Connection;
use Psr\Log\LoggerInterface;

interface DbConnectionProviderInterface
{
    /**
     * DbConnectionProvider constructor.
     * @param $mainConfig
     * @param LoggerInterface $logger
     * @throws DbConnectionException
     */
    public function __construct($mainConfig, LoggerInterface $logger);

    /**
     * @param int $id
     * @return Connection
     * @throws TenantNotFoundException
     * @throws DbConnectionException
     */
    public function byTenantId(int $id): Connection;

    /**
     * @param string $dbName
     * @return Connection
     * @throws DbConnectionException
     * @throws TenantNotFoundException
     */
    public function byTenantDbName(string $dbName): Connection;

    /**
     * @return array
     */
    public function getAllTenants(): array;
}