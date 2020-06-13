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

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
//<<<<<<< HEAD
Route::resource('/patient','PatientController');

//=======
Route::get('/medecin', 'MedecinController@test')->name('medecin')->middleware('auth');
Route::get('/secretaire', 'SecretaireController@test2')->name('secretaire')->middleware('auth');




//>>>>>>> interface se connecter
Route::resource('/rendez_vs' , 'RdvController');

//21/05/2020

Route::resource('/consultation', 'ConsultationController');
//2/6/2020

Route::get('/today' , 'ConsultationController@today');

//6-6-2020

//contact

Route::get('contact' , 'ContactController@create')->name('contact.create');
Route::post('contact' , 'ContactController@store');

Route::get('/consultation/{patient_id}/{rdv_id}' , 'ConsultationController@consulter')->name('consultation');
Route::get('/rendez_vs/{patient_id}' , 'RdvController@show2')->name('rendez_vs.show2');
