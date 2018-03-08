<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class PDFcontroller extends Controller
{
    
		public function datos ($id){
    	$DatosRegistros = DB::table('preregistro')
    	->select('id', 'idDireccion', 'esEmpresa', 'nombre', 'primerAp', 'segundoAp', 'rfc', 'fechaNac', 'sexo', 'curp', 'telefono', 'docIdentificacion', 'numDocIdentificacion', 'conViolencia', 'narracion', 'folio', 'representanteLegal', 'statusCancelacion', 'statusOrigen', 'created_at')
    	->where ('preregistro.id', '=', $id)
    	->get();


    	//dd($DatosRegistros);
 		$data = ['DatosRegistros' => $DatosRegistros];
 	$pdf = PDF::loadView('FormatoRegistro', $data);
     //  return $pdf->stream('pruebapdf.pdf');
        return $pdf->download('gol.pdf');
	//  return $pdf->download('pruebapdf.pdf');


}

}
