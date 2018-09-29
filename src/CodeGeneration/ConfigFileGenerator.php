<?php

namespace App\CodeGeneration;


class ConfigFileGenerator
{
    public function build(array $config): string
    {
        return '<?php return ' . var_export($config, true) . ';';
    }
}