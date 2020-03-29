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

Route::group(['middleware' => ['auth']], function(){
  Route::get('/cart', 'ProductsController@viewCart');
  Route::post('/cart', 'ProductsController@cartIn');
  Route::post('/cartdelete', 'ProductsController@delete');
  Route::post('/check', 'ProductsController@checkOut');
});

Route::get('/detail/{id}', 'ProductsController@viewDetail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
