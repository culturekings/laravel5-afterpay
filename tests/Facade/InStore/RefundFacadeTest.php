<?php
namespace tests\Facade\InStore;

use CultureKings\LaravelAfterpay\Facade\InStore\RefundFacade;
use tests\AbstractTestCase;

/**
 * Class PaymentsFacadeTest
 * @package tests\Facade\Merchant
 */
class PaymentsFacadeTest extends AbstractTestCase
{
    public function testCanInitialise()
    {
        /** @var RefundFacade $facade */
        $facade = $this->app->make('afterpay_instore_refund');
        $facade::shouldReceive();
        $this->assertInstanceOf(RefundFacade::class, $facade);
    }
}
