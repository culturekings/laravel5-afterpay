<?php

namespace CultureKings\LaravelAfterpay\Provider;

use CultureKings\Afterpay\Factory\InStoreApi;
use CultureKings\Afterpay\Factory\MerchantApi;
use CultureKings\Afterpay\Model;
use CultureKings\Afterpay\Service;
use CultureKings\LaravelAfterpay\Facade;
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
        $this->app->singleton(Service\Merchant\Ping::class, function (Application $app) {
            /** @var Application $app */
            $baseUrl = $app->make('config')->get('afterpay.merchant.base_url');

            return MerchantApi::ping($baseUrl);
        });

        $this->app->singleton(Service\InStore\Ping::class, function (Application $app) {
            $baseUrl = $app->make('config')->get('afterpay.instore.base_url');

            return InStoreApi::ping($baseUrl);
        });

        $this->app->singleton(Model\Merchant\Authorization::class, function (Application $app) {
            /** @var Application $app */
            $config = $app->make('config')->get('afterpay');

            return new Model\Merchant\Authorization($config['merchant']['url'], $config['merchant']['merchantId'], $config['merchant']['secretKey']);
        });

        $this->app->singleton(Service\Merchant\Configuration::class, function (Application $app) {
            return MerchantApi::configuration($app->make('afterpay_merchant_authorization'));
        });

        $this->app->singleton(Service\Merchant\Orders::class, function (Application $app) {
            return MerchantApi::orders($app->make('afterpay_merchant_authorization'));
        });

        $this->app->singleton(Service\Merchant\Payments::class, function (Application $app) {
            return MerchantApi::payments($app->make('afterpay_merchant_authorization'));
        });

        $this->app->singleton(Model\InStore\Authorization::class, function (Application $app) {
            $config = $app->make('config')->get('afterpay');

            return new Model\InStore\Authorization($config['instore']['url']);
        });

        $this->app->singleton(Service\InStore\Customer::class, function (Application $app) {
            return InStoreApi::customer($app->make('afterpay_instore_authorization'));
        });

        $this->app->singleton(Service\InStore\Device::class, function (Application $app) {
            return InStoreApi::device($app->make('afterpay_instore_authorization'));
        });

        $this->app->singleton(Service\InStore\Order::class, function (Application $app) {
            return InStoreApi::order($app->make('afterpay_instore_authorization'));
        });

        $this->app->singleton(Service\InStore\PreApproval::class, function (Application $app) {
            return InStoreApi::preapproval($app->make('afterpay_instore_authorization'));
        });

        $this->app->singleton(Service\InStore\Refund::class, function (Application $app) {
            return InStoreApi::refund($app->make('afterpay_instore_authorization'));
        });

        $this->app->alias('AfterpayMerchantPing', 'afterpay_merchant_ping');
        $this->app->alias('AfterpayInstorePing', 'afterpay_instore_ping');

        $this->app->alias(Model\Merchant\Authorization::class, 'afterpay_merchant_authorization');
        $this->app->alias(Facade\Merchant\PaymentsFacade::class, 'afterpay_merchant_payments');
        $this->app->alias(Facade\Merchant\ConfigurationFacade::class, 'afterpay_merchant_configuration');
        $this->app->alias(Facade\Merchant\OrdersFacade::class, 'afterpay_merchant_orders');

        $this->app->alias(Facade\PingFacade::class, 'afterpay_ping');
        $this->app->alias(Model\InStore\Authorization::class, 'afterpay_instore_authorization');
        $this->app->alias(Facade\InStore\CustomerFacade::class, 'afterpay_instore_customer');
        $this->app->alias(Facade\InStore\DeviceFacade::class, 'afterpay_instore_device');
        $this->app->alias(Facade\InStore\OrderFacade::class, 'afterpay_instore_order');
        $this->app->alias(Facade\InStore\PreApprovalFacade::class, 'afterpay_instore_preapproval');
        $this->app->alias(Facade\InStore\RefundFacade::class, 'afterpay_instore_refund');
    }

    /**
     * @return array
     */
    public function provides()
    {
        return [
            Service\Ping::class,
            Model\Merchant\Authorization::class,
            Service\Merchant\Payments::class,
            Service\Merchant\Configuration::class,
            Service\Merchant\Orders::class,
            MerchantApi::class,
            Model\InStore\Authorization::class,
            Service\InStore\Customer::class,
            Service\InStore\Device::class,
            Service\InStore\Order::class,
            Service\InStore\PreApproval::class,
            Service\InStore\Refund::class,
            InStoreApi::class,
        ];
    }
}
