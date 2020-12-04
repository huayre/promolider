<?php

namespace Modules\Administracion\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
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
            'precio_venta'              =>'required|integer|min:0',
            'iva'                       =>'required|integer|between:0,100',
            'porcentaje_comisionable'   =>'required|integer|between:0,100',
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
