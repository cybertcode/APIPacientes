<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarPacienteRequest extends FormRequest
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
            'dni' => "required|unique:pacientes,dni," . $this->route('paciente')->id,
            'tipo_sangre' => "required",
            'telefono' => "required|unique:pacientes,telefono," . $this->route('paciente')->id,
            'correo' => "required|email|unique:pacientes,correo," . $this->route('paciente')->id,
            'direccion' => "required",
        ];
    }
}