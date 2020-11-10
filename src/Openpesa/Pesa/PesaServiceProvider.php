<?php

namespace Openpesa\Pesa;

use Exception;
use Openpesa\SDK\Pesa as PesaSDK;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class ForodhaServiceProvider extends ServiceProvider
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
        $this->app->singleton(Pesa::class, function () {
            $public_key = Config::get('pesa.public_key');
            $apikey = Config::get('pesa.apikey');
            
            if (is_null($public_key))  throw new Exception("InvalidConfiguration: PUBLIC KEY is required");
            if (is_null($apikey)) throw new Exception("InvalidConfiguration: API KEY is required");
            
            return new PesaSDK($public_key, $apikey);
        });
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config' => config_path('pesa.php'),
        ]);
    }
}
