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

Route::get('/', 'FrontController@userType')->name('whoU');
// Route::get('user_type', 'FrontController@userType')->name('user_type');
Route::get('welcome', 'FrontController@index')->name('index');
Route::get('verification/{type}', 'FrontController@verification')->name('verification');
Route::get('basic_details', 'FrontController@basicDetails')->name('basic_details');
Route::get('category', 'FrontController@category')->name('category');
Route::get('categories', 'FrontController@categories')->name('categories');
Route::get('products', 'FrontController@products')->name('products');
Route::get('seller/{cmd}', 'FrontController@seller')->name('seller');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// COMMOM
Route::get('select/{type}', 'FrontController@select')->name('select');

// SELLER
Route::get('supplier/welcome', 'SellerController@index')->name('index');