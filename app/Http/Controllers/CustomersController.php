<?php

namespace inventarios\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CustomersController extends Controller
{
    /*ADMINISTRADOR*/
    /*Mostrar Todas los Clientess*/
    public function allcustomersA(){
    	$customers_list = DB::table('customers')->orderBy('id','asc')->get();
        return view('admin.views.clientes',compact('customers_list'));
    }

    /*VENDEDOR*/
    /*Mostrar Todas los Clientess*/
    public function allcustomersS(){
    	$customers_list = DB::table('customers')->orderBy('id','asc')->get();
        return view('seller.views.clientes',compact('customers_list'));
    }
}
