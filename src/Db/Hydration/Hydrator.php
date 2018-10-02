<?php

namespace App\Db\Hydration;


use function Functional\map;

class Hydrator implements HydratorInterface
{
    /**
     * @inheritdoc
     */
    public function toObject(array $assocArr, string $targetEntity, string $alias): object
    {
        $object = new $targetEntity();
        foreach($targetEntity::COLUMN_NAMES as $columnName) {
            if (isset($assocArr[$alias . '_' . $columnName])) {
                $object->$columnName = $assocArr[$alias . '_' . $columnName];
            }
        }
        return $object;
    }

    /**
     * @inheritdoc
     */
    public function multipleToObject(array $arrOfAssocArr, string $targetEntity, string $alias): array
    {
        return map($arrOfAssocArr, function($item) use ($targetEntity, $alias) {
            return $this->toObject($item, $targetEntity, $alias);
        });
    }

    /**
     * @inheritdoc
     */
    public function createSelect(string $targetEntity, string $alias): string
    {
        $selects = [];
        foreach($targetEntity::COLUMN_NAMES as $columnName) {
            $selects[] = "[$alias].[$columnName] AS [{$alias}_{$columnName}]";
        }
        return implode(', ', $selects);
    }
}