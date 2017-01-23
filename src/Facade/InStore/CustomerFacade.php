<?php
namespace CultureKings\LaravelAfterpay\Facade\InStore;

use CultureKings\Afterpay\Service\InStore\Customer;
use Illuminate\Support\Facades\Facade;

/**
 * Class CustomerFacade
 * @package CultureKings\LaravelAfterpay\Facade\InStore
 * @method get()
 */
class CustomerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Customer::class;
    }
}
