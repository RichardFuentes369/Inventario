<?php

namespace inventarios\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
	/*ADMINISTRADOR*/
    /*Mostrar Todas las Categorias*/
    public function allcategory(){
    	$category_list = DB::table('categories')->orderBy('id','asc')->get();
        return view('admin.views.categorias',compact('category_list'));
    }
}
