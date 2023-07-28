<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pastel>
 */
class PastelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->name(),
            'creador' => $this->faker->name(),
            'f_creado' => $this->faker->date(),
            'f_vencimiento' => $this->faker->date(),
        ];
    }
}
