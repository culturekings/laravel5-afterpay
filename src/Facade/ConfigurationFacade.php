<?php
namespace CultureKings\LaravelAfterpay\Facade;

use CultureKings\Afterpay\Service\Configuration;
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
        return Configuration::class;
    }
}
