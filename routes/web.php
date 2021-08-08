<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/main', 'App\Http\Controllers\UserController@index');
Route::post('/main/checklogin', 'App\Http\Controllers\UserController@checkLogin');
Route::get('/main/successLogin', 'App\Http\Controllers\UserController@successLogin');

Route::get('/main/add/product', 'App\Http\Controllers\UserController@addProduct');
Route::post('/main/add/insertProduct', 'App\Http\Controllers\UserController@insertProduct');
