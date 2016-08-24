<?php

namespace CultureKings\LaravelAfterpay\Provider;


use CultureKings\Afterpay\Factory\Api;
use CultureKings\Afterpay\Model\Authorization;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

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
    public function boot()
    {
        $source = dirname(__DIR__, 4).'/config/afterpay.php';

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('afterpay.php')]);
        }

        $this->mergeConfigFrom($source, 'afterpay');
    }

    /**
     *
     */
    public function register()
    {
        $this->app->singleton(Authorization::class, function($app) {
            $config = $app->make('config')->get('afterpay');
            return new Authorization($config['url'], $config['merchantId'], $config['secretKey']);
        });
    }

    public function provides()
    {
        return [Authorization::class, Api::class];
    }
}
