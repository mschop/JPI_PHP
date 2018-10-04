<?php

namespace App\Db;



use App\DatabaseSchema\tMandant;
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Doctrine\DBAL\DriverManager;
use function Functional\first;
use Psr\Log\LoggerInterface;

class ConnectionProvider implements ConnectionProviderInterface
{
    const DEFAULT_TENANT_DB_NAME = 'eazybusiness';

    protected $allTenants;
    protected $mainConfig;
    protected $logger;
    protected $cacheById = [];
    protected $cacheByDbName = [];

    /**
     * DbConnectionProvider constructor.
     * @param $mainConfig
     * @param LoggerInterface $logger
     * @throws ConnectionException
     */
    public function __construct($mainConfig, LoggerInterface $logger)
    {
        $this->mainConfig = $mainConfig;
        $this->logger = $logger;

        try {
            $mainConn = $this->createConn(static::DEFAULT_TENANT_DB_NAME);
        } catch(DBALException $ex) {
            $this->logger->critical(
                'Could not establish db connection to default tenant for unknown reason.',
                [
                    'exception' => [
                        'message' => $ex->getMessage(),
                        'trace' => $ex->getTraceAsString(),
                    ]
                ]
            );
            throw new ConnectionException('Unkown error when connecting to default db. Check logs for details');
        }

        $qb = $mainConn->createQueryBuilder();
        $qb
            ->from('tMandant')
            ->select([
                'kMandant',
                'cName',
                'cDB'
            ])
        ;
        $this->allTenants = $qb->execute()->fetchAll(\PDO::FETCH_ASSOC);
        $defaultTenant = first($this->allTenants, function($tenant) {
            return $tenant['cDB'] === static::DEFAULT_TENANT_DB_NAME;
        });
        $this->cacheById[$defaultTenant['kMandant']] = $mainConn;
        $this->cacheByDbName[$defaultTenant['cDB']] = $mainConn;
    }

    /**
     * @param int $id
     * @return Connection
     * @throws TenantNotFoundException
     * @throws ConnectionException
     */
    public function byTenantId(int $id): Connection
    {
        if (isset($this->cacheById[$id])) return $this->cacheById[$id];
        return $this->getConn($id, null);
    }

    /**
     * @param string $dbName
     * @return Connection
     * @throws ConnectionException
     * @throws TenantNotFoundException
     */
    public function byTenantDbName(string $dbName): Connection
    {
        if (isset($this->cacheByDbName[$dbName])) return $this->cacheByDbName[$dbName];
        return $this->getConn(null, $dbName);
    }

    /**
     * @return array
     */
    public function getAllTenants(): array
    {
        return $this->allTenants;
    }

    /**
     * @param int|null $tenantId
     * @param null|string $dbName
     * @return Connection
     * @throws TenantNotFoundException
     * @throws ConnectionException
     */
    protected function getConn(?int $tenantId, ?string $dbName): Connection
    {
        $tenant = first($this->allTenants, function($tenant) use ($tenantId, $dbName) {
            return $tenant['kMandant'] === $tenantId || $tenant['cDB'] === $dbName;
        });
        if (!$tenant) throw new TenantNotFoundException();
        try {
            $conn = $this->createConn($tenant['cDB']);
        } catch(DBALException $ex) {
            $msg = "Could not connect to tenant {$tenant['cName']} for unknown reason.";
            $this->logger->critical(
                "Could not connect to tenant {$tenant['cName']} for unknown reason.",
                [
                    'exception' => [
                        'message' => $ex->getMessage(),
                        'trace' => $ex->getTraceAsString(),
                    ]
                ]
            );
            throw new ConnectionException($msg);
        }

        $this->cacheById[$tenant['kMandant']] = $conn;
        $this->cacheByDbName[$tenant['cDB']] = $conn;
        return $conn;
    }

    /**
     * @param string $dbName
     * @return Connection
     * @throws \Doctrine\DBAL\DBALException
     */
    protected function createConn(string $dbName): Connection
    {
        return DriverManager::getConnection([
            'driver' => 'pdo_sqlsrv',
            'dbname' => $dbName,
            'host' => $this->mainConfig['db']['host'],
            'port' => $this->mainConfig['db']['port'],
            'user' => $this->mainConfig['db']['user'],
            'password' => $this->mainConfig['db']['pass'],
            'driverOptions' => [
                \PDO::ATTR_ERRMODE =>\PDO::ERRMODE_EXCEPTION,
                \PDO::SQLSRV_ATTR_FETCHES_NUMERIC_TYPE => true
            ]
        ]);
    }

}