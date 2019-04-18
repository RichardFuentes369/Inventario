<?php

namespace inventarios\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use inventarios\Category;
use inventarios\Provider;
use Laracasts\Flash\Flash;	
use Auth;

class CategoriesController extends Controller
{
	/***************************************************ADMINISTRADOR**************************************************/
    /*Mostrar Todas las Categorias*/
    public function allCategory(){
    	$category_list = DB::table('categories')->orderBy('id','asc')->paginate(10);
        return view('admin.views.categorias',compact('category_list'));
    }
    /*Crear Categorias*/
    public function createCategory(Request $request){
    	$category_name = $request->input('category_name');
    	$description = $request->input('description');	
    	$ultimate_id = DB::SELECT('SELECT id FROM categories order by id desc limit 1');
    	foreach ($ultimate_id as $ultimo_id) {
    		$ultimo_id = $ultimo_id -> id;
    	}
    	$existe = DB::SELECT('SELECT * FROM categories WHERE category_name = :varcategory',['varcategory' => $category_name]);
    	if($existe == false){
    		$c = new categories();
            if($ultimo_id == null){
                $c->id == 1;
            }else{
                $c->id = $ultimo_id + 1;
            }
            $c->category_name = $request->input('category_name');
            $c->description = $request->input('description');
            $c->companies_id = Auth::user()->companies->id;
            $c->save();
            Flash::success("Se ha registrado la categoria: ".$c->category_name. " de forma correcta");
            return redirect('administrador/categorias');
    	}else{
            Flash::error("No se pudo registrar la categoria: ".$category_name. " porque ya hay una categoria <br> registrada con el mismo nombre");
            return redirect('administrador/categorias');
    	}
    }
    /*Actualizar Categoria*/
    public function updateCategory(Request $request){
        $id = $request->input('id');
        $category_name = $request->input('category_name');
        $description = $request->input('description');
        $actualizar = DB::UPDATE('UPDATE categories set category_name = :varname, 
            description = :vardescription WHERE id = :varid',['varname' => $category_name,'vardescription' => $description,'varid' =>$id]);
        Flash::warning("Se ha actualizado el categoria con id: " .$id);
        return redirect('administrador/categorias');
    }
    /*Eliminar Categoria*/
    public function deleteCategory($id){
    	$existe = DB::DELETE('DELETE FROM categories WHERE id = :varid',['varid' => $id]);
        Flash::error("Se ha eliminado el año con id " . $id . " de forma correcta");
        return redirect('administrador/categorias');
    }
    /*Mostrar Todas las Categorias para hacer el inventario*/
    public function allCategoryInventoryA(){
        $category_list_inventory = Category::select('products.category_id as category_id','categories.category_name as category_name',DB::raw('count(*) as quantity'))
            ->join('products','categories.id','=','products.category_id')->groupBy('category_id')->orderBy('category_id','asc')
            ->paginate(10);
        $provider = Provider::all();
        return view('admin.views.inventarios',compact('category_list_inventory'))->with('provider',$provider);
    }
    /***************************************************VENDEDOR**************************************************/
    /*Mostrar Todas las Categorias para hacer el inventario*/
    public function allCategoryInventoryV(){
        $category_list_inventory = Category::select('products.category_id as category_id','categories.category_name as category_name',DB::raw('count(*) as quantity'))
            ->join('products','categories.id','=','products.category_id')->groupBy('category_id')->orderBy('category_id','asc')
            ->paginate(10);
        return view('seller.views.inventarios',compact('category_list_inventory'));
    }
}




