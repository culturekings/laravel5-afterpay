<?php

return [
    'merchant' => [
        'url' => env('AFTERPAY_API_URL', \CultureKings\Afterpay\Model\Merchant\Authorization::SANDBOX_URI),
        'merchantId' => env('AFTERPAY_MERCHANT_ID'),
        'secretKey' => env('AFTERPAY_SECRET_KEY'),
    ],
    'instore' => [
        'url' => env('AFTERPAY_INSTORE_API_URL', \CultureKings\Afterpay\Model\InStore\Authorization::SANDBOX_URI)
    ]
];
