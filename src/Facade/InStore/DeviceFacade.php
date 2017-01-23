<?php
namespace CultureKings\LaravelAfterpay\Facade\InStore;

use CultureKings\Afterpay\Service\InStore\Device;
use Illuminate\Support\Facades\Facade;

/**
 * Class DeviceFacade
 * @package CultureKings\LaravelAfterpay\Facade\InStore
 * @method get()
 */
class DeviceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Device::class;
    }
}
