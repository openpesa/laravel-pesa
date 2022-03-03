<?php

namespace Openpesa\Pesa\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Openpesa\SDK\Pesa
 */
class Pesa extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pesa';
    }
}
