<?php

namespace App\Db\Hydration;


use Doctrine\DBAL\Driver\Statement;

class JsonHelper implements JsonHelperInterface
{
    public function createResult(Statement $stmt)
    {
        $json = '';
        while (($part = $stmt->fetchColumn())) {
            $json .= $part;
        }
        return json_decode($json, true);
    }
}