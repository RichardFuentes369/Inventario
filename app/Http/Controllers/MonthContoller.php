<?php

namespace inventarios\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use inventarios\Month;
use Laracasts\Flash\Flash;

class MonthContoller extends Controller
{

    /***************************************************ADMINISTRADOR**************************************************/
    /*Listar Meses y precios*/
	public function allMonthA(){
        $month_list = DB::table('months')->select(DB::raw('id,year,month,(select SUM(price) from invoices where month_id = months.id) as vendido'))->get();
    	return view('admin.views.meses')->with('month_list',$month_list);
	}

    /*Crear Meses*/
	public function monthCreateA(Request $request){	
    	$ultimate_id = DB::SELECT('SELECT id FROM months order by id desc limit 1');
    	foreach ($ultimate_id as $ultimo_id) {
    		$ultimo_id = $ultimo_id -> id;
    	}
    	$m = new Month();
   		if($ultimate_id == null){
            $m->id == 1;
        }else{
            $m->id = $ultimo_id + 1;
        }
        $m->month = $request->input('month');
        $m->year = $request->input('year');
        $m->compani_id =  Auth::user()->company->id;
        $m->save();
        
        Flash::success("Se ha creado el mes correctamente");
        return redirect('administrador/meses');
	}

    /*Eliminar Meses*/
	public function deleteMonthA(){
		return 'aqui estoy';
	}

    /***************************************************Veendedor**************************************************/
    /*Listar Meses y precios*/
    public function allMonthS(){
        $month_list = DB::table('months')->select(DB::raw('id,year,month,(select SUM(price) from invoices where month_id = months.id) as vendido'))->get();
        return view('seller.views.meses')->with('month_list',$month_list);
    }

    /*Crear Meses*/
    public function monthCreateS(Request $request){ 
        $ultimate_id = DB::SELECT('SELECT id FROM months order by id desc limit 1');
        foreach ($ultimate_id as $ultimo_id) {
            $ultimo_id = $ultimo_id -> id;
        }
        $m = new Month();
        if($ultimate_id == null){
            $m->id == 1;
        }else{
            $m->id = $ultimo_id + 1;
        }
        $m->month = $request->input('month');
        $m->year = $request->input('year');
        $m->compani_id =  Auth::user()->company->id;
        $m->save();
        
        Flash::success("Se ha creado el mes correctamente");
        return redirect('vendedor/meses');
    }
}
