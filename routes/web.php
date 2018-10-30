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

Route::get('/', 'HomeController@index');

//product routes
Route::get('/prodotti', 'ProductController@index')->name('products.index');
Route::get('/prodotti/nuovo', 'ProductController@create')->name('products.create');
Route::post('/prodotti/nuovo', 'ProductController@save')->name('products.save');
