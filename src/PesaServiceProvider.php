<?php

namespace Openpesa\Pesa;

use Illuminate\Support\Facades\Config;
use Openpesa\Pesa\Commands\PesaCommand;
use Openpesa\SDK\Pesa;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Throwable;

class PesaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-pesa')
            ->hasConfigFile('laravel-pesa')
            ->hasCommand(PesaCommand::class);
    }

    public function packageRegistered()
    {
        $this->app->singleton('pesa', function () {
            $publicKey = Config::get('laravel-pesa.public_key');

            $apiKey = Config::get('laravel-pesa.api_key');
            $env = Config::get('laravel-pesa.env');

            if (is_null($publicKey)) {
                throw new Throwable("InvalidConfiguration: PUBLIC KEY is required");
            }
            if (is_null($apiKey)) {
                throw new Throwable("InvalidConfiguration: API KEY is required");
            }

            return new Pesa([
                'api_key' => $apiKey,
                'public_key' => $publicKey,
                'env' => $env,
            ]);
        });
    }
}
