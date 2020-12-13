<?php

namespace Modules\Administracion\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearReconsumoRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'                    =>'required|unique:reconsumos,nombre',
            'descripcion'               =>'required',
            'precio_venta'              =>'required',
            'iva'                       =>'required',
            'porcentaje_comisionable'   =>'required',
            'imagen'                    =>'required'

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
