<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'UserController@index');
    Route::get('/{id}', 'UserController@show');
    Route::post('/', 'UserController@store');
    Route::put('/{id}', 'UserController@update');
    Route::delete('/{id}', 'UserController@delete');      
});  

Route::group(['prefix' => 'pemesanan'], function () {
    Route::get('/', 'PemesananController@index');
    Route::get('/{id}', 'PemesananController@show');
    Route::post('/', 'PemesananController@store');
    Route::put('/{id}', 'PemesananController@update');
    Route::delete('/{id}', 'PemesananController@delete');      
});   