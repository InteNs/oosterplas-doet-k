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
Route::get('/partners', 'PartnerFrontController@index');

Route::group(['prefix' => 'beheer', 'middleware' => ['auth']], function () {
    Route::get('/', 'Admin\AdminController@index');
    Route::get('setting', 'Admin\SettingController@index');
    Route::put('setting', 'Admin\SettingController@update');
    Route::resource('activiteit', 'Admin\ActivityController');
    Route::resource('categorie', 'Admin\CategoryController');
    Route::resource('gebruiker', 'Admin\UserController');
    Route::resource('partner', 'Admin\PartnerController');
});

Route::auth();
