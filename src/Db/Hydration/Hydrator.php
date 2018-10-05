<?php

namespace App\Db\Hydration;


use function Functional\map;

class Hydrator implements HydratorInterface
{
    /**
     * @inheritdoc
     */
    public function toObject(array $assocArr, string $targetEntity, string $alias = null): object
    {
        $object = new $targetEntity();
        foreach($targetEntity::COLUMN_NAMES as $columnName) {
            $name = $alias ? "{$alias}_{$columnName}" : $columnName;
            if (isset($assocArr[$name])) {
                $object->$columnName = $assocArr[$name];
            }
        }
        return $object;
    }

    /**
     * @inheritdoc
     */
    public function multipleToObject(array $arrOfAssocArr, string $targetEntity, string $alias = null): array
    {
        return map($arrOfAssocArr, function($item) use ($targetEntity, $alias) {
            return $this->toObject($item, $targetEntity, $alias);
        });
    }

    /**
     * @inheritdoc
     */
    public function createSelect(string $targetEntity, string $alias = null): string
    {
        $selects = [];
        foreach($targetEntity::COLUMN_NAMES as $columnName) {
            $selects[] = $alias
                ? "[$alias].[$columnName] AS [{$alias}_{$columnName}]"
                : "[$columnName]"
            ;
        }
        return implode(', ', $selects);
    }
}