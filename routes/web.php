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

// Yurta
Route::get('/', 'MainController@index');

// Панель управления Yurtaboard
Route::group(['prefix' => '/yurtaboard', 'namespace' => 'Admin', 'middleware' => 'notAdmin'], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/logout', 'JoinController@logout');
    Route::get('/cards', 'CardsController@cards');
    Route::get('/cards/add', 'CardsController@cardsAdd');
    Route::post('/cards/add', 'CardsController@addCard');
    Route::get('/cards/edit/{id}', 'CardsController@cardEdit');
    Route::post('/cards/edit/{id}', 'CardsController@editCard');
    Route::get('cards/delete/{id}', 'CardsController@deleteCard');
    Route::get('/settings', 'SettingsController@settings');
    Route::post('/settings/edit', 'SettingsController@editSettings');
    Route::get('/sections', 'SectionController@sections');
    Route::get('/sections/edit/{id}', 'SectionController@edit');
    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    // list all lfm routes here...
});

// Аутентификация
Route::group(['prefix' => '/yurtaboard', 'namespace' => 'Admin', 'middleware' => 'isAdmin'], function () {
    Route::get('/login', 'JoinController@index');
    Route::post('/login', 'JoinController@login');
});
