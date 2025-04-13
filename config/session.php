<?php

use Illuminate\Support\Str;

return [
    /*
    |--------------------------------------------------------------------------
    | Default Session Driver
    |--------------------------------------------------------------------------
    | Changed to 'cookie' to avoid database requirements
    */
    'driver' => env('SESSION_DRIVER', 'cookie'),

    /*
    |--------------------------------------------------------------------------
    | Session Lifetime
    |--------------------------------------------------------------------------
    */
    'lifetime' => (int) env('SESSION_LIFETIME', 120),
    'expire_on_close' => false,

    /*
    |--------------------------------------------------------------------------
    | Session Encryption
    |--------------------------------------------------------------------------
    */
    'encrypt' => false,

    /*
    |--------------------------------------------------------------------------
    | Session File Location (unused but kept for compatibility)
    |--------------------------------------------------------------------------
    */
    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Cookie Settings
    |--------------------------------------------------------------------------
    */
    'cookie' => Str::slug(env('APP_NAME', 'laravel'), '_').'_session',
    'path' => '/',
    'domain' => env('SESSION_DOMAIN', null),
    'secure' => env('SESSION_SECURE_COOKIE', null),
    'http_only' => true,
    'same_site' => 'lax',
    'partitioned' => false,

    /*
    |--------------------------------------------------------------------------
    | Disabled Database/Redis Options
    |--------------------------------------------------------------------------
    */
    'connection' => null,
    'table' => null,
    'store' => null,

    /*
    |--------------------------------------------------------------------------
    | Session Sweeping Lottery (disabled)
    |--------------------------------------------------------------------------
    */
    'lottery' => [0, 100], // Disabled garbage collection
];