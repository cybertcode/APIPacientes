<?php

namespace Database\Factories\admin;

use App\Models\admin\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PacienteFactory extends Factory
{
    protected $model = Paciente::class;
    /**
     * Define the model's default state.
     *
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nombres' => $this->faker->unique()->name(),
            'apellidos' => $this->faker->lastName(),
            'edad' => $this->faker->randomNumber(2, true),
            'sexo' => $this->faker->randomElement(['Hombre', 'Mujer']),
            'dni' => $this->faker->unique()->randomNumber(8, false),
            'tipo_sangre' => $this->faker->word(10),
            'telefono' => $this->faker->unique()->randomNumber(9, false),
            'correo' => $this->faker->unique()->email(),
            'direccion' => $this->faker->address(),
        ];
    }
}