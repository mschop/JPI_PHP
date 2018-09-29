<?php

namespace App\CodeGeneration;


use App\PathHelperInteface;

class ApiDocsGenerator
{
    protected $pathHelper;

    public function __construct(PathHelperInteface $pathHelper)
    {
        $this->pathHelper = $pathHelper;
    }

    public function generate()
    {
        $openapi = \OpenApi\scan($this->pathHelper->getRootDir()->joinAtoms('src')->string());
        file_put_contents($this->pathHelper->getRootDir()->joinAtoms('docs', 'api', 'jpi.json'), $openapi->toJson());
    }
}