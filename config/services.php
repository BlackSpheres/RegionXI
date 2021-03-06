<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
    'client_id' => '133505117258922',
    'client_secret' => '221f1e958adb0b5b247b920631a1acf3',
    'redirect' => 'http://localhost:8000/callback/facebook',
    ],
    'twitter' => [
    'client_id' => 'gO8nVOFVQnA6MQWGbNMSKkHh2',
    'client_secret' => 'cWH3pDMFEmYq2vzwfK539ffIlMx5VUVcYkkiZPzxybHNK6TtJf',
    'redirect' => 'http://localhost:8000/callback/twitter',
],

];
