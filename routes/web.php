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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

    Route::get('/', 'ClientController@index')->name('index');
    Route::get('contacts', 'ClientController@contacts')->name('contacts');
    Route::get('models', 'ClientController@models')->name('models');
    Route::get('characteristics', 'ClientController@characteristics')->name('characteristics');
    Route::get('certificates', 'ClientController@certificates')->name('certificates');
    Route::get('patents', 'ClientController@patents')->name('patents');

});
