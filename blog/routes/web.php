<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'api'], function () {
    Route::post('login', 'Auth\AuthController@login');
    Route::post('logout', 'Auth\AuthController@logout');

    // ROUTES WITH AUTH
    Route::group(['middleware' => 'auth:api', 'middleware' => 'CorsMiddleware:handle'], function () {
        Route::get('me', 'UserController@me');
        Route::get('users', 'UserController@getUsers');
        Route::post('refresh', 'Auth\AuthController@refresh');
    });
});
