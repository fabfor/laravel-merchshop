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

//rotte di admin
Route::prefix('admin')->group(function () {
  Route::get('/prodotti', 'ProductController@index')->name('products.index');

  Route::get('/prodotti/nuovo', 'ProductController@create')->name('products.create');
  Route::post('/prodotti/nuovo', 'ProductController@save')->name('products.save');

  Route::get('/prodotti/modifica/{product}', 'ProductController@edit')->name('products.edit');
  Route::post('/prodotti/modifica/{product}', 'ProductController@change')->name('products.change');

  Route::get('/prodotti/cancella/{product}', 'ProductController@delete')->name('products.delete');
});

Route::get('/prodotti', 'ShopController@index')->name('shop.index');
