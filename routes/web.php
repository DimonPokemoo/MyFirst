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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/contacts', 'IndexController@contacts')->name('contacts');
Route::get('/users', 'UsersController@index')->name('users');
Route::get('/users/add', 'UsersController@add')->name('users.add');
Route::get('/offers', 'OffersController@index')->name('offers');
Route::get('/offers/add', 'OffersController@add')->name('offers.add');
Route::get('/offers/{id}/edit', 'OffersController@edit')->name('offers.edit');
Route::get('/offers/{id}/delete','OffersController@delete')->name('delete.offer')->Middleware('editBlock');
Route::post('/offers/add', 'OffersController@submit')->name('submit');
Route::post('/offers/{id}/edit','OffersController@update')->name('update');
Route::get('/users/{id}/edit', 'UsersController@edit')->name('user.edit');
Route::get('/users/{id}/delete','UsersController@delete')->name('delete.user');
//Route::post('/users/{id}/edit', 'UsersController@edit')->name('user.post');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
