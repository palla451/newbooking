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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users','UserController');

Route::resource('booking','BookingController');
Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'BookingController@myformAjax'));

Route::resource('progressbooking','ProgressBookingController');

Route::resource('headquarter','HeadquarterController');

Route::resource('production','ProductionController');

Route::resource('office','OfficeController');
