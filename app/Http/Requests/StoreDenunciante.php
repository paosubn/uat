<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDenunciante extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;

        return [


            'nombres' => 'nombre|min:3|max:200',
            'primerAp' => 'nombre|min:3|max:50',
            'segundoAp' => 'nombre|min:3|max:50',
            'rfc' => 'rfc|min:10|max:20',
            'curp' => 'string|min:17|max:18',
            'telefono' => 'numeric',
            'docIdentificacion' => 'string|min:2|max:50',
            'numDocIdentificacion' => 'string|min:2|max:50',
           
            
            
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
