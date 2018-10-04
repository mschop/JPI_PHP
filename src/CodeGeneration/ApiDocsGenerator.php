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
        $path = $this->pathHelper->getRootDir()->joinAtoms('docs')->joinAtoms('api')->joinAtoms('jpi.json');
        file_put_contents($path, $openapi->toJson());
    }
}