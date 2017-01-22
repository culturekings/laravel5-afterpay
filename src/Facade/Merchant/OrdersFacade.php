<?php
namespace CultureKings\LaravelAfterpay\Facade\Merchant;

use CultureKings\Afterpay\Service\Merchant\Orders;
use Illuminate\Support\Facades\Facade;

/**
 * Class OrdersFacade
 * @package CultureKings\LaravelAfterpay\Facade\Merchant
 * @method create(\CultureKings\Afterpay\Model\Merchant\OrderDetails $orderDetail)
 * @method get($token)
 */
class OrdersFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Orders::class;
    }
}
