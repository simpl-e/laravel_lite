<?php

return [
    'name' => env('APP_NAME', 'Laravel'),
    'env' => env('APP_ENV', 'production'),
    'debug' => env('APP_DEBUG', false),
    'url' => env('APP_URL', 'http://localhost'),
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => env('APP_KEY'),
    'cipher' => 'AES-256-CBC',
    'log' => env('APP_LOG', 'single'),
    'log_level' => env('APP_LOG_LEVEL', 'debug'),
    /*
      |--------------------------------------------------------------------------
      | Autoloaded Service Providers
      |--------------------------------------------------------------------------
      | The service providers listed here will be automatically loaded on the
      | request to your application. Feel free to add your own services to
      | this array to grant expanded functionality to your applications.
     */
    'providers' => [
        /* Laravel Framework Service Providers... */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        /* Application Service Providers... */
        App\Providers\RouteServiceProvider::class,
        /* JWT: */
        Tymon\JWTAuth\Providers\LaravelServiceProvider::class
    ]
];
