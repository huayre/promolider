<?php

namespace Modules\Redbinaria\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCuenta extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required',
            'apellido'=>'required',
            'identificacion'=>'required',
            'fecha_nacimiento'=>'required',
            'numero_telefonico'=>'required',
            'pais'=>'required',
            'email'=>'required|unique:afiliados',
            'usuario'=>'required|unique:afiliados',
            'password'=>'required|confirmed'
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
