<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api/cars', 'middleware' => 'auth:api'], function () {
    Route::get('/{id}', "CarsController@get");
    Route::get('/', "CarsController@getAll");
    Route::post('/', "CarsController@store");
    Route::put('/{id}', "CarsController@update");
    Route::delete('/{id}', "CarsController@destroy");
});
