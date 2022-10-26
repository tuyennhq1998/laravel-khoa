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
Route::get('/index', 'HomeController@index');
Route::get('/services', 'HomeController@services');
Route::get('/products', 'HomeController@products');
Route::get('/blog', 'HomeController@blog');
Route::get('/contacts', 'HomeController@contacts');
Route::get('/product/detail', 'HomeController@productDetail');

