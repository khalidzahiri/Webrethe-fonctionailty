<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Module>
 */
class ModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->lastName(),
            'is_active' => fake()->boolean(),
            'number_of_data' => fake()-> numberBetween(0, 10000),
            'vitesse' => fake()-> numberBetween(0, 100),
            'temperature' => fake()-> randomFloat(1, 20, 100),
        ];
    }
}
