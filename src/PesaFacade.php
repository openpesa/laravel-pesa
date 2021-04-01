<?php

namespace Openpesa\Pesa;

use Illuminate\Support\Facades\Facade;

class PesaFacade extends Facade
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