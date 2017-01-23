<?php
namespace CultureKings\LaravelAfterpay\Facade\Merchant;

use CultureKings\Afterpay\Service\Merchant\Payments;
use Illuminate\Support\Facades\Facade;

/**
 * Class PaymentsFacade
 * @package CultureKings\LaravelAfterpay\Facade\Merchant
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
