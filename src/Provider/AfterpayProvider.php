<?php

namespace CultureKings\LaravelAfterpay\Provider;


use CultureKings\Afterpay\Factory\Api;
use CultureKings\Afterpay\Model\Authorization;
use CultureKings\Afterpay\Service\Configuration;
use CultureKings\Afterpay\Service\Orders;
use CultureKings\Afterpay\Service\Payments;
use CultureKings\LaravelAfterpay\Facade\ConfigurationFacade;
use CultureKings\LaravelAfterpay\Facade\OrdersFacade;
use CultureKings\LaravelAfterpay\Facade\PaymentsFacade;
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
        $source = dirname(__DIR__, 2).'/config/afterpay.php';
        $this->publishes([$source => config_path('afterpay.php')]);
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

        $this->app->singleton(Configuration::class, function ($app) {
            return Api::configuration($app->make('afterpay_authorization'));
        });

        $this->app->singleton(Orders::class, function ($app) {
            return Api::orders($app->make('afterpay_authorization'));
        });

        $this->app->singleton(Payments::class, function ($app) {
            return Api::payments($app->make('afterpay_authorization'));
        });

        $this->app->alias(Authorization::class, 'afterpay_authorization');
        $this->app->alias(PaymentsFacade::class, 'afterpay_payments');
        $this->app->alias(ConfigurationFacade::class, 'afterpay_configuration');
        $this->app->alias(OrdersFacade::class, 'afterpay_orders');
    }

    public function provides()
    {
        return [
            Authorization::class,
            Api::class
        ];
    }
}
