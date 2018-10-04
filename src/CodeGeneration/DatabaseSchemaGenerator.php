<?php

namespace App\CodeGeneration;


use App\Db\ConnectionProviderInterface;
use App\PathHelperInteface;
use Eloquent\Pathogen\PathInterface;
use function Functional\filter;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\Property;

class DatabaseSchemaGenerator
{
    const COLUMN_DEFINITION_TYPE = 'type';
    const COLUMN_DEFINITION_PHPTYPE = 'phpType';
    const COLUMN_DEFINITION_ISNULLABLE = 'isNullable';
    const COLUMN_DEFINITION_HASDEFAULT = 'hasDefault';
    const COLUMN_DEFINITION_CHARACTERMAXIMUMLENGTH = 'characterMaximumLength';
    const COLUMN_DEFINITION_CHARACTERSETNAME = 'characterSetName';

    protected $pathHelper;
    protected $conn;

    public function __construct(PathHelperInteface $pathHelper, ConnectionProviderInterface $connectionProvider)
    {
        $this->pathHelper = $pathHelper;
        $this->conn = $connectionProvider->byTenantDbName('eazybusiness');
    }


    public function generate(): void
    {
        $this->ensureDirectory();
        $this->emptyDirectory();
        $allTables = $this->getAllTables();

        $stmt = $this->conn->prepare("
            SELECT
              COLUMN_NAME,
              DATA_TYPE,
              IS_NULLABLE,
              COLUMN_DEFAULT,
              CHARACTER_MAXIMUM_LENGTH,
              CHARACTER_SET_NAME
            FROM eazybusiness.INFORMATION_SCHEMA.COLUMNS
            WHERE TABLE_NAME = ?
        ");
        foreach ($allTables as $table) {
            $phpFile = new PhpFile();
            $namespace = $phpFile->addNamespace('App\\Db\\Schema');
            $class = $namespace->addClass($table);
            $stmt->execute([$table]);
            $columns = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            $class->addConstant('TABLE_NAME', $table);
            $allColumnNames = [];
            $definitions = [];
            foreach ($columns as $column) {
                $name = $column['COLUMN_NAME'];
                $type = $column['DATA_TYPE'];
                $class->addConstant($name, $name);
                $class->addMember(
                    (new Property($name))
                        ->addComment($this->generateMemberComment($name, $this->mapType($type)))
                );
                $allColumnNames[] = $name;
                $definitions[$name] = $this->createColumnDetails($column);
            }
            $class->addConstant('COLUMN_NAMES', $allColumnNames);
            $class->addConstant('COLUMN_DEFINITIONS', $definitions);
            file_put_contents($this->getTargetDirectory()->joinAtoms($table . '.php')->string(), (string)$phpFile);
        }
    }

    protected function ensureDirectory()
    {
        if (!is_dir($this->getTargetDirectory())) {
            mkdir($this->getTargetDirectory());
        }
    }

    protected function emptyDirectory()
    {
        $targetDir = $this->getTargetDirectory();
        $files = filter(scandir($targetDir), function($file) {
            return $file !== '.' && $file !== '..';
        });
        foreach($files as $file) {
            unlink($targetDir->joinAtoms($file));
        }
    }

    protected function getTargetDirectory(): PathInterface
    {
        return $this->pathHelper->getRootDir()->joinAtoms('src')->joinAtoms('Db')->joinAtoms('Schema');
    }

    /**
     * @return string[]
     */
    protected function getAllTables(): array
    {
        return $this->conn->query("
            SELECT TABLE_NAME
            FROM INFORMATION_SCHEMA.TABLES
            WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_CATALOG='eazybusiness'
        ")->fetchAll(\PDO::FETCH_COLUMN);
    }

    protected function generateMemberComment(string $name, string $type): string
    {
        return "@var $type $name";
    }

    protected function mapType(string $type): string
    {
        switch($type) {
            case 'int':
            case 'tinyint':
            case 'bigint':
            case 'smallint':
                return 'int';
            case 'decimal':
            case 'varchar':
            case 'datetime':
            case 'char':
            case 'uniqueidentifier':
                return 'string';
            case 'bit':
                return 'boolean';
            case 'image':
            case 'nvarchar':
            case 'text':
            case 'udt':
            case 'varbinary':
            case 'xml':
            case 'binary':
            case 'nchar':
                return 'resource';
            default:
                throw new \Exception('Not implemented ' . $type);
        }
    }

    protected function createColumnDetails($column)
    {
        return [
            static::COLUMN_DEFINITION_TYPE => $column['DATA_TYPE'],
            static::COLUMN_DEFINITION_PHPTYPE => $this->mapType($column['DATA_TYPE']),
            static::COLUMN_DEFINITION_ISNULLABLE => $column['IS_NULLABLE'] === 'YES',
            static::COLUMN_DEFINITION_HASDEFAULT => $column['COLUMN_DEFAULT'] !== null,
            static::COLUMN_DEFINITION_CHARACTERMAXIMUMLENGTH => $column['CHARACTER_MAXIMUM_LENGTH'],
            static::COLUMN_DEFINITION_CHARACTERSETNAME => $column['CHARACTER_SET_NAME'],
        ];
    }
}