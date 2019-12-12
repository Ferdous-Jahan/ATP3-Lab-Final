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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration', 'RegistrationController@index');
Route::post('/registration', 'RegistrationController@store');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@store');

Route::get('/admin','AdminController@index');
Route::get('/addmedicine', 'AdminController@create');
Route::post('/addmedicine', 'AdminController@store');
Route::get('/medicinelist', 'AdminController@medlist');
Route::get('/details/{id}', 'AdminController@show')->name('show');
Route::get('/edit/{id}', 'AdminController@edit')->name('edit');
Route::post('/edit/{id}', 'AdminController@update');
Route::get('/delete/{id}', 'AdminController@destroy')->name('delete');
Route::get('/customerlist', 'AdminController@customers');