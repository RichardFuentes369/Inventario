<?php

namespace inventarios\Http\Controllers;

use inventarios\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class LoginController extends Controller
{
    
    /*Iniciar Session*/
    public function login(Request $request){
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials)){
            $consulta = DB::SELECT('SELECT category FROM users WHERE email = :varemail',['varemail' => $credentials['email']]);
            foreach ($consulta as $con) {
                if(($con->category) == 'admin'){
                    return redirect('administrador/perfil');
                }else if(($con->category) == 'seller'){
                    return redirect('vendedor/perfil');
                }
            }
        }else{
            return back()->withErrors(['email' => trans('auth.failed')])
                        ->withInput(request(['email']));
        }   
    }

    /*Cerrar Session*/
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}


