Afterpay for Laravel 5
=======================

This packages exposes services from [CultureKings/Afterpay](https://github.com/culturekings/afterpay) in Laravel5. 

[![Coverage Status](https://coveralls.io/repos/github/culturekings/laravel5-afterpay/badge.svg?branch=master)](https://coveralls.io/github/culturekings/laravel5-afterpay?branch=master)
[![CircleCI](https://img.shields.io/circleci/project/culturekings/laravel5-afterpay.svg?style=svg)](https://img.shields.io/circleci/project/culturekings/laravel5-afterpay.svg?style=svg)
[![Scrutinizer](https://scrutinizer-ci.com/g/culturekings/laravel5-afterpay/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/culturekings/afterpay/laravel5-afterpay/quality-score.png?b=master)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/3fd9cfea-4edb-4ce1-94f5-bd2358bfb7a6.svg)](https://img.shields.io/sensiolabs/i/3fd9cfea-4edb-4ce1-94f5-bd2358bfb7a6.svg)

## Version Compatibility

 Laravel  | Laravel5 Afterpay
:---------|:----------
 5.3.x    | @dev

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


### Merchant API Configuration
By default, the package uses the following environment variables to auto-configure the plugin without modification:

```bash
AFTERPAY_API_URL (defaults to sandbox url)
AFTERPAY_MERCHANT_ID
AWS_AFTERPAY_SECRET_KEY
```

### InStore API Configuration
```bash
AFTERPAY_INSTORE_API_URL (defaults to sandbox url)
```

To customize the configuration file, publish the package configuration using Artisan.

php artisan vendor:publish

Update your settings in the generated app/config/afterpay.php configuration file.

## Usage

### Merchant API Facades

This package exposes multiple facades for you to use.

Using the facades allows you not to worry about the Authorisation object that is required for calls.

Configuration
```php
$api = \App::make('afterpay_merchant_configuration');
$api::get();
```
Payments
```php
$api = \App::make('afterpay_merchant_payments');
$payments = $api::listPayments();
```
Orders
```php
$api = \App::make('afterpay_merchant_orders');
$order = $api::get(ORDER_TOKEN);
```

### InStore API Facades

This package exposes multiple facades for you to use.

Authentication is more manual with this API and it is required for you to manually set the details on `\CultureKings\Afterpay\Model\InStore\Authorization`.

Customer
```php
$api = \App::make('afterpay_instore_customer');
$api::invite();
```

Device
```php
$api = \App::make('afterpay_instore_device');
$api::activate();
```

Order
```php
$api = \App::make('afterpay_instore_order');
$order = $api::create();
```

PreApproval
```php
$api = \App::make('afterpay_instore_preapproval');
$order = $api::enquiry();
```

Refund
```php
$api = \App::make('afterpay_instore_refund');
$order = $api::create();
```

### Raw

[read the documentation](https://github.com/culturekings/afterpay)

Raw does away with the Facade and hits the services directly, giving you more flexibility. 
The trade off is that your now responsible for creating your own Authentication object and injecting it into the services. 
You can still ask Laravel to create you an Authentication object with your credentials loaded from config.

```php
$auth = \App::make(CultureKings\Afterpay\Model\Merchant\Authorization::class);
```
