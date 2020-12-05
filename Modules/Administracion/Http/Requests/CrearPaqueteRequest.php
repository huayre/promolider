<?php

namespace Modules\Administracion\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearPaqueteRequest extends FormRequest
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
            'precio_venta'              =>'required',
            'iva'                       =>'required',
            'descuento_compras'         =>'required',
            'porcentaje_corte_binario'  =>'required',
            'bono_efectivo_rapido'      =>'required',
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
