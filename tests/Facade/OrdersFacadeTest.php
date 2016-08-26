<?php
namespace tests\Facade;

use CultureKings\LaravelAfterpay\Facade\OrdersFacade;
use tests\AbstractTestCase;

/**
 * Class OrdersFacadeTest
 * @package tests\Facade
 */
class OrdersFacadeTest extends AbstractTestCase
{
    public function testCanInitialise()
    {
        /** @var OrdersFacade $facade */
        $facade = $this->app->make('afterpay_orders');
        $this->assertInstanceOf(OrdersFacade::class, $facade);
    }
}
