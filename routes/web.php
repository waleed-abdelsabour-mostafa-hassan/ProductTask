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
Route::get( '/', function () {
	return view( 'home' );
} );

Route::group( [ 'prefix' => '/admin','middleware'=>['auth' ]], function () {

	Route::prefix( 'products' )->group( function () {
		Route::get( '/', 'admin\ProductsController@index' )->name( 'admin.product.index' );
		Route::get( '/create', 'admin\ProductsController@create' )->name( 'admin.product.create' );
		Route::post( '/store', 'admin\ProductsController@store' )->name( 'admin.product.store' );
		Route::get( '/{product}/show', 'admin\ProductsController@show' )->name( 'admin.product.show' );
		Route::get( '/{product}/edit', 'admin\ProductsController@edit' )->name( 'admin.product.edit' );
		Route::put( '/{product}/update', 'admin\ProductsController@update' )->name( 'admin.product.update' );
		Route::delete( '/{product}/delete', 'admin\ProductsController@delete' )->name( 'admin.product.delete') ;
	    Route::post('product/search','admin\ProductsController@search' )->name('admin.product.search');

} );
	Route::prefix( 'saless' )->group( function () {
		Route::get( '/', 'admin\SalessController@index' )->name( 'admin.sales.index' );
		Route::get( '/create', 'admin\SalessController@create' )->name( 'admin.sales.create' );
		Route::post( '/store', 'admin\SalessController@store' )->name( 'admin.sales.store' );
		Route::delete( '/{sales}/delete', 'admin\SalessController@delete' )->name( 'admin.sales.delete') ;
	    Route::post('sales/search','admin\SalessController@search' )->name('admin.sales.search');
} );
} );
//users
Route::group( [ 'prefix' => '/user' ], function () {
	//router for users
	Route::group( [ 'prefix' => '/product' ], function () {
		//router for users
		Route::get('/' ,'user\ProductsController@index')->name('product.index');
        Route::post('user/search','user\ProductsController@search' )->name('user.search');
	} );
	
} );



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
