<?php

namespace Database\Factories;

use App\Models\Parallel;
use App\Models\Period;
use App\Models\Stage;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject_id' => Subject::factory(),
            'stage_id' => Stage::factory(),
            'parallel_id' => Parallel::factory(),
            'period_id' => Period::factory(),
        ];
    }
}
