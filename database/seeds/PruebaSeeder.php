<?php

use Illuminate\Database\Seeder;

class PruebaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domicilio')->insert([
            ['idMunicipio'  =>  5,  'idLocalidad'   =>  2,  'idColonia' =>  6,  'calle' =>  'calle fulana 1', 'numExterno'    =>  'S/N1',  'numInterno'    =>  'S/N1'],
            ['idMunicipio'  =>  8,  'idLocalidad'   =>  4,  'idColonia' =>  2,  'calle' =>  'calle fulana 2', 'numExterno'    =>  'S/N2',  'numInterno'    =>  'S/N2'],
            ['idMunicipio'  =>  7,  'idLocalidad'   =>  8,  'idColonia' =>  3,  'calle' =>  'calle fulana 3', 'numExterno'    =>  'S/N3',  'numInterno'    =>  'S/N3'],
            ['idMunicipio'  =>  14,  'idLocalidad'   =>  7,  'idColonia' =>  4,  'calle' =>  'calle fulana 4', 'numExterno'    =>  'S/N4',  'numInterno'    =>  'S/N4'],
        	
        ]);

        DB::table('preregistro')->insert([
            ['idDireccion'  =>  1,  'esEmpresa'   =>  0,  'nombre' =>  'JUAN',  'primerAp' =>  'Perez', 'segundoAp'    =>  'Perez',  'rfc'    =>  'a65s41f3a5s1d','sexo'=>'HOMBRE','telefono'=>'6841534316','docIdentificacion'=> 'ine','numDocIdentificacion'=>'oajsfñoajdfaksdfgaj','narracion'=>'asufhaksdifahsdgijakshd iDHSFisdhfi hKFH Khfkihfk hkfuahsdkfhakshkaehfh awehfñwaehfk','folio'=>'ASFAS48354AFE' ],
            ['idDireccion'  =>  1,  'esEmpresa'   =>  0,  'nombre' =>  'ALBERTO',  'primerAp' =>  'Perez', 'segundoAp'    =>  'Perez',  'rfc'    =>  'a65s41f3a5s1d','sexo'=>'HOMBRE','telefono'=>'6841534316','docIdentificacion'=> 'ine','numDocIdentificacion'=>'oajsfñoajdfaksdfgaj','narracion'=>'asufhaksdifahsdgijakshd iDHSFisdhfi hKFH Khfkihfk hkfuahsdkfhakshkaehfh awehfñwaehfk','folio'=>'ASFAS48354AFE' ],
            ['idDireccion'  =>  1,  'esEmpresa'   =>  0,  'nombre' =>  'RAIMUNDO',  'primerAp' =>  'Perez', 'segundoAp'    =>  'Perez',  'rfc'    =>  'a65s41f3a5s1d','sexo'=>'HOMBRE','telefono'=>'6841534316','docIdentificacion'=> 'ine','numDocIdentificacion'=>'oajsfñoajdfaksdfgaj','narracion'=>'asufhaksdifahsdgijakshd iDHSFisdhfi hKFH Khfkihfk hkfuahsdkfhakshkaehfh awehfñwaehfk','folio'=>'ASFAS48354AFE' ],
            
        ]);
    }
}