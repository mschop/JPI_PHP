<?php

namespace App\Db;


use Doctrine\DBAL\Connection;
use Psr\Log\LoggerInterface;

interface ConnectionProviderInterface
{
    /**
     * DbConnectionProvider constructor.
     * @param $mainConfig
     * @param LoggerInterface $logger
     * @throws ConnectionException
     */
    public function __construct($mainConfig, LoggerInterface $logger);

    /**
     * @param int $id
     * @return Connection
     * @throws TenantNotFoundException
     * @throws ConnectionException
     */
    public function byTenantId(int $id): Connection;

    /**
     * @param string $dbName
     * @return Connection
     * @throws ConnectionException
     * @throws TenantNotFoundException
     */
    public function byTenantDbName(string $dbName): Connection;

    /**
     * @return array
     */
    public function getAllTenants(): array;
}