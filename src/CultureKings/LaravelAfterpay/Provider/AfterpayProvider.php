<?php

namespace CultureKings\LaravelAfterpay\Provider;

use CultureKings\Afterpay\Factory\Api;
use \Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

/**
 * Class AfterPayProvider
 * @package CultureKings\LaravelAfterpay\Provider
 */
class AfterPayProvider extends IlluminateServiceProvider
{
    /**
     * Defer loading the factory till needed.
     * @var bool
     */
    protected $defer = true;
    /**
     *
     */
    public function register()
    {
        $this->app->singleton(Api::class, function() {

        })
//        $this->app->singleton(Connection::class, function ($app) {
//            return new Connection(config('riak'));
//        });
    }
}
