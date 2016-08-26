<?php
namespace CultureKings\LaravelAfterpay\Facade;

use CultureKings\Afterpay\Service\Orders;
use Illuminate\Support\Facades\Facade;
use CultureKings\Afterpay\Model\OrderDetails;

/**
 * Class OrdersFacade
 * @package CultureKings\LaravelAfterpay\Facade
 * @method create(OrderDetails $orderDetail)
 * @method get($token)
 */
class OrdersFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Orders::class;
    }
}
