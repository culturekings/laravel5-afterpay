<?php

namespace CultureKings\LaravelAfterpay\Provider;

use \Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

/**
 * Class ServiceProvider
 * @package CultureKings\LaravelAfterpay\Provider
 */
class ServiceProvider extends IlluminateServiceProvider
{
    /**
     *
     */
    public function register()
    {
        $this->app->singleton(Connection::class, function ($app) {
            return new Connection(config('riak'));
        });
    }
}
