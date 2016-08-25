<?php
namespace tests\Facade;

use CultureKings\LaravelAfterpay\Facade\PaymentsFacade;
use tests\TestCase;

/**
 * Class PaymentsFacadeTest
 * @package tests\Facade
 */
class PaymentsFacadeTest extends TestCase
{
    public function testCanInitialise()
    {
        /** @var PaymentsFacade $facade */
        $facade = $this->app->make('afterpay_payments');
        $this->assertInstanceOf(PaymentsFacade::class, $facade);
    }
}
