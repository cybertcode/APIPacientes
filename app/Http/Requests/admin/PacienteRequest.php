<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
            //
            'nombres' => "required",
            'apellidos' => "required",
            'edad' => "required",
            'sexo' => "required",
            'dni' => "required|unique:pacientes,dni",
            'tipo_sangre' => "required",
            'telefono' => "required|unique:pacientes,telefono",
            'correo' => "required|unique:pacientes,correo",
            'direccion' => "required",
        ];
    }
}