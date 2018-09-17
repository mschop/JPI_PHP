<?php

namespace App;



use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;

class DbConnectionProvider implements DbConnectionProviderInterface
{
    protected $mainConfig;
    protected $connections = [];

    public function __construct($mainConfig)
    {
        $this->mainConfig = $mainConfig;
    }

    /**
     * @param string $tenant
     * @return Connection
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getDbal(string $tenant): Connection
    {
        if (!isset($this->connections[$tenant])) {
            $this->connections[$tenant] = $this->createDbal($tenant);
        }
        return $this->connections[$tenant];
    }

    /**
     * @param string $tenant
     * @return Connection
     * @throws \Doctrine\DBAL\DBALException
     */
    protected function createDbal(string $tenant): Connection
    {
        return DriverManager::getConnection([
            'driver' => 'sqlsrv',
            'dbname' => 'eazybusiness',
            'host' => $this->mainConfig['db']['host'],
            'port' => $this->mainConfig['db']['port'],
            'user' => $this->mainConfig['db']['user'],
            'password' => $this->mainConfig['db']['pass'],
        ]);
    }
}