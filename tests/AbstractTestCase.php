<?php
namespace tests;

use CultureKings\LaravelAfterpay\Provider\AfterPayProvider;

/**
 * Class AbstractTestCase
 * @package tests
 */
abstract class AbstractTestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            AfterPayProvider::class,
        ];
    }
}
