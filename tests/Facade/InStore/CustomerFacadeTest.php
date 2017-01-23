<?php
namespace tests\Facade\InStore;

use CultureKings\LaravelAfterpay\Facade\InStore\CustomerFacade;
use tests\AbstractTestCase;

/**
 * Class CustomerFacadeTest
 * @package tests\Facade\InStore
 */
class CustomerFacadeTest extends AbstractTestCase
{
    public function testCanInitialise()
    {
        /** @var CustomerFacade $facade */
        $facade = $this->app->make('afterpay_instore_customer');
        $facade::shouldReceive();
        $this->assertInstanceOf(CustomerFacade::class, $facade);
    }
}
