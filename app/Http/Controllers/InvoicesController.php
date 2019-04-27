<?php

namespace inventarios\Http\Controllers;

use Auth;
use inventarios\Category;
use inventarios\Invoices;
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
        $ListCustomer = DB::SELECT('SELECT * FROM Customers');
        $ListInvoices = DB::SELECT('SELECT * FROM Invoices order by id desc limit 1');
        $ListCategory = DB::SELECT('SELECT * FROM Categories');
        $ListProduct = DB::SELECT('SELECT * FROM Products');
    	return view('admin.views.facturar',compact('ListCustomer','ListInvoices','ListCategory','ListProduct'));
    }

    public function facturar(){
    	return 'creando factura';
    }

    public function buscarFactura(){
    	return 'buscar';
    }

    public function listarfactura($month,$day,$year,$customer){
    	return 'resultado';
    }
}
