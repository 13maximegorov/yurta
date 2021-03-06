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
Route::get('/card/info', 'MainController@cardInfo');
Route::get('/page/{alias}', 'PageController@index');
Route::post('/feedback', 'FeedbackController@index');

// Панель управления Yurtaboard
Route::group([
    'prefix' => '/yurtaboard',
    'namespace' => 'Admin',
    'middleware' => 'notAdmin'
], function () {
    Route::get('/', 'CardsController@cards');
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

    Route::get('/service', 'ServiceController@index');
    Route::get('/service/edit/{id}', 'ServiceController@service');
    Route::post('/service/edit/{id}', 'ServiceController@serviceEdit');

    Route::get('/sections/edit/welcome/{id}', 'SectionController@welcome');
    Route::post('/sections/edit/welcome/{id}', 'SectionController@editWelcome');
    Route::get('/sections/edit/about/{id}', 'SectionController@about');
    Route::post('/sections/edit/about/{id}', 'SectionController@editAbout');
    Route::get('/sections/edit/slider/{id}', 'SectionController@slider');

    Route::get('/nav', 'NavigationController@index');
    Route::post('/nav/save', 'NavigationController@save');

    Route::get('/feedback', 'FeedbackController@index');
    Route::get('/feedback/delete/{id}', 'FeedbackController@deleteFeedback');
    Route::get('/feedback/edit/{id}', 'FeedbackController@feedback');
    Route::post('/feedback/edit/{id}', 'FeedbackController@editFeedback');

    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    // list all lfm routes here...
});

// Аутентификация
Route::group([
    'prefix' => '/yurtaboard',
    'namespace' => 'Admin',
    'middleware' => 'isAdmin'
], function () {
    Route::get('/login', 'JoinController@index');
    Route::post('/login', 'JoinController@login');
});
