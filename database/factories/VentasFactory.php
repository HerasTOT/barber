<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ventas>
 */
class VentasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(2, true),
            'servicio' => $this->faker->sentence(),
            'precio' => $this->faker->numberBetween(10, 100), // Genera un número aleatorio entre 10 y 100

        ];
    }
}
