<?php
namespace tests\Facade\Merchant;

use CultureKings\LaravelAfterpay\Facade\Merchant\OrdersFacade;
use tests\AbstractTestCase;

/**
 * Class OrdersFacadeTest
 * @package tests\Facade\Merchant
 */
class OrdersFacadeTest extends AbstractTestCase
{
    public function testCanInitialise()
    {
        /** @var OrdersFacade $facade */
        $facade = $this->app->make('afterpay_merchant_orders');
        $facade::shouldReceive();
        $this->assertInstanceOf(OrdersFacade::class, $facade);
    }
}
