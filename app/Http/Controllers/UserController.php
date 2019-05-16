<?php

namespace inventarios\Http\Controllers;

use Auth;
use inventarios\User;
use Laracasts\Flash\Flash;  
use inventarios\Provider;
use inventarios\Customer;
use inventarios\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**********************************************************ADMINISTRADOR*********************************************************/
    /*Listar Proveedores, Empleados, Clientes*/
    public function allpcu1(){
    	$users_list = User::all();
    	$providers_list = Provider::all();
    	$customers_list = Customer::all();
    	return view('admin.views.perfil')->with('users_list',$users_list)->with('providers_list',$providers_list)->with('customers_list',$customers_list);
    }    
    /*Mostrar Todas los empleados*/
    public function allsellers(){
    	$users_list = DB::table('users')->orderBy('id','asc')->where('category','seller')->paginate(10);
        return view('admin.views.empleados',compact('users_list'));
    }
    /*Crear Empleado*/
    public function createSeller(Request $request){
        $dni = $request->input('dni');
        $ultimate_id = DB::SELECT('SELECT id FROM users order by id desc limit 1');
        foreach ($ultimate_id as $ultimo_id) {
            $ultimo_id = $ultimo_id -> id;
        }
        $existe = DB::SELECT('SELECT * FROM users WHERE dni = :vardni',['vardni' => $dni]);
        if($existe == false){
            $u = new User();
            if($ultimo_id == null){
                $u->id == 1;
            }else{
                $u->id = $ultimo_id + 1;
            }
            $u->name = $request->input('name');
            $u->lastname = $request->input('lastname');
            $u->birthdate = $request->input('fn');
            $u->document_type = $request->input('td');
            $u->dni = $request->input('dni');
            $u->sexo = $request->input('sexo');
            $u->phone = $request->input('phone');
            $u->cellphone = $request->input('cellphone');
            $u->address = $request->input('address');
            $u->department = $request->input('department');
            $u->county = $request->input('county');
            $u->neighborhood = $request->input('neighborhood');
            $u->email = $request->input('email');
            $u->category = "seller";
            $u->companies_id = Auth::user()->company->id;
            $u->save();
            Flash::success("Se ha registrado el empleado: ".$u->name." ".$u->lastname   . " de forma correcta");
            return redirect('administrador/empleados');
        }else{
            Flash::error("No se pudo registrar el empleado con dni: ".$dni. " porque ya hay un empleado <br> registrado con el mismo dni");
            return redirect('administrador/empleados');
        }
    }
    /*Editar Empleado*/
    public function updateSeller(Request $request){
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
        $actualizar = DB::UPDATE('UPDATE users set name = :varname, 
            lastname = :varlastname, dni = :vardni, birthdate = :varfn, phone = :varphone, cellphone = :varcellphone,
            address = :varaddress, department = :vardepartament, county = :varcounty, neighborhood = :varneighborhood,
            email = :varemail  WHERE id = :varid',['varname' => $name,'varlastname' => $lastname,'vardni' => $dni,'varfn' => $birthdate,'varphone' => $phone,'varcellphone' => $cellphone,'varaddress' => $address,'vardepartament' => $department,'varcounty' => $county,'varneighborhood' => $neighborhood,'varemail' => $email,'varid' => $id]);
        Flash::warning("Se ha actualizado el categoria con id: " .$id);
        return redirect('administrador/empleados');
    }
    /*Eliminar Empleado*/
    public function deleteSeller($id){
        $existe = DB::DELETE('DELETE FROM users WHERE id = :varid',['varid' => $id]);
        Flash::error("Se ha eliminado el empleado con " . $id . " de forma correcta");
        return redirect('administrador/empleados');
    }
    /*Ajustes Administrador*/
    public function actualizarA(Request $request){
        $name = $request->input('name');
        $lastname = $request->input('lastname');  
        $email = $request->input('email');  
        $dni = $request->input('dni');
        $sexo = $request->input('sexo');
        $phone = $request->input('phone');
        $birthdate = $request->input('birthdate');
        $cellphone = $request->input('cellphone');
        $password = $request->input('password');
        $passwordencriptada = bcrypt($password);
        if($password == ""){
            $actualizar = DB::UPDATE('UPDATE Users set name = :varname, lastname = :varlastname, email = :varcorreo,
             sexo = :varsexo, phone = :varphone, cellphone = :varcellphone, birthdate = :varbirthdate
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'varcorreo' => $email,'varsexo' => $sexo,'varphone' => $phone,'varbirthdate' => $birthdate,'varcellphone' => $cellphone, 'vardni' =>$dni]);
            Flash::warning("Sus datos han sido actualizados correctamente");
            return back();
        }else{
            $actualizar = DB::UPDATE('UPDATE Users set name = :varname, lastname = :varlastname, email = :varcorreo,
             sexo = :varsexo, phone = :varphone, cellphone = :varcellphone, birthdate = :varbirthdate, password = :varpassword
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'varcorreo' => $email,'varsexo' => $sexo,'varphone' => $phone,'varbirthdate' => $birthdate,'varcellphone' => $cellphone,'varpassword' => $passwordencriptada, 'vardni' =>$dni]);
            Auth::logout();
            return redirect('/');
        }
    }


    /**************************************************************VENDEDOR**********************************************************/
    /*Clientes*/
    public function allc2(){
        $customers_list = Customer::all();
        return view('seller.views.perfil')->with('customers_list',$customers_list);
    }
    /*Ajustes vendedor*/
    public function actualizarV(Request $request){
        $name = $request->input('name');
        $lastname = $request->input('lastname');  
        $email = $request->input('email');  
        $dni = $request->input('dni');
        $sexo = $request->input('sexo');
        $phone = $request->input('phone');
        $birthdate = $request->input('birthdate');
        $cellphone = $request->input('cellphone');
        $password = $request->input('password');
        $passwordencriptada = bcrypt($password);
        if($password == ""){
            $actualizar = DB::UPDATE('UPDATE Users set name = :varname, lastname = :varlastname, email = :varcorreo,
             sexo = :varsexo, phone = :varphone, cellphone = :varcellphone, birthdate = :varbirthdate
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'varcorreo' => $email,'varsexo' => $sexo,'varphone' => $phone,'varbirthdate' => $birthdate,'varcellphone' => $cellphone, 'vardni' =>$dni]);
            Flash::warning("Sus datos han sido actualizados correctamente");
            return back();
        }else{
            $actualizar = DB::UPDATE('UPDATE Users set name = :varname, lastname = :varlastname, email = :varcorreo,
             sexo = :varsexo, phone = :varphone, cellphone = :varcellphone, birthdate = :varbirthdate, password = :varpassword
            WHERE dni = :vardni',['varname' => $name,'varlastname' => $lastname,'varcorreo' => $email,'varcorreo' => $email,'varsexo' => $sexo,'varphone' => $phone,'varbirthdate' => $birthdate,'varcellphone' => $cellphone,'varpassword' => $passwordencriptada, 'vardni' =>$dni]);
            Auth::logout();
            return redirect('/');
        }
    }
}

	