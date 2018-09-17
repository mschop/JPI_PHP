<?php

namespace App\CodeGeneration;


class PhpConfigBuilder
{
    public function build(array $config): string
    {
        return '<?php return ' . var_export($config, true) . ';';
    }
}