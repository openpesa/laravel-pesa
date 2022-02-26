<?php

namespace Openpesa\Pesa;

use Exception;
use Openpesa\SDK\Pesa;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class PesaServiceProvider extends ServiceProvider
{
    
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
                __DIR__.'/../config/laravel-pesa.php' => config_path('laravel-pesa.php'),
            ], 'config');
        
        $this->app->singleton('pesa', function () {
            $public_key = Config::get('services.pesa.public_key');
            $apikey = Config::get('services.pesa.api_key');
            $env = Config::get('services.pesa.env');

            if (is_null($public_key))  throw new Exception("InvalidConfiguration: PUBLIC KEY is required");
            if (is_null($apikey)) throw new Exception("InvalidConfiguration: API KEY is required");

            return new Pesa([
                'api_key' => $apikey,
                'public_key' => $public_key,
                'env' => $env
            ]);
        });
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {

    }
}
