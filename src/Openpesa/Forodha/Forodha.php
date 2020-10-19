<?php

namespace Openpesa\Forodha;

use Illuminate\Support\Facades\Facade;

class Forodha extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'forodha';
    }
}