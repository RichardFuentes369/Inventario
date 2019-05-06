<?php

namespace inventarios\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use inventarios\Category;
use inventarios\Product;
use inventarios\Provider;
use Laracasts\Flash\Flash;

class ProductsController extends Controller
{
    /*************************************************ADMINISTRADOR*************************************************/
    /*Listar productos por categoria*/
    public function productsByCategoryA($id){
    	$category_name = DB::SELECT('SELECT category_name FROM categories WHERE id = :varid',['varid'=>$id]);
        $ListProductByCategory = Product::with('provider')->where('category_id',$id)->paginate(10);
        $provider = Provider::all();
    	return view('admin.views.productos')->with('ListProductByCategory',$ListProductByCategory)->with('category_name',$category_name)->with('provider',$provider); 
    }
    /*Crear producto*/
    public function createProduct(Request $request){
        $ultimate_id = DB::SELECT('SELECT id FROM products order by id desc limit 1');
        foreach ($ultimate_id as $ultimo_id) {
            $ultimo_id = $ultimo_id -> id;
        }
        $p = new Product();
        if($ultimo_id == null){
            $p->id == 1;
        }else{
            $p->id = $ultimo_id + 1;
        }
        $p->category_id = $request->input('id_category');
        $p->provider_id = $request->input('id_provider');
        $p->name = $request->input('name');
        $p->lote = $request->input('lote');
        $p->price = $request->input('price');
        $p->manufacturing_date = $request->input('manufacturing_date');
        $p->expiration_date = $request->input('expiration_date');
        $p->quantity = $request->input('quantity');
        $p->save();
        Flash::success("Se ha registrado el producto: ".$p->name. " de forma correcta");
        return redirect('administrador/inventariosV/'.$p->category_id);
    }
    /*Actualzar producto*/
    public function updateProduct(Request $request){
        $id = $request->input('uid');
        $provider_id = $request->input('uproviderid');
        $name = $request->input('uname');
        $lote = $request->input('ulote');
        $price = $request->input('uprice');
        $manufacturing_date = $request->input('umanufacturing_date');
        $expiration_date = $request->input('uexpiration_date');
        $quantity = $request->input('uquantity');
        if($provider_id == ""){
            $actualizar = DB::UPDATE('UPDATE products set name = :varname, lote = :varlote, price = :varprice, manufacturing_date = :varmanufacturing_date, expiration_date = :varexpiration_date, quantity = :varquantity WHERE id = :varid',['varname' => $name, 'varlote' => $lote, 'varprice' => $price, 'varmanufacturing_date' => $manufacturing_date, 'varexpiration_date' => $expiration_date, 'varquantity' => $quantity, 'varid' => $id]);
            Flash::warning("Se ha actualizado el producto con id: " .$id);
        }else{
            $actualizar = DB::UPDATE('UPDATE products set name = :varname, lote = :varlote, price = :varprice, manufacturing_date = :varmanufacturing_date, expiration_date = :varexpiration_date, quantity = :varquantity, provider_id = :varprovider_id WHERE id = :varid',['varname' => $name, 'varlote' => $lote, 'varprice' => $price, 'varmanufacturing_date' => $manufacturing_date, 'varexpiration_date' => $expiration_date, 'varquantity' => $quantity, 'varprovider_id' => $provider_id, 'varid' => $id]);
            Flash::warning("Se ha actualizado el producto con id: " .$id);
        }
        return back();
    }
    /*Borrar producto*/
    public function deleteproductsByCategoryA($id){
        $existe = DB::DELETE('DELETE FROM products WHERE id = :varid',['varid' => $id]);
        Flash::error("Se ha eliminado el estudiante con id " . $id . " de forma correcta");
        return back();
    }
    /*************************************************VENDEDOR*************************************************/
    /*Listar productos por categoria*/
    public function productsByCategoryV($id){
    	$category_name = DB::SELECT('SELECT category_name FROM categories WHERE id = :varid',['varid'=>$id]);
    	$ListProductByCategory = DB::table('products')->orderBy('id','asc')->where('category_id', $id)->paginate(10);
        $provider = Provider::all();
    	return view('seller.views.productos')->with('ListProductByCategory',$ListProductByCategory)->with('category_name',$category_name)->with('provider',$provider); 
    }
}
    