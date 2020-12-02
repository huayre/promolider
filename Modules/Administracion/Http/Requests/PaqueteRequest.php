<?php

namespace Modules\Administracion\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaqueteRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'                    =>'required|unique:paquetes,nombre',
            'precio_venta'              =>'required|integer|min:0',
            'iva'                       =>'required|integer|between:0,100',
            'descuento_compras'         =>'required|integer|between:0,100',
            'porcentaje_corte_binario'  =>'required|integer|between:0,100',
            'bono_efectivo_rapido'      =>'required|integer|between:0,100',
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
