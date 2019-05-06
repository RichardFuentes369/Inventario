<?php

namespace inventarios\Http\Controllers;

use Auth;
use inventarios\Customer;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CustomersController extends Controller
{
    /**********************************************************ADMINISTRADOR**********************************************************/
    /*Mostrar Todas los Clientess*/
    public function allcustomersA(){
    	$customers_list = DB::table('customers')->orderBy('id','asc')->paginate(10);
        return view('admin.views.clientes',compact('customers_list'));
    }
    /*Crear Cliente*/
    public function createCustomersA(Request $request){
        $dni = $request->input('dni');
        $ultimate_id = DB::SELECT('SELECT id FROM customers order by id desc limit 1');
        foreach ($ultimate_id as $ultimo_id) {
            $ultimo_id = $ultimo_id -> id;
        }
        $existe = DB::SELECT('SELECT * FROM customers WHERE dni = :vardni',['vardni' => $dni]);
        if($existe == false){
            $c = new Customer();
            if($ultimo_id == null){
                $c->id == 1;
            }else{
                $c->id = $ultimo_id + 1;
            }
            $c->name = $request->input('name');
            $c->lastname = $request->input('lastname');
            $c->birthdate = $request->input('fn');
            $c->document_type = $request->input('td');
            $c->dni = $request->input('dni');
            $c->sexo = $request->input('sexo');
            $c->phone = $request->input('phone');
            $c->cellphone = $request->input('cellphone');
            $c->address = $request->input('address');
            $c->department = $request->input('department');
            $c->county = $request->input('county');
            $c->neighborhood = $request->input('neighborhood');
            $c->email = $request->input('email');
            $c->companies_id = Auth::user()->company->id;
            $c->save();
            Flash::success("Se ha registrado el cliente: ".$c->name." ".$c->lastname   . " de forma correcta");
            return redirect('administrador/clientes');
        }else{
            Flash::error("No se pudo registrar el cliente con dni: ".$dni. " porque ya hay un cliente <br> registrado con el mismo dni");
            return redirect('administrador/clientes');
        }
    }
    /*Editar Cliente*/
    public function updateCustomersA(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $dni = $request->input('dni');
        $birthdate = $request->input('fn');
        $phone = $request->input('phone');
        $cellphone = $request->input('cellphone');
        $address = $request->input('address');
        $department = $request->input('department');
        $county = $request->input('county');
        $neighborhood = $request->input('neighborhood');        
        $email = $request->input('email');
        $actualizar = DB::UPDATE('UPDATE customers set name = :varname, 
            lastname = :varlastname, dni = :vardni, birthdate = :varfn, phone = :varphone, cellphone = :varcellphone,
            address = :varaddress, department = :vardepartament, county = :varcounty, neighborhood = :varneighborhood,
            email = :varemail  WHERE id = :varid',['varname' => $name,'varlastname' => $lastname,'vardni' => $dni,'varfn' => $birthdate,'varphone' => $phone,'varcellphone' => $cellphone,'varaddress' => $address,'vardepartament' => $department,'varcounty' => $county,'varneighborhood' => $neighborhood,'varemail' => $email,'varid' => $id]);
        Flash::warning("Se ha actualizado el cliente con id: " .$id);
        return redirect('administrador/clientes');
    }
    /*Eliminar Cliente*/
    public function deleteCustomersA($id){
        $existe = DB::DELETE('DELETE FROM customers WHERE id = :varid',['varid' => $id]);
        Flash::error("Se ha eliminado el cliente con " . $id . " de forma correcta");
        return redirect('administrador/clientes');
    }

    /*VENDEDOR*/
    /*Mostrar Todas los Clientess*/
    public function allcustomersS(){
    	$customers_list = DB::table('customers')->orderBy('id','asc')->paginate(10);
        return view('seller.views.clientes',compact('customers_list'));
    }    
    /*Crear Cliente*/
    public function createCustomersV(Request $request){
        $dni = $request->input('dni');
        $ultimate_id = DB::SELECT('SELECT id FROM customers order by id desc limit 1');
        foreach ($ultimate_id as $ultimo_id) {
            $ultimo_id = $ultimo_id -> id;
        }
        $existe = DB::SELECT('SELECT * FROM customers WHERE dni = :vardni',['vardni' => $dni]);
        if($existe == false){
            $c = new Customer();
            if($ultimo_id == null){
                $c->id == 1;
            }else{
                $c->id = $ultimo_id + 1;
            }
            $c->name = $request->input('name');
            $c->lastname = $request->input('lastname');
            $c->birthdate = $request->input('fn');
            $c->document_type = $request->input('td');
            $c->dni = $request->input('dni');
            $c->sexo = $request->input('sexo');
            $c->phone = $request->input('phone');
            $c->cellphone = $request->input('cellphone');
            $c->address = $request->input('address');
            $c->department = $request->input('department');
            $c->county = $request->input('county');
            $c->neighborhood = $request->input('neighborhood');
            $c->email = $request->input('email');
            $c->companies_id = Auth::user()->company->id;
            $c->save();
            Flash::success("Se ha registrado el cliente: ".$c->name." ".$c->lastname   . " de forma correcta");
            return redirect('vendedor/clientes');
        }else{
            Flash::error("No se pudo registrar el cliente con dni: ".$dni. " porque ya hay un cliente <br> registrado con el mismo dni");
            return redirect('vendedor/clientes');
        }
    }
    /*Editar Cliente*/
    public function updateCustomersV(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $dni = $request->input('dni');
        $birthdate = $request->input('fn');
        $phone = $request->input('phone');
        $cellphone = $request->input('cellphone');
        $address = $request->input('address');
        $department = $request->input('department');
        $county = $request->input('county');
        $neighborhood = $request->input('neighborhood');        
        $email = $request->input('email');
        $actualizar = DB::UPDATE('UPDATE customers set name = :varname, 
            lastname = :varlastname, dni = :vardni, birthdate = :varfn, phone = :varphone, cellphone = :varcellphone,
            address = :varaddress, department = :vardepartament, county = :varcounty, neighborhood = :varneighborhood,
            email = :varemail  WHERE id = :varid',['varname' => $name,'varlastname' => $lastname,'vardni' => $dni,'varfn' => $birthdate,'varphone' => $phone,'varcellphone' => $cellphone,'varaddress' => $address,'vardepartament' => $department,'varcounty' => $county,'varneighborhood' => $neighborhood,'varemail' => $email,'varid' => $id]);
        Flash::warning("Se ha actualizado el cliente con id: " .$id);
        return redirect('administrador/clientes');
    }
    /*Eliminar Cliente*/
    public function deleteCustomersV($id){
        $existe = DB::DELETE('DELETE FROM customers WHERE id = :varid',['varid' => $id]);
        Flash::error("Se ha eliminado el cliente con " . $id . " de forma correcta");
        return redirect('vendedor/clientes');
    }
}
