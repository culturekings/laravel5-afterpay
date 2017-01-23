<?php
namespace CultureKings\LaravelAfterpay\Facade\InStore;

use CultureKings\Afterpay\Service\InStore\Refund;
use Illuminate\Support\Facades\Facade;

/**
 * Class RefundFacade
 * @package CultureKings\LaravelAfterpay\Facade\InStore
 * @method get()
 */
class RefundFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Refund::class;
    }
}
