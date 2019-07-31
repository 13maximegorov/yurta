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

// Панель управления Yurtaboard
Route::group(['prefix' => '/yurtaboard', 'namespace' => 'Admin', 'middleware' => 'notAdmin'], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/logout', 'JoinController@logout');
    Route::get('/cards', 'CardsController@cards');
    Route::get('/cards/add', 'CardsController@cardsAdd');
    Route::post('/cards/add', 'CardsController@addCard');
    Route::get('/cards/edit', 'CardsController@cardEdit');
    Route::get('cards/delete/{id}', 'CardsController@deleteCard');
    Route::get('/settings', 'SettingsController@settings');
});

// Аутентификация
Route::group(['prefix' => '/yurtaboard', 'namespace' => 'Admin', 'middleware' => 'isAdmin'], function () {
    Route::get('/login', 'JoinController@index');
    Route::post('/login', 'JoinController@login');
});
