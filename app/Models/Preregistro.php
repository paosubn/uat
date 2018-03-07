<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preregistro extends Model
{
    protected $table = 'preregistro';

    protected $fillable = [
        'id',
        'idDireccion',
        'esEmpresa',
        'nombre',
        'primerAp',
        'segundoAp',
        'rfc',
        'fechaNac',
        'sexo',
        'curp',
        'telefono',
        'docIdentificacion',
        'numDocIdentificacion',
        'conViolencia',
        'narracion',
        'folio',
        'representanteLegal',
        'statusCancelacion',
        'statusOrigen',
    ];

    public function direcciones(){
        return $this->belongsTo('App\Models\Domicilio');
    }

}
