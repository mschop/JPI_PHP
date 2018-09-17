<?php

namespace App;


use Eloquent\Pathogen\PathInterface;

interface PathHelperInteface
{
    public function getRootDir(): PathInterface;
}