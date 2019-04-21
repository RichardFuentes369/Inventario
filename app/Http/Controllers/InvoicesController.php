<?php

namespace inventarios\Http\Controllers;

use Auth;
use inventarios\Category;
use inventarios\Customer;
use inventarios\Product;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoicesController extends Controller
{
    /***************************************************ADMINISTRADOR**************************************************/
    /*Facturar*/
    public function desingA(){
    	/*Listar clientes, listar categorias, luego listar productos de la categoria, y luego cantidades*/
    	return view('admin.views.facturarD');
    }
}
