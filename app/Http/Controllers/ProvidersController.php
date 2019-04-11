<?php

namespace inventarios\Http\Controllers;

use inventarios\providers;
use Laracasts\Flash\Flash;
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
    /*Crear proveedor*/
    public function createProvider(Request $request){
        $nit = $request->input('nit');
        $ultimate_id = DB::SELECT('SELECT id FROM providers order by id desc limit 1');
        foreach ($ultimate_id as $ultimo_id) {
            $ultimo_id = $ultimo_id -> id;
        }
        $existe = DB::SELECT('SELECT * FROM providers WHERE nit = :varnit',['varnit' => $nit]);
        if($existe == false){
            $p = new providers();
            if($ultimo_id == null){
                $p->id == 1;
            }else{
                $p->id = $ultimo_id + 1;
            }
            $p->nit = $request->input('nit');
            $p->business_name = $request->input('business_name');
            $p->country = $request->input('country');
            $p->department = $request->input('department');
            $p->county = $request->input('county');
            $p->neighborhood = $request->input('neighborhood');
            $p->address = $request->input('address');
            $p->phone1 = $request->input('phone1');
            $p->phone2 = $request->input('phone2');
            $p->cellphone1 = $request->input('cellphone1');
            $p->cellphone2 = $request->input('cellphone2');
            $p->description = $request->input('description');
            $p->save();
            Flash::success("Se ha registrado el proveedor: ".$p->business_name." de forma correcta");
            return redirect('administrador/proveedores');
        }else{
            Flash::error("No se pudo registrar la emprea con NIT: ".$nit. " porque ya hay una empresa <br> registrado con el mismo NIT");
            return redirect('administrador/proveedores');
        }
    }
    /*Editar proveedor*/
    public function updateProvider(Request $request){
        $id = $request->input('id');
        $nit = $request->input('nit');
        $business_name = $request->input('business_name');
        $country = $request->input('country');
        $department = $request->input('department');
        $county = $request->input('county');
        $neighborhood = $request->input('neighborhood');
        $address = $request->input('address');
        $phone1 = $request->input('phone1');
        $phone2 = $request->input('phone2');
        $cellphone1 = $request->input('cellphone1');
        $cellphone2 = $request->input('cellphone2');
        $description = $request->input('description');
        $actualizar = DB::UPDATE('UPDATE providers set nit = :varnit, 
            business_name = :varbusiness_name, country = :varcountry, department = :vardepartament, county = :varcounty, neighborhood = :varneighborhood, address = :varaddress, phone1 = :varphone1, phone2 = :varphone2, cellphone1 = :varcellphone1, cellphone2 = :varcellphone2, description = :vardescription  WHERE id = :varid',['varnit' => $nit,'varbusiness_name' => $business_name,'varcountry' => $country,'vardepartament' => $department,'varcounty' => $county,'varneighborhood' => $neighborhood,'varaddress' => $address,'varphone1' => $phone1,'varphone2' => $phone2,'varcellphone1' => $cellphone1,'varcellphone2' => $cellphone2,'vardescription' => $description,'varid' => $id]);
        Flash::warning("Se ha actualizado el proveedor con id: " .$id);
        return redirect('administrador/proveedores');
    }
    /*Eliminar proveedor*/
    public function deleteProvider($id){
        $existe = DB::DELETE('DELETE FROM providers WHERE id = :varid',['varid' => $id]);
        Flash::error("Se ha eliminado el proveedor con " . $id . " de forma correcta");
        return redirect('administrador/proveedores');
    }
}
    