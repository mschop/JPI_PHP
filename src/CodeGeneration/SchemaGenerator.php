<?php

namespace App\CodeGeneration;


use App\PathHelperInteface;
use Eloquent\Pathogen\PathInterface;
use function Functional\filter;
use Nette\PhpGenerator\PhpFile;
use OpenApi\Annotations\Items;
use OpenApi\Annotations\Property;
use OpenApi\Annotations\Schema;

class SchemaGenerator
{
    protected $pathHelper;
    protected $declarationProvider;

    public function __construct(PathHelperInteface $pathHelper, DeclarationProvider $declarationProvider)
    {
        $this->pathHelper = $pathHelper;
        $this->declarationProvider = $declarationProvider;
    }

    public function generate()
    {
        $this->emptyDirectory();
        $path = $this->getTargetDirectory();
        $allRelations = $this->declarationProvider->getRelations();

        foreach ($this->declarationProvider->getDeclaration() as $dbSchemaClass => $definition) {
            $phpFile = new PhpFile();
            $class = $phpFile
                ->addNamespace('App\\Schema')
                ->addUse(Schema::class, 'OASchema')
                ->addUse(Property::class, 'OAProperty')
                ->addUse(Items::class, 'OAItems')
                ->addClass($definition[DeclarationProvider::DEF_TARGET_CLASS])
            ;
            $class->addComment('@OASchema()');
            foreach ($definition[DeclarationProvider::DEF_FIELDS] as $dbColumnName => $targetColumn) {
                $dbColumnDefinition = $dbSchemaClass::COLUMN_DEFINITIONS[$dbColumnName];
                $targetColumnName = is_array($targetColumn)
                    ? $targetColumn[DeclarationProvider::DEF_COLUMN_NAME]
                    : $targetColumn
                ;
                $transition = is_array($targetColumn)
                    ? Transition::byValue($targetColumn[DeclarationProvider::DEF_TRANSITIONS])
                    : null
                ;
                $class
                    ->addProperty($targetColumnName)
                    ->addComment('@var ' . $this->determineDtoPhpType($dbColumnDefinition, $targetColumnName, $transition))
                    ->addComment(
                        $this->generateOaProperty(
                            $this->mapOAType(
                                $this->determineDtoPhpType($dbColumnDefinition, $targetColumnName, $transition)
                            )
                        )
                    )
                ;
            }

            // generate relations
            $currentRelations = $allRelations[$definition[DeclarationProvider::DEF_TARGET_CLASS]] ?? [];
            foreach ($currentRelations as $relation) {
                $class
                    ->addProperty($relation[DeclarationProvider::REL_COLUMN])
                    ->addComment('@var array|null')
                    ->addComment($this->generateOaRelationProperty($relation))
                ;
            }

            file_put_contents($path->joinAtoms($definition[DeclarationProvider::DEF_TARGET_CLASS]) . '.php', (string)$phpFile);
        }
    }

    protected function getTargetDirectory(): PathInterface
    {
        return $this->pathHelper->getRootDir()->joinAtoms('src')->joinAtoms('Schema');
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

    protected function generateOaProperty(string $type): string
    {
        $string = '@OAProperty(';
        $string .= 'type="' . $type . '"';
        if ($type === 'array') $string .= ', @OAItems(type="string")';
        $string .= ')';
        return $string;
    }

    protected function generateOaRelationProperty(array $definition): string
    {
        $string = '@OAProperty(';
        if ($definition[DeclarationProvider::REL_TYPE] === DeclarationProvider::REL_TYPE_ONE_TO_ONE) {
            $string .= 'ref="#/components/schemas/' . $definition[DeclarationProvider::REL_COLUMN] . '"';
        } else {
            $string .= 'type="array", ';
            $string .= '@OAItems(ref="#/components/schemas/' . $definition[DeclarationProvider::REL_ENTITY] . '")';
        }
        $string .= ')';
        return $string;
    }

    protected function determineDtoPhpType(array $dbColumnDefinition, string $columnName, ?Transition $transition): string
    {
        if ($transition) {
            switch ($transition->getValue()) {
                case Transition::BOOL_YN:
                case Transition::BOOL_BIT:
                    return 'bool';
                case Transition::VALUE_LIST_PIPE:
                    return 'array';
                default:
                    throw new \Exception('Not Implented');
            }
        } else {
            return $dbColumnDefinition[DatabaseSchemaGenerator::COLUMN_DEFINITION_PHPTYPE];
        }
    }

    protected function mapOAType(string $phpType): string
    {
        switch ($phpType) {
            case 'string':
            case 'resource': // resources will be returned as BASE64 encoded string
                return 'string';
            case 'int':
            case 'integer':
                return 'integer';
            case 'float':
            case 'double':
                return 'number';
            case 'boolean':
            case 'bool':
                return 'boolean';
            case 'array':
                return 'array';
            default:
                throw new \Exception('Unmapped PHP data type');
        }
    }


}