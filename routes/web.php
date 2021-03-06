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
    Route::get('/activiteiten', 'ActivitiesController@index');
    Route::get('/activiteiten/{id}', 'ActivitiesController@show');
    Route::post('/activiteiten/{id}', 'ActivitiesController@store')->name('activity.submit.entry');
    Route::get('/', 'MainController@index');
    Route::get('/bedrijven', 'CompanyController@index');
    Route::get('/contact', 'ContactController@index');
    Route::post('/contact', 'ContactController@post');
    Route::get('/over-ons', 'EmployeeController@index');
    Route::get('/notulen', 'MinutesController@index');
    Route::get('/statuten', 'RegulationController@index');
    Route::get('/vacature', 'JobController@index');
});

Route::group(['prefix' => 'beheer', 'middleware' => ['auth']], function () {
    Route::get('/', 'Admin\AdminController@index');

    Route::group(['prefix' => 'profiel'], function () {
        Route::get('/', 'Admin\ProfileController@index');
        Route::get('reset', 'Admin\ProfileController@showResetForm');
        Route::post('reset', 'Admin\ProfileController@reset');
    });

    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', 'Admin\SettingController@index');
        Route::put('/', 'Admin\SettingController@update');
        Route::get('slider', 'Admin\SettingController@slider');
        Route::put('slider', 'Admin\SettingController@editSlider');
        Route::delete('slider/{id}', 'Admin\SettingController@deleteSlider')->name('beheer.setting.slider');
    });

    Route::resource('activiteit', 'Admin\ActivityController');
    Route::resource('entry', 'Admin\EntryController');
    Route::resource('gebruiker', 'Admin\UserController');
    Route::resource('partner', 'Admin\PartnerController');
    Route::resource('sponsor', 'Admin\SponsorController');
    Route::resource('bericht', 'Admin\MessageController');
    Route::resource('abonnee', 'Admin\SubscriberController');
    Route::resource('huiswerk', 'Admin\HomeworkController');
    Route::resource('employee', 'Admin\EmployeeController');
    Route::resource('notulen', 'Admin\MinutesBackendController');
    Route::resource('statuten', 'Admin\RegulationController');
    Route::resource('abonnee', 'Admin\SubscriberController');
    Route::post('abonnee', 'Admin\SubscriberController@export');
    Route::resource('job', 'Admin\JobController');
    Route::resource('rapportage', 'Admin\ReportController');
});

Route::auth();
