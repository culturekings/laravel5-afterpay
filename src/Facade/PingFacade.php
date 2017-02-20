<?php
namespace CultureKings\LaravelAfterpay\Facade;

use CultureKings\Afterpay\Service\Ping;
use Illuminate\Support\Facades\Facade;

/**
 * Class PingFacade
 * @package CultureKings\LaravelAfterpay\Facade
 */
class PingFacade extends Facade
{
    /**
     * @return mixed
     */
    protected static function getFacadeAccessor()
    {
        return Ping::class;
    }
}
