<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDenunciante;

class DenuncianteController extends Controller
{
    
    public function StoreDenunciante(StoreDenunciante $request){
        //dd($request->all());
        if($request->esEmpresa==0){
            $persona = new Persona();
            $persona->nombres = $request->nombres;
            $persona->primerAp = $request->primerAp;
            $persona->segundoAp = $request->segundoAp;
            $persona->fechaNacimiento = $request->fechaNacimiento;
            $persona->rfc = $request->rfc;
            $persona->curp = $request->curp;
            if (!is_null($request->sexo)){
                $persona->sexo = $request->sexo;
            }
            if (!is_null($request->idNacionalidad)){
                $persona->idNacionalidad = $request->idNacionalidad;
            }
            if (!is_null($request->idMunicipioOrigen)){
                $persona->idMunicipioOrigen = $request->idMunicipioOrigen;
            }            if ($request->coViolencia===1){
                $conViolencia->sinViolencia = 1;
            }

            $DenuncianteN->narracion = $request->narracion;
            $persona->save();
            $idPersona = $persona->id;


             Alert::success('Denunciante registrado con éxito', 'Hecho')->persistent("Aceptar");
        //return redirect()->route('carpeta', $request->idCarpeta);
}

public function showForm($esEmpresa)
    {
        if(count($esEmpresa)==1){ 
            
            return view('validacion')
                ->with('nombres', $nombres)
                ->with('rfc', $rfc)
                ->with('representante_legal', $representante_legal);
             
        }else{
            return redirect()->route('form-denunciante');
        }
    }
