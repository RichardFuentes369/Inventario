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

Route::group(['prefix'=>'index'], function(){	
	/*vistas*/
	Route::get('bienvenidos', function(){
		return view('home.views.index');
	});
	/*controladores*/
	Route::post('Login','LoginController@login');
});

Route::group(['prefix'=>'administrador'], function(){	
	/*vistas*/
	Route::get('bienvenidos', function(){
		return view('admin.views.index');
	});
});