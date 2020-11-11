<?php

namespace Openpesa\Pesa\Facades;

use Illuminate\Support\Facades\Facade;

class Pesa extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pesa';
    }
}