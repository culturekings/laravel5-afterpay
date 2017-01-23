<?php
namespace tests\Facade\Merchant;

use CultureKings\LaravelAfterpay\Facade\Merchant\PaymentsFacade;
use tests\AbstractTestCase;

/**
 * Class PaymentsFacadeTest
 * @package tests\Facade\Merchant
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
