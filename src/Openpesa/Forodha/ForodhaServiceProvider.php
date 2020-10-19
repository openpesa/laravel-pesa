<?php

namespace Openpesa\Forodha;

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

        $this->app->singleton('Forodha', function () {
            return $this->app->make('Openpesa\Forodha\ForodhaHandler');
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
            __DIR__ . '/../../config' => config_path('openpesa.php'),
        ]);
    }

}
