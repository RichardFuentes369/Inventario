<?php

namespace inventarios\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CustomersController extends Controller
{
    /*ADMINISTRADOR*/
    /*Mostrar Todas los Clientess*/
    public function allcustomers(){
    	$customers_list = DB::table('customers')->orderBy('id','asc')->get();
        return view('admin.views.clientes',compact('customers_list'));
    }
}
