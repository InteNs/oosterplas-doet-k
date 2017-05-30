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
// Routes with page counter
Route::group(['middleware' => ['log']], function () {
    Route::get('/evenementen/{id}', 'ActivitiesController@show');
    Route::get('/evenementen', 'ActivitiesController@index');
    Route::get('/', 'MainController@index');
    Route::get('/bedrijven', 'CompanyController@index');
    Route::get('/contact', 'ContactController@index');
    Route::post('/contact', 'ContactController@post');
});
Route::group(['prefix' => 'beheer', 'middleware' => ['auth']], function () {
    Route::get('/', 'Admin\AdminController@index');
    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', 'Admin\SettingController@index');
        Route::put('/', 'Admin\SettingController@update');
        Route::get('slider', 'Admin\SettingController@slider');
        Route::put('slider', 'Admin\SettingController@editSlider');
        Route::delete('slider/{id}', 'Admin\SettingController@deleteSlider')->name('beheer.setting.slider');
    });
    Route::resource('activiteit', 'Admin\ActivityController');
    Route::resource('gebruiker', 'Admin\UserController');
    Route::resource('partner', 'Admin\PartnerController');
    Route::resource('sponsor', 'Admin\SponsorController');
    Route::resource('bericht', 'Admin\MessageController');
    Route::resource('abonnee', 'Admin\SubscriberController');
    Route::post('abonnee', 'Admin\SubscriberController@export');
});

Route::auth();
