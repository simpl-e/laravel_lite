<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

    protected $namespace = 'App\Http\Controllers';

    public function boot() {
        parent::boot();
    }

    public function map() {

        Route::any('{class}/{method}', function ($class, $method) {
            $controllerClass = "App\\Http\\Controllers\\{$class}Controller";
            $controller = new $controllerClass;
            return $controller->$method();
        });
    }
}
