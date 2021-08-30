<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'rfc' => 'required',
            'curp' => 'required',
            'titulo' => 'required', 
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido materno' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'estado' => 'required',
            'imagen' => 'required',
            'sexo' => 'required',
            'abreviatura' => 'required'
        ];
    }
}
