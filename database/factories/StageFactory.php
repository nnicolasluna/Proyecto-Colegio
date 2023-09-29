<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stage>
 */
class StageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'namestage' => fake()->randomElement($array = ['1A', '2A', '3A', '4A']),
            'initialstage' => fake()->randomElement($array = ['1', '2']),
            
        ];
    }
}
