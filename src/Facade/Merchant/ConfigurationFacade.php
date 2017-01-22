<?php
namespace CultureKings\LaravelAfterpay\Facade\Merchant;

use CultureKings\Afterpay\Service\Merchant\Configuration;
use Illuminate\Support\Facades\Facade;

/**
 * Class ConfigurationFacade
 * @package CultureKings\LaravelAfterpay\Facade\Merchant
 * @method get()
 */
class ConfigurationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Configuration::class;
    }
}
