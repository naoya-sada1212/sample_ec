<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'ProductsController@index');

Route::get('/detail/{id}', 'ProductsController@viewDetail');

Route::get('/cart', 'ProductsController@viewCart')->middleware('auth');
Route::post('/cart', 'ProductsController@cartIn')->middleware('auth');

Route::delete('/cartdelete', 'ProductsController@delete');

Route::post('/check', 'ProductsController@checkOut');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
