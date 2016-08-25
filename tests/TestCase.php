<?php
namespace tests;


use CultureKings\Afterpay\Model\Authorization;
use CultureKings\LaravelAfterpay\Facade\ConfigurationFacade;
use CultureKings\LaravelAfterpay\Facade\OrdersFacade;
use CultureKings\LaravelAfterpay\Facade\PaymentsFacade;
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

    protected function getPackageAliases($app)
    {
        return [
            'afterpay_authorization' => Authorization::class,
            'afterpay_payments' => PaymentsFacade::class,
            'afterpay_configuration' => ConfigurationFacade::class,
            'afterpay_orders' => OrdersFacade::class
        ];
    }

    /**
     * Setup the test environment.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();

        $this->app->boot();
    }
}
