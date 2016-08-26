<?php
namespace tests\Facade;

use CultureKings\LaravelAfterpay\Facade\PaymentsFacade;
use tests\AbstractTestCase;

/**
 * Class PaymentsFacadeTest
 * @package tests\Facade
 */
class PaymentsFacadeTest extends AbstractTestCase
{
    public function testCanInitialise()
    {
        /** @var PaymentsFacade $facade */
        $facade = $this->app->make('afterpay_payments');
        $facade::shouldReceive();
        $this->assertInstanceOf(PaymentsFacade::class, $facade);
    }
}
