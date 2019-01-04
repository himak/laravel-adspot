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
	return view('pages.home');
});


Route::get('ads', 'AdController@index')->name('ads.index');
Route::get('/ads/{id}', 'AdController@show')->name('ads.show')->where('id', '[0-9]+');
Route::get('/ads/create', 'AdController@create')->name('ads.create')->middleware('verified');
Route::post('/ads', 'AdController@store')->name('ads.store');


Route::get('/user/{id}', 'UserController@show');

Auth::routes( [ 'verify' => true ]);

Route::get('/dashboard', 'HomeController@index')->name('dashboard')->middleware('verified');



