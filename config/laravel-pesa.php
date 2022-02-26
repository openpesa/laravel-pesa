<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Openpesa Config
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for OpenAPI services such
    | as API keys etc.
    |
    */

    'services'=>[
        'pesa'=>[
            'public_key'=>env('PESA_PUBLIC_KEY'),
            'api_key'=>env('PESA_API_KEY'),
            'env'=>env('PESA_ENV'),
        ],
    ],


    // 'api_key' => env('PESA_API_KEY'),

    // 'public_key' => env('PESA_PUBLIC_KEY'),
];
