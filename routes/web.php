<?php

Route::get('/', function () {
    return "/";
});

//Route::any('{all}', function () {
//    return "web all";
//});
//Route::any('{class}/{method}', function ($class, $method) {
//    $controllerClass = "{$class}Controller";
//    $controller = new $controllerClass;
//    return $controller->$method();
//});

Route::group(['middleware' => 'auth:api'], function () {
    Route::any('user', function () {
//    return $request->user();
        return 123;
    });
});

Route::any('{all}', function () {
    return "api all";
});
Route::post('login', ['as' => 'login']);
