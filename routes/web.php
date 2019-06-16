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
	Route::get('inventarios','CategoriesController@allCategoryInventoryA');
	Route::get('inventariosV/{id}','ProductsController@productsByCategoryA')->where(['id' => '[0-9]+']);
	Route::get('inventariosB/{id}','ProductsController@deleteproductsByCategoryA')->where(['id' => '[0-9]+']);
	Route::post('productosCI','ProductsController@createProduct2');
	Route::post('productosCC','ProductsController@createProduct1');
	Route::post('productosA','ProductsController@updateProduct');
	Route::get('empleados','UserController@allsellers');
	Route::post('empleadosC','UserController@createSeller');
	Route::post('empleadosA','UserController@updateSeller');
	Route::get('empleadosB/{id}', 'UserController@deleteSeller')->where(['id' => '[0-9]+']);
	Route::get('clientes','CustomersController@allcustomersA');
	Route::post('clientesC','CustomersController@createCustomersA');
	Route::post('clientesA','CustomersController@updateCustomersA');
	Route::get('clientesB/{id}', 'CustomersController@deleteCustomersA')->where(['id' => '[0-9]+']);
	Route::get('proveedores','ProvidersController@allproviders');
	Route::post('proveedoresC','ProvidersController@createProvider');
	Route::post('proveedoresA','ProvidersController@updateProvider');	
	Route::get('proveedoresB/{id}', 'ProvidersController@deleteProvider')->where(['id' => '[0-9]+']);

	Route::get('subirFacturaA','InvoicesController@desingUpInvoiceA');	
	Route::get('meses','MonthContoller@allMonthA');
	Route::post('mesesC','MonthContoller@monthCreateA');
	Route::get('mesesV/{id}','InvoicesController@allInvoiceA');
	Route::get('mesesB/{id}','MonthContoller@deleteMonthA');

	Route::get('facturarD','InvoicesController@desingA');
	Route::get('facturarD2/{id}','InvoicesController@byproducts');
	Route::get('facturasB/{id}','InvoicesController@deleteInvoiceA');
	Route::get('perfil','UserController@allpcu1');
	Route::post('ajustesA','UserController@actualizarA');
	Route::post('subirFA','InvoicesController@upInvoiceA');
});

Route::group(['prefix'=>'vendedor'], function(){	
	/*vistas*/
	Route::get('ajustes', function(){
		return view('seller.views.ajustes');
	});
	Route::get('inventarios', function(){
		return view('seller.views.inventarios');
	});
	Route::get('subirFacturaS', function(){
		return view('admin.views.subir-factura');
	});
	/*controladores*/
	Route::get('perfil','UserController@allc2');
	Route::get('clientes','CustomersController@allcustomersS');
	Route::post('clientesC','CustomersController@createCustomersV');
	Route::post('clientesA','CustomersController@updateCustomersV');
	Route::get('clientesB/{id}', 'CustomersController@deleteCustomerV')->where(['id' => '[0-9]+']);
	Route::get('inventarios','CategoriesController@allCategoryInventoryV');
	Route::get('inventariosV/{id}','ProductsController@productsByCategoryV')->where(['id' => '[0-9]+']);
	Route::post('ajustesV','UserController@actualizarV');

	Route::get('subirFacturaS','InvoicesController@desingUpInvoiceS');	
	Route::get('meses','MonthContoller@allMonthS');
	Route::post('mesesC','MonthContoller@monthCreateS');
	Route::get('mesesV/{id}','InvoicesController@allInvoiceS');
	Route::post('subirFV','InvoicesController@upInvoiceS');


	Route::get('facturarD','InvoicesController@desingS');
	Route::get('facturarD2/{id}','InvoicesController@byproducts');
	Route::get('facturasB/{id}','InvoicesController@deleteInvoiceS');
});

