<?php
namespace CultureKings\LaravelAfterpay\Facade\InStore;

use CultureKings\Afterpay\Service\InStore\Order;
use Illuminate\Support\Facades\Facade;

/**
 * Class OrderFacade
 * @package CultureKings\LaravelAfterpay\Facade\InStore
 * @method get()
 */
class OrderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Order::class;
    }
}
