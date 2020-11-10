<?php

namespace Openpesa\Pesa;

use Exception;
use Openpesa\SDK\Pesa as PesaSDK;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class PesaServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('pesa', function () {
            $public_key = Config::get('services.pesa.public_key');
            $apikey = Config::get('services.pesa.api_key');

            if (is_null($public_key))  throw new Exception("InvalidConfiguration: PUBLIC KEY is required");
            if (is_null($apikey)) throw new Exception("InvalidConfiguration: API KEY is required");

            return new PesaSDK([
                'api_key' => $apikey,
                'public_key' => $public_key,
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
