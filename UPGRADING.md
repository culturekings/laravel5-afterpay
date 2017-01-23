# Upgrading

## 0.1.0 - 1.0.0

Due to the upgrade of the `culturekings/afterpay` library several namespaces have changed.

* `CultureKings\LaravelAfterpay\Facade\ConfigurationFacade` -> `CultureKings\LaravelAfterpay\Facade\Merchant\ConfigurationFacade`
* `CultureKings\LaravelAfterpay\Facade\OrdersFacade` -> `CultureKings\LaravelAfterpay\Facade\Merchant\OrdersFacade`
* `CultureKings\LaravelAfterpay\Facade\PaymentsFacade` -> `CultureKings\LaravelAfterpay\Facade\Merchant\PaymentsFacade`

Configuration changes

* The `url`, `mechantId` and `secretKey` configurations have moved under `merchant` configuration.