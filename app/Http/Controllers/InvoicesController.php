<?php

namespace inventarios\Http\Controllers;

use Auth;
use inventarios\Category;
use inventarios\Invoice;
use inventarios\Customer;
use inventarios\Product;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoicesController extends Controller
{
    /***************************************************ADMINISTRADOR**************************************************/
    /*Facturar*/
    /*Mostrar Todas las Facturas*/
    public function allInvoiceA(){
        $invoices_list = DB::table('invoices')->orderBy('id','asc')->paginate(10);
        return view('admin.views.descargar-factura',compact('invoices_list'));
    }
    /*Facturar obtener categorias (primera parte del metodo)*/
    public function desingA(Request $request){
        $ListCustomer = DB::SELECT('SELECT * FROM Customers');
        $ListCategory = DB::SELECT('SELECT * FROM Categories');
        $ListInvoices = DB::SELECT('SELECT nro_fact FROM invoices order by id desc limit 1');
        if($ListInvoices == null){
            $nro_fact = 1;
        }else{
            foreach ($ListInvoices as $nro_fact) {
                $nro_fact = $nro_fact -> nro_fact + 1; 
            } 
        }
        return view('admin.views.facturar',compact('ListCustomer','ListCategory'))->with('nro_fact',$nro_fact);
    }

    /*Metodo para obtener productos segun la categoria*/
    public function byproducts($id){
        return Product::where('category_id','=',$id)
        ->get();
    }

    /*Subir Facturas*/
    public function upInvoiceA(Request $request){
        $ultimate_id = DB::SELECT('SELECT id FROM invoices order by id desc limit 1');
        $ultimate_fact = DB::SELECT('SELECT nro_fact FROM invoices order by id desc limit 1');
        foreach ($ultimate_id as $ultimo_id) {
            $ultimo_id = $ultimo_id -> id;
        }
        foreach ($ultimate_fact as $ultimo_fact) {
            $ultimo_fact = $ultimo_fact -> nro_fact;
        }
        if($request->hasFile('archivosubido')){
            $file = $request->file('archivosubido');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/pdf/',$name);
        }
        
        $i = new Invoice();
        if($ultimate_id == null){
            $i->id == 1;
        }else{
            $i->id = $ultimo_id + 1;        
        }
        if($ultimate_fact == null){
            $i->nro_fact == 1;
        }else{
            $i->nro_fact = $ultimo_fact + 1;   
        }
        $i->price = $request->input('preciot');
        $i->user = Auth::user()->name.''.Auth::user()->lastname;
        $i->fecha = Carbon::now()->format('d-m-Y');
        $i->pdf = $name;
        $i->companies_id = Auth::user()->company->id;
        $i->save();
        
        Flash::success("Se ha creado su factura correctamente, con nombre: ".$name);
        return redirect('administrador/verFacturasA');
    }


    /*Borrar Facturas*/
    public function deleteInvoiceA($id){        
        $existe = DB::DELETE('DELETE FROM invoices WHERE id = :varid',['varid' => $id]);
        Flash::error("Se ha eliminado la factura con " . $id . " de forma correcta");
        return redirect('administrador/verFacturasA');
    }
    /***************************************************Vendedor**************************************************/
    /*Facturar*/
    /*Mostrar Todas las Facturas*/
    public function allInvoiceS(){
        $invoices_list = DB::table('invoices')->orderBy('id','asc')->paginate(10);
        return view('seller.views.descargar-factura',compact('invoices_list'));
    }
    /*Facturar obtener categorias (primera parte del metodo)*/
    public function desingS(Request $request){
        $ListCustomer = DB::SELECT('SELECT * FROM Customers');
        $ListCategory = DB::SELECT('SELECT * FROM Categories');
        $ListInvoices = DB::SELECT('SELECT nro_fact FROM invoices order by id desc limit 1');
        if($ListInvoices == null){
            $nro_fact = 1;
        }else{
            foreach ($ListInvoices as $nro_fact) {
                $nro_fact = $nro_fact -> nro_fact + 1; 
            } 
        }
        return view('seller.views.facturar',compact('ListCustomer','ListCategory'))->with('nro_fact',$nro_fact);
    }

    /*Subir Facturas*/
    public function upInvoiceS(Request $request){
        $ultimate_id = DB::SELECT('SELECT id FROM invoices order by id desc limit 1');
        $ultimate_fact = DB::SELECT('SELECT nro_fact FROM invoices order by id desc limit 1');
        foreach ($ultimate_id as $ultimo_id) {
            $ultimo_id = $ultimo_id -> id;
        }
        foreach ($ultimate_fact as $ultimo_fact) {
            $ultimo_fact = $ultimo_fact -> nro_fact;
        }
        if($request->hasFile('archivosubido')){
            $file = $request->file('archivosubido');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/pdf/',$name);
        }
        
        $i = new Invoice();
        if($ultimate_id == null){
            $i->id == 1;
        }else{
            $i->id = $ultimo_id + 1;        
        }
        if($ultimate_fact == null){
            $i->nro_fact == 1;
        }else{
            $i->nro_fact = $ultimo_fact + 1;   
        }
        $i->price = $request->input('preciot');
        $i->user = Auth::user()->name.''.Auth::user()->lastname;
        $i->fecha = Carbon::now()->format('d-m-Y');
        $i->pdf = $name;
        $i->companies_id = Auth::user()->company->id;
        $i->save();
        
        Flash::success("Se ha creado su factura correctamente, con nombre: ".$name);
        return redirect('vendedor/verFacturasS');
    }


    /*Borrar Facturas*/
    public function deleteInvoiceS($id){        
        $existe = DB::DELETE('DELETE FROM invoices WHERE id = :varid',['varid' => $id]);
        Flash::error("Se ha eliminado la factura con " . $id . " de forma correcta");
        return redirect('vendedor/verFacturasS');
    }
}




