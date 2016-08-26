Afterpay for Laravel 5
=======================

This packages exposes services from [CultureKings/Afterpay](https://github.com/culturekings/afterpay) in Laravel5. 

[![Coverage Status](https://coveralls.io/repos/github/culturekings/laravel5-afterpay/badge.svg?branch=master)](https://coveralls.io/github/culturekings/laravel5-afterpay?branch=master)

## Version Compatibility

 Laravel  | Laravel5 Afterpay
:---------|:----------
 5.2.x    | @dev

## Installation

The recommended way to install is via [Composer](http://getcomposer.org).


```bash
composer require culturekings/laravel5-afterpay
```

Find the providers key in your config/app.php and register the Afterpay Service Provider

```php
'providers' => array(
    // ...
    CultureKings\LaravelAfterpay\Provider\AfterpayProvider::class,
)
```

## Configuration

By default, the package uses the following environment variables to auto-configure the plugin without modification:

```bash
AFTERPAY_API_URL (defaults to sandbox url)
AFTERPAY_MERCHANT_ID
AWS_AFTERPAY_SECRET_KEY
```

To customize the configuration file, publish the package configuration using Artisan.

php artisan vendor:publish

Update your settings in the generated app/config/afterpay.php configuration file.

## Usage

### Facades

This package exposes multiple facades for you to use.

Using the facades allows you not to worry about the Authorisation object that is required for calls.

Configuration
```php
$api = \App::make('afterpay_configuration');
$api::get();
```
Payments
```php
$api = \App::make('afterpay_payments');
$payments = $api::listPayments();
```
Orders
```php
$api = \App::make('afterpay_orders');
$order = $api::get(ORDER_TOKEN);
```

### Raw

[read the documentation](https://github.com/culturekings/afterpay)

Raw does away with the Facade and hits the services directly, giving you more flexibility. 
The trade off is that your now responsible for creating your own Authentication object and injecting it into the services. 
You can still ask Laravel to create you an Authentication object with your credentials loaded from config.

```php
$auth = \App::make(CultureKings\Afterpay\Model\Authorization::class);
```
