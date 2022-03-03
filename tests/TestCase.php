<?php

namespace Openpesa\Pesa\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Openpesa\Pesa\PesaServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            PesaServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
