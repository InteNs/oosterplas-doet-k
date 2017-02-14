<?php

/*
|--------------------------------------------------------------------------
| Configuration registered by manager (Qafeen/Manager)
|--------------------------------------------------------------------------
|
| Here we will store configuration added by manager
| Note: It is better to store in separate file to know which service provider
| or facades was registered by (Qafeen/Manager)
|
*/

return [

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [
        Modelizer\Selenium\SeleniumServiceProvider::class
    ],


    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [
        
    ],

];
