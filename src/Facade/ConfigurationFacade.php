<?php
namespace CultureKings\LaravelAfterpay\Facade;

use CultureKings\Afterpay\Service\Payments;
use Illuminate\Support\Facades\Facade;

/**
 * Class ConfigurationFacade
 * @package CultureKings\LaravelAfterpay\Facade
 * @method get()
 */
class ConfigurationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Payments::class;
    }
}
