<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Support\Facades\Route;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

Route::group(['prefix' => 'login'], function () {

    Route::group(['middleware' => App\Http\Middleware\CorsMiddleware::class], function () {
        Route::get('github', 'LoginController@redirectToProvider');
        Route::get('github/callback', 'LoginController@handleProviderCallback');
    });
});


Route::group(['prefix' => 'api'], function () {

    Route::post('login', 'Auth\AuthController@login');
    Route::post('logout', 'Auth\AuthController@logout');
    Route::get('users', 'UserController@getUsers');

    // ROUTES WITH AUTH
    Route::group(['middleware' => App\Http\Middleware\CorsMiddleware::class, 'middleware' => 'auth:api'], function () {

        Route::get('me', 'UserController@me');
        Route::get('profile/{id}', 'UserController@getProfile');

        Route::post('refresh', 'Auth\AuthController@refresh');
    });
});
