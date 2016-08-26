<?php
namespace tests;

use CultureKings\LaravelAfterpay\Provider\AfterPayProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            AfterPayProvider::class
        ];
    }
}
