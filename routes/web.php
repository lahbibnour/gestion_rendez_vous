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


