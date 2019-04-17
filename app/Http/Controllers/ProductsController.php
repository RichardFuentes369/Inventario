<?php

namespace inventarios\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use inventarios\categories;
use inventarios\products;
use Laracasts\Flash\Flash;

class ProductsController extends Controller
{
    /*************************************************ADMINISTRADOR*************************************************/
    /*Listar productos por categoria*/
    public function productsByCategory($id){
    	$category_name = DB::SELECT('SELECT category_name FROM categories WHERE id = :varid',['varid'=>$id]);
    	$ListProductByCategory = DB::SELECT('SELECT * FROM products WHERE category_id = :varid',['varid'=>$id]);
    	return view('admin.views.productos',compact($ListProductByCategory))->with('category_name',$category_name); 
    }
}