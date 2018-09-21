<?php

namespace App\Hydration;


class MssqlHydrator implements HydratorInterface
{
    public function toObject(array $assocArr, string $targetEntity, string $alias): object
    {
        $object = new $targetEntity();
        foreach($targetEntity::COLUMN_NAMES as $columnName) {
            $object->$columnName = $assocArr[$alias . '_' . $columnName];
        }
        return $object;
    }

    public function createSelect(string $targetEntity, string $alias): string
    {
        $selects = [];
        foreach($targetEntity::COLUMN_NAMES as $columnName) {
            $selects[] = "[$alias].[$columnName] AS [{$alias}_{$columnName}]";
        }
        return implode(', ', $selects);
    }
}