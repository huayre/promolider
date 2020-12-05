<?php

namespace Modules\Administracion\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearCursoRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'                    =>'required|unique:cursos,nombre',
            'precio_venta'              =>'required',
            'iva'                       =>'required',
            'porcentaje_comisionable'   =>'required',
            'descripcion'               =>'required',
            'imagen'                    =>'required',
            'capacidad'                 =>'required',
            'idioma'                    =>'required'


        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
