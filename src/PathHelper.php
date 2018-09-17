<?php

namespace App;


use Eloquent\Pathogen\Path;
use Eloquent\Pathogen\PathInterface;

class PathHelper implements PathHelperInteface
{
    public function getRootDir(): PathInterface
    {
        return Path::fromString(__DIR__ . '/../');
    }
}