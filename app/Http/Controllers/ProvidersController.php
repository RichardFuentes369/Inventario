<?php

namespace inventarios\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProvidersController extends Controller
{
    /*ADMINISTRADOR*/
    /*Mostrar Todas los proveedores*/
    public function allproviders(){
    	$providers_list = DB::table('providers')->orderBy('id','asc')->get();
        return view('admin.views.proveedores',compact('providers_list'));
    }
}
