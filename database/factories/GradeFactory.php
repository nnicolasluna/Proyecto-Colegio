<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'teacher_id' => Teacher::factory(),
            'subject_id' => Subject::factory(),
            'grade1' => fake()->numberBetween(599999999, 699999999),
            'grade2' => fake()->numberBetween(599999999, 699999999),
            'grade3' => fake()->numberBetween(599999999, 699999999),
            'grade4' => fake()->numberBetween(599999999, 699999999),
            'gradefinal' => fake()->numberBetween(599999999, 699999999),
            
        ];
    }
}
