<?php
namespace CultureKings\LaravelAfterpay\Facade;

use CultureKings\Afterpay\Service\Payments;
use Illuminate\Support\Facades\Facade;

/**
 * Class PaymentsFacade
 * @package CultureKings\LaravelAfterpay\Facade
 * @mixin Payments
 * @method static listPayments(array $params)
 */
class PaymentsFacade extends Facade
{
    /**
     * @return mixed
     */
    protected static function getFacadeAccessor()
    {
        return Payments::class;
    }
}
