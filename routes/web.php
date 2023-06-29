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
Route::get('/', "Home@index");
Route::get('/product', "Product@index");
Route::get('/invoice', "Invoice@index");
Route::get('/customer', "Customer@index");
Route::get('invoice/detail', "Invoice@detail");
Route::get('product/detail', "Product@detail");
Route::get('customer/detail', "Customer@detail");
