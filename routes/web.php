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


Route::middleware('auth')->group(function () {

    Route::get('/home', 'AppController@home')->name('home');
    //Route::get('/rdv/{patient_id}', 'RdvController@getRdv');
    Route::resource('/patient', 'PatientController');
    Route::resource('/rendez_vs', 'RdvController');
    Route::resource('/rdv', 'RdvController');
    Route::resource('/consultation', 'ConsultationController');
    //Route::get('/patient/{patient_id}', 'JoinController@GetRdv');
    Route::get('contact' , 'ContactController@create')->name('contact.create');
Route::post('contact' , 'ContactController@store');
Route::get('/consultation/{patient_id}/{rdv_id}' , 'ConsultationController@consulter')->name('consultation');

});


//21/05/2020









