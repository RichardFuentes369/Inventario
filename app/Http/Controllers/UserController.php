<?php

namespace inventarios\Http\Controllers;

use inventarios\User;
use inventarios\providers;
use inventarios\customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /*ADMINISTRADOR*/
    /*Listar Proveedores, Empleados, Clientes*/
    public function allpcu1(){
    	$users_list = User::all();
    	$providers_list = providers::all();
    	$customers_list = customers::all();
    	return view('admin.views.perfil')->with('users_list',$users_list)->with('providers_list',$providers_list)->with('customers_list',$customers_list);
    }    
    /*Mostrar Todas los empleados*/
    public function allsellers(){
    	$users_list = DB::table('users')->orderBy('id','asc')->where('category','seller')->paginate(10);
        return view('admin.views.empleados',compact('users_list'));
    }
    /*Crear Empleado*/
    public function createSeller(Request $request){
        return 'createSeller';
    }
    /*Editar Empleado*/
    public function updateSeller(Request $request){
        return 'updateSeller';
    }
    /*Eliminar Empleado*/
    public function deleteSeller($id){
        return 'deleteSeller';
    }


    /*VENDEDOR*/
    /*Clientes*/
    public function allc2(){
        $customers_list = customers::all();
        return view('seller.views.perfil')->with('customers_list',$customers_list);
    } 
}

	