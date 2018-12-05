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
    Route::get('/', function()
    {
        return View::make('page.main');
    })->name('index');

    Route::get('main',function(){
        return View::make('page.main');
    });

    Route::get('contacts',function(){
        return View::make('page.contacts');
    })->name('contacts');

    Route::get('models',function(){
        return View::make('page.models');
    })->name('models');
    Route::get('characteristics',function(){
        return View::make('page.characteristics');
    })->name('characteristics');
});
