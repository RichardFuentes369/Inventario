<?php

namespace inventarios\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CustomersController extends Controller
{
    /*ADMINISTRADOR*/
    /*Mostrar Todas los Clientess*/
    public function allcustomersA(){
    	$customers_list = DB::table('customers')->orderBy('id','asc')->paginate(10);
        return view('admin.views.clientes',compact('customers_list'));
    }
    /*Eliminar cliente*/
    public function deleteCustomer(){
        return 'deleteCustomer';
    }

    /*VENDEDOR*/
    /*Mostrar Todas los Clientess*/
    public function allcustomersS(){
    	$customers_list = DB::table('customers')->orderBy('id','asc')->paginate(10);
        return view('seller.views.clientes',compact('customers_list'));
    }
    /*Eliminar cliente*/
    public function deleteCustomer2(){
        return 'deleteCustomer';
    }
}
