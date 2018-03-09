<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preregistro;
use App\Models\Domicilio;

class PreregistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('preregistroWeb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePreregistro $request)
    {
        //dd($request);
        if ($request->esEmpresa==0){
            $domicilio = new Domicilio();
            if (!is_null($request->idMunicipio)){
                $domicilio->idMunicipio = $request->idMunicipio;
            }
            if (!is_null($request->idLocalidad)){
                $domicilio->idLocalidad = $request->idLocalidad;
            }
            if (!is_null($request->idColonia)){
                $domicilio->idColonia = $request->idColonia;
            }
            if (!is_null($request->calle)){
                $domicilio->calle = $request->calle;
            }
            if (!is_null($request->numExterno)){
                $domicilio->numExterno = $request->numExterno;
            }
            if (!is_null($request->numInterno)){
                $domicilio->numInterno = $request->numInterno;
            }
            $domicilio->save();
            $idD1 = $domicilio->id;
            
            $preregistro = new Preregistro();
            $preregistro->nombre = $request->nombres;
            $preregistro->primerAp = $request->primerAp;
            $preregistro->segundoAp = $request->segundoAp;
            $preregistro->telefono = $request->telefono;
            $preregistro->narracion = $request->narracion;
            $preregistro->folio = 'XXXXXXXXXXXX';
            $preregistro->idDireccion = $idD1;
            $preregistro->fechaNacimiento = $request->fechaNacimiento;
            if (!is_null($request->rfc)){
                $preregistro->rfc = $request->rfc;
            }
            $preregistro->curp = $request->curp;
            if (!is_null($request->sexo)){
                $preregistro->sexo = $request->sexo;
            }
            $preregistro->fechaNacimiento = $request->fechaNacimiento;

            $preregistro->save();
            
        }elseif($request->esEmpresa==1){
            $domicilio = new Domicilio();
            if (!is_null($request->idMunicipio)){
                $domicilio->idMunicipio = $request->idMunicipio;
            }
            if (!is_null($request->idLocalidad)){
                $domicilio->idLocalidad = $request->idLocalidad;
            }
            if (!is_null($request->idColonia)){
                $domicilio->idColonia = $request->idColonia;
            }
            if (!is_null($request->calle)){
                $domicilio->calle = $request->calle;
            }
            if (!is_null($request->numExterno)){
                $domicilio->numExterno = $request->numExterno;
            }
            if (!is_null($request->numInterno)){
                $domicilio->numInterno = $request->numInterno;
            }
            
            $domicilio->save();
            $idD1 = $domicilio->id;
            
            
            $preregistro = new Preregistro();
            $preregistro->nombre = $request->nombres;
            $preregistro->idDireccion = $idD1;
            $preregistro->rfc = $request->rfc;
            $preregistro->esEmpresa = 1;
            $preregistro->telefono = $request->telefono;
            $preregistro->narracion = $request->narracion;
            $preregistro->folio = 'XXXXXXXXXXXX';
            $preregistro->representanteLegal = "jajaja";//$request->representanteLegal;
            $preregistro->save();
            $id = $preregistro->id;
            
            
            
        }
        return redirect();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
