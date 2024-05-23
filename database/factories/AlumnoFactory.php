<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Profesor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $profesores = Profesor::all();
        $profesor = $profesores->random();
        return [
            "nombre" => $this->faker->name(),
            "email" => $this->faker->email(),
            "profesor_id" => $profesor->id,
            "edad" => $this->faker->numberBetween(15, 80),
            "DNI" => $this->get_dni(),

        ];
    }


    private function get_dni(): string
    {
        $number = $this->faker->numberBetween(10000000, 99999999);
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        $letra = $letras[$number % 23];
        return "$number-$letra";
    }
}
