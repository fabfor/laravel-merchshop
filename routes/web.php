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
    //products routes
    Route::get('/prodotti', 'ProductController@index')->name('products.index');

    Route::get('/prodotti/nuovo', 'ProductController@create')->name('products.create');
    Route::post('/prodotti/nuovo', 'ProductController@save')->name('products.save');

    Route::get('/prodotti/modifica/{product}', 'ProductController@edit')->name('products.edit');
    Route::post('/prodotti/modifica/{product}', 'ProductController@change')->name('products.change');

    Route::get('/prodotti/cancella/{product}', 'ProductController@delete')->name('products.delete');

    //categories routes
    Route::get('/categorie', 'CategoryController@index')->name('categories.index');
    Route::get('/categorie/prodotti/{category}', 'CategoryController@products')->name('categories.products');

    Route::get('/categorie/nuovo', 'CategoryController@create')->name('categories.create');
    Route::post('/categorie/nuovo', 'CategoryController@save')->name('categories.save');

    Route::get('/categorie/modifica/{category}', 'CategoryController@edit')->name('categories.edit');
    Route::post('/categorie/modifica/{category}', 'CategoryController@change')->name('categories.change');

    Route::get('/categorie/cancella/{category}', 'CategoryController@delete')->name('categories.delete');

    // Rotte Utenti
    Route::get('/utenti', 'UserController@index')->name('users.index');

    // Rotte Ordini
    Route::get('/ordini', 'OrderController@index')->name('orders.index');

});

Route::get('/prodotti', 'ShopController@index')->name('shop.index');
