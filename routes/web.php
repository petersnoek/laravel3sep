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
    return view('welcome');     // resources/views/welcome.blade.php
});

// http://localhost:8000/cart
Route::get('/cart', 'CartController@index');
Route::get('/cart/destroy', 'CartController@destroy');
Route::get('/cart/setamount/{id}/{amount}', 'CartController@setamount');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
