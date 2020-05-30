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
Route::get('/', 'AppController@index');

Auth::routes();
<<<<<<< HEAD
Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/patient','PatientController');
    });
=======

Route::middleware('auth')->group(function () {

    Route::get('/home', 'AppController@home')->name('home');
    Route::resource('/patient', 'PatientController');

});
>>>>>>> ae1c01c1582ae8fd98d9b2374f3e4782255553d2



