<?php

namespace inventarios\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProvidersController extends Controller
{
    /*ADMINISTRADOR*/
    /*Mostrar Todas los proveedores*/
    public function allproviders(){
    	$providers_list = DB::table('providers')->orderBy('id','asc')->paginate(10);
        return view('admin.views.proveedores',compact('providers_list'));
    }
    /*Eliminar proveedor*/
    public function deleteProvider(){
        return 'deleteProvider';
    }
}
