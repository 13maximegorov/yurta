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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/yurtaboard', 'namespace' => 'Admin', 'middleware' => 'notAdmin'], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/logout', 'JoinController@logout');
});

// Авторизация
Route::group(['prefix' => '/yurtaboard', 'namespace' => 'Admin', 'middleware' => 'isAdmin'], function () {
    Route::get('/login', 'JoinController@index');
    Route::post('/login', 'JoinController@login');
});
