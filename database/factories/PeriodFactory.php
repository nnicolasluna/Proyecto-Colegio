<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Period>
 */
class PeriodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nameperiod' => fake()->randomElement($array = ['1', '2']),
            'day' => fake()->dayOfWeek(),
            'entry' => fake()->numberBetween(8, 18),
            'departure' => fake()->numberBetween(8, 18),
            'dayinitial' => fake()->randomElement($array = ['L', 'M', 'M', 'J', 'V']),
        ];
    }
}
