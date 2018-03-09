<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class LoginActiveController extends Controller
{
	public function index(){
		$users = Group::select('grupo','descripcion')->get();
		return view('login.acceso')->with('users',$users);
	}

    public function comprobar(Request $request){
		$usuario = $request->input("user");
		$pass = $request->input("password");
		$grupo = $request->input("grupo");
		$mensaje = login($usuario,$pass,$grupo);
		switch ($mensaje) {
			case 0:
				$mensaje = "Usuario o contraseña inválidos";
				break;
			case 1:
				$mensaje = "Sin permisos de grupo";
				break;
			case 2:
				$mensaje = "Correcto";
				break;
		}
		echo $mensaje;
	}
}
