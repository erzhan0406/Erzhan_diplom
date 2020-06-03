<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);
Route::get('/secure/config', ['uses' => 'ConfigController@command']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/users', ['as' => 'users.index', 'uses' => 'UserController@index']);
    Route::post('/user/edit/{id}', ['as' => 'user.edit', 'uses' => 'UserController@edit']);
    Route::post('/user/balance/add/{id}', ['as' => 'user.addToBalance', 'uses' => 'UserController@addToBalance']);
    Route::post('/user/balance/withdraw/{id}', ['as' => 'user.withdrawFromBalance', 'uses' => 'UserController@withdrawFromBalance']);

    Route::get('/deals', ['as' => 'deals.index', 'uses' => 'DealsController@index']);
    Route::get('/world', ['as' => 'world', 'uses' => 'HomeController@worldAnalysis']);
    Route::get('/all', ['as' => 'all', 'uses' => 'HomeController@kazakhstan']);
    Route::get('/earthquakes', ['as' => 'earthquake.index', 'uses' => 'EarthquakesController@index']);
    Route::get('/earthquakes/create', ['as' => 'earthquake.create', 'uses' => 'EarthquakesController@create']);
    Route::get('/earthquakes/{id}', ['as' => 'earthquake.update', 'uses' => 'EarthquakesController@update']);
    Route::post('/earthquakes/{id}', ['as' => 'earthquake.edit', 'uses' => 'EarthquakesController@edit']);
    Route::post('/earthquakes', ['as' => 'earthquake.store', 'uses' => 'EarthquakesController@store']);

});

