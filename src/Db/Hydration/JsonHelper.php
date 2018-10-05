<?php

namespace App\Db\Hydration;


use Doctrine\DBAL\Driver\Statement;

class JsonHelper implements JsonHelperInterface
{
    /**
     * @inheritdoc
     */
    public function createResult(Statement $stmt)
    {
        $json = '';
        while (($part = $stmt->fetchColumn())) {
            $json .= $part;
        }
        if (empty($json)) {
            return [];
        }
        return json_decode($json, true);
    }
}