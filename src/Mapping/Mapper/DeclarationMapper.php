<?php

namespace App\Mapping\Mapper;


use App\CodeGeneration\DeclarationProvider;
use App\CodeGeneration\Transition;
use App\Mapping\MapperConfiguratorInterface;
use AutoMapperPlus\Configuration\AutoMapperConfigInterface;

class DeclarationMapper implements MapperConfiguratorInterface
{
    protected $declarationProvider;

    public function __construct(DeclarationProvider $declarationProvider)
    {
        $this->declarationProvider = $declarationProvider;
    }


    public function configure(AutoMapperConfigInterface $config)
    {
        $declaration = $this->declarationProvider->getDeclaration();
        foreach ($declaration as $dbEntity => $definition) {
            $targetClass = 'App\\Schema\\' . $definition[DeclarationProvider::DEF_TARGET_CLASS];
            $mapping = $config->registerMapping($dbEntity, $targetClass);
            $mappingReverse = $config->registerMapping($targetClass, $dbEntity);
            foreach ($definition[DeclarationProvider::DEF_FIELDS] as $from => $to) {
                $toName = is_array($to) ? $to[DeclarationProvider::DEF_COLUMN_NAME] : $to;
                $transition = is_array($to) ? $to[DeclarationProvider::DEF_TRANSITIONS] : null;
                $mapping->forMember($toName, function($source) use ($from, $transition) {
                    switch ($transition) {
                        case Transition::BOOL_YN:
                            return $this->ynToBool($source->$from);
                        case Transition::BOOL_BIT:
                            return $this->toBool($source->$from);
                        case Transition::VALUE_LIST_PIPE:
                            return $this->valueListPipeToArray($source->$from);
                        default:
                            return $source->$from;
                    }
                });
                $mappingReverse->forMember($from, function($source) use ($to, $transition) {
                    switch ($transition) {
                        case Transition::BOOL_YN:
                            return $this->boolToYN($source->$to);
                        case Transition::BOOL_BIT:
                            return $this->boolToBit($source->$to);
                        case Transition::VALUE_LIST_PIPE:
                            return $this->arrayToValueListPipe($source->$to);
                        default:
                            return $source->$to;
                    }
                });
            }
        }
    }

    protected function ynToBool(string $value): bool
    {
        $value = strtolower($value);
        switch ($value) {
            case 'y':
            case 'j':
                return true;
            case 'n':
                return false;
            default:
                throw new \InvalidArgumentException('Invalid bool type');
        }
    }

    protected function boolToYN(bool $value): string
    {
        return $value ? 'Y' : 'N';
    }

    protected function toBool(int $value): bool
    {
        return !!$value;
    }

    protected function boolToBit(bool $value): int
    {
        return $value ? 1 : 0;
    }

    protected function valueListPipeToArray(?string $valueList): ?array
    {
        if ($valueList === null || empty($valueList)) return null;
        return explode('|', $valueList);
    }

    protected function arrayToValueListPipe(array $values): string
    {
        return implode('|', $values);
    }
}