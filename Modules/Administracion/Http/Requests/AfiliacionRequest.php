<?php

namespace Modules\Administracion\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AfiliacionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|unique:afiliaciones,nombre',
            'precio'=>'required|integer|min:0',
            'iva'=>'integer|between:0,100',
            'comisionable'=>'integer|between:0,100',
            'descuento_compra'=>'required|integer|between:0,100',
            'porcentaje_corte_binario'=>'required'
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
