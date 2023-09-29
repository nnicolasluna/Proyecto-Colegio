<?php

namespace Database\Factories;

use App\Models\Parallel;
use App\Models\Stage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rank' => fake()->randomElement($array = ['Nuevo', 'Antiguo']),
            'load' => fake()->numberBetween(10, 40),
            'user_id' => User::factory(),
            'stage_id' => Stage::factory(),
            'parallel_id' => Parallel::factory(),
        ];
    }
}
