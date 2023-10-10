<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'namesub' => fake()->randomElement($array = ['Matematica', 'Fisica', 'Quimica', 'Ingles', 'Filosofia']),
            'initialsub' => fake()->randomElement($array = ['M', 'F','Q','I','Filo']),
        ];
    }
}
