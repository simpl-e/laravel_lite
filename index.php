<?php

use Illuminate\Support\Facades\Route;

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('LARAVEL_START', microtime(true));

//LOAD COMPOSER
require 'vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

//START LARAVEL
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
);

//RUN
$response->send();
$kernel->terminate($request, $response);
