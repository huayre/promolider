<?php

namespace Modules\Administracion\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ActualizarPaqueteRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'                    =>'required',
            //Rule::unique('paquetes','nombre')->ignore($this->post->id),
            'precio_venta'              =>'required',
            'iva'                       =>'required',
            'descuento_compras'         =>'required',
            'porcentaje_corte_binario'  =>'required',
            'bono_efectivo_rapido'      =>'required'


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
