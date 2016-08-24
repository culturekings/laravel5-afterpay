AfterPay for Laravel 5
=======================

[![Coverage Status](https://coveralls.io/repos/github/culturekings/laravel5-afterpay/badge.svg?branch=master)](https://coveralls.io/github/culturekings/laravel5-afterpay?branch=master)

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

return [
    'credentials' => [
        'key'    => 'YOUR_AWS_ACCESS_KEY_ID',
        'secret' => 'YOUR_AWS_SECRET_ACCESS_KEY',
    ],
    'region' => 'us-west-2',
    'version' => 'latest',

    // You can override settings for specific services
    'Ses' => [
        'region' => 'us-east-1',
    ],
];
