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

Route::get('/activiteitenkalender', 'CalendarController@calendar');
Route::get('/', 'MainController@index');
Route::get('/partners', 'PartnerController@index');

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
});

Route::auth();
