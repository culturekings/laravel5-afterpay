<?php
namespace tests\Facade\InStore;

use CultureKings\LaravelAfterpay\Facade\InStore\OrderFacade;
use tests\AbstractTestCase;

/**
 * Class OrderFacadeTest
 * @package tests\Facade\InStore
 */
class OrderFacadeTest extends AbstractTestCase
{
    public function testCanInitialise()
    {
        /** @var OrderFacade $facade */
        $facade = $this->app->make('afterpay_instore_order');
        $facade::shouldReceive();
        $this->assertInstanceOf(OrderFacade::class, $facade);
    }
}
