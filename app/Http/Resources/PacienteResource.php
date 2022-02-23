<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Illuminate\Http\Resources\Json\JsonResource;

class PacienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'Paciente'; //FUNCIONA SOLO PARA COLLECTIVE
    public function toArray($request)
    {

        // return parent::toArray($request);
        return ([
            'id' => $this->id,
            'Nombres y Apellidos' => Str::of($this->nombres)->upper()
                . " " . Str::of($this->apellidos)->upper(),
            // 'apellidos' => Str::of($this->apellidos)->upper(),
            'Edad' => $this->edad,
            'Sexo' => $this->sexo,
            'DNI' => $this->dni,
            'Tipo de Sangre' => $this->tipo_sangre,
            'Teléfono' => $this->telefono,
            'Correo' => $this->correo,
            'Dirección' => $this->direccion,
            'Creado' => $this->created_at->format('d-m-Y'),
            'Actualizado' => $this->updated_at->format('d-m-Y')
        ]);
    }
    public function with($request)
    {
        return [
            'success' => true,

            // 'Mensaje' => 'Operación finalizada con éxito'
        ];
    }
}