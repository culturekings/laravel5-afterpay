<?php

namespace CultureKings\LaravelAfterpay\Provider;

use CultureKings\Afterpay\Factory\Api;
use CultureKings\Afterpay\Model\Merchant\Authorization;
use CultureKings\Afterpay\Service\Merchant\Configuration;
use CultureKings\Afterpay\Service\Merchant\Orders;
use CultureKings\Afterpay\Service\Merchant\Payments;
use CultureKings\LaravelAfterpay\Facade\Merchant\ConfigurationFacade;
use CultureKings\LaravelAfterpay\Facade\Merchant\OrdersFacade;
use CultureKings\LaravelAfterpay\Facade\Merchant\PaymentsFacade;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

/**
 * Class AfterpayProvider
 * @package CultureKings\LaravelAfterpay\Provider
 */
class AfterpayProvider extends IlluminateServiceProvider
{
    /**
     * Defer loading the factory till needed.
     * @var bool
     */
    protected $defer = false;
    /**
     *
     */
    public function boot()
    {
        $source = dirname(dirname(__DIR__)).'/config/afterpay.php';
        $this->publishes([$source => config_path('afterpay.php')]);
        $this->mergeConfigFrom($source, 'afterpay');
    }

    /**
     *
     */
    public function register()
    {
        $this->app->singleton(Authorization::class, function (Application $app) {
            /** @var Application $app */
            $config = $app->make('config')->get('afterpay');

            return new Authorization($config['url'], $config['merchantId'], $config['secretKey']);
        });

        $this->app->singleton(Configuration::class, function (Application $app) {
            return Api::configuration($app->make('afterpay_authorization'));
        });

        $this->app->singleton(Orders::class, function (Application $app) {
            return Api::orders($app->make('afterpay_authorization'));
        });

        $this->app->singleton(Payments::class, function (Application $app) {
            return Api::payments($app->make('afterpay_authorization'));
        });

        $this->app->alias(Authorization::class, 'afterpay_authorization');
        $this->app->alias(PaymentsFacade::class, 'afterpay_payments');
        $this->app->alias(ConfigurationFacade::class, 'afterpay_configuration');
        $this->app->alias(OrdersFacade::class, 'afterpay_orders');
    }

    /**
     * @return array
     */
    public function provides()
    {
        return [
            Authorization::class,
            Payments::class,
            Configuration::class,
            Orders::class,
            Api::class,
        ];
    }
}
