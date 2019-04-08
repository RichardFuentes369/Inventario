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
	Route::get('Logout','LoginController@logout');
});

Route::group(['prefix'=>'administrador'], function(){	
	/*vistas*/
	Route::get('bienvenidos', function(){
		return view('admin.views.index');
	});
	Route::get('inventarios', function(){
		return view('admin.views.inventarios');
	});
	Route::get('ingresos', function(){
		return view('admin.views.ingresos');
	});
	Route::get('gastos', function(){
		return view('admin.views.gastos');
	});
	Route::get('costos', function(){
		return view('admin.views.costos');
	});
	Route::get('ajustes', function(){
		return view('admin.views.ajustes');
	});

	/*controladores*/
	Route::get('categorias','CategoriesController@allCategory');
	Route::post('categoriasC','CategoriesController@createCategory');
	Route::post('categoriasA','CategoriesController@updateCategory');
	Route::get('categoriasB/{id}', 'CategoriesController@deleteCategory')->where(['id' => '[0-9]+']);
	Route::get('clientes','CustomersController@allcustomersA');
	Route::get('empleados','UserController@allsellers');
	Route::get('proveedores','ProvidersController@allproviders');
	Route::get('perfil','UserController@allpcu1');
});

Route::group(['prefix'=>'vendedor'], function(){	
	/*vistas*/
	Route::get('ajustes', function(){
		return view('seller.views.ajustes');
	});
	Route::get('inventarios', function(){
		return view('seller.views.inventarios');
	});
	Route::get('devoluciones', function(){
		return view('seller.views.devoluciones');
	});
	Route::get('ventas', function(){
		return view('seller.views.ventas');
	});
	Route::get('gastos', function(){
		return view('seller.views.gastos');
	});
	/*controladores*/
	Route::get('perfil','UserController@allc2');
	Route::get('clientes','CustomersController@allcustomersS');
});