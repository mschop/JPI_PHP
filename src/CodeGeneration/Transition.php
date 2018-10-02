<?php

namespace App\CodeGeneration;


use MabeEnum\Enum;

class Transition extends Enum
{
    const BOOL_YN = 1;
    const BOOL_BIT = 2;
    const VALUE_LIST_PIPE = 3;
}