# Upgrading

## 0.1.2 - 1.0.0

### Namespace changes

Due to the upgrade of the `culturekings/afterpay` library several namespaces have changed.

* `CultureKings\LaravelAfterpay\Facade\ConfigurationFacade` -> `CultureKings\LaravelAfterpay\Facade\Merchant\ConfigurationFacade`
* `CultureKings\LaravelAfterpay\Facade\OrdersFacade` -> `CultureKings\LaravelAfterpay\Facade\Merchant\OrdersFacade`
* `CultureKings\LaravelAfterpay\Facade\PaymentsFacade` -> `CultureKings\LaravelAfterpay\Facade\Merchant\PaymentsFacade`

### Configuration changes

* The `url`, `mechantId` and `secretKey` configurations have moved under `merchant` configuration.

### Alias changes

The following aliases have changed 

* `afterpay_authorization` -> `afterpay_merchant_authorization`
* `afterpay_payments` -> `afterpay_merchant_payments`
* `afterpay_configuration` -> `afterpay_merchant_configuration`
* `afterpay_orders` -> `afterpay_merchant_orders`
