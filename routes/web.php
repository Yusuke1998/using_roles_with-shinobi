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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ALL ROUTES
Route::middleware('auth')->group(function(){
	// Roles
	Route::get('roles/index','RoleController@index')->name('roles.index')->middleware('permission:roles.index');

	Route::post('roles/store','RoleController@store')->name('roles.store')->middleware('permission:roles.create');
	Route::get('roles/create','RoleController@create')->name('roles.create')->middleware('permission:roles.create');

	Route::get('roles/{role}/edit','RoleController@edit')->name('roles.edit')->middleware('permission:roles.edit');
	Route::put('roles/{role}','RoleController@update')->name('roles.update')->middleware('permission:roles.edit');

	Route::get('roles/{role}','RoleController@show')->name('roles.show')->middleware('permission:roles.show');
	
	Route::delete('roles/{role}','RoleController@destroy')->name('roles.destroy')->middleware('permission:roles.destroy');

	// Productos
	Route::get('productos/index','ProductController@index')->name('products.index')->middleware('permission:products.index');

	Route::post('productos/store','ProductController@store')->name('products.store')->middleware('permission:products.create');
	Route::get('productos/create','ProductController@create')->name('products.create')->middleware('permission:products.create');

	Route::get('productos/{role}/edit','ProductController@edit')->name('products.edit')->middleware('permission:products.edit');
	Route::put('productos/{role}','ProductController@update')->name('products.update')->middleware('permission:products.edit');

	Route::get('productos/{role}','ProductController@show')->name('products.show')->middleware('permission:products.show');
	
	Route::delete('productos/{role}','ProductController@destroy')->name('products.destroy')->middleware('permission:products.destroy');

	// Usuarios
	Route::get('usuarios/index','UserController@index')->name('users.index')->middleware('permission:users.index');

	Route::get('usuarios/{role}/edit','UserController@edit')->name('users.edit')->middleware('permission:users.edit');
	Route::put('usuarios/{role}','UserController@update')->name('users.update')->middleware('permission:users.edit');

	Route::get('usuarios/{role}','UserController@show')->name('users.show')->middleware('permission:users.show');
	
	Route::delete('usuarios/{role}','UserController@destroy')->name('users.destroy')->middleware('permission:users.destroy');
});