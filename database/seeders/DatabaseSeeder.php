<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Nicolas',
            'email' => 'nnicolasluna@gmail.com',
        ]);
        \App\Models\User::factory(1000)->create();
        \App\Models\Student::factory(800)->create();
        \App\Models\Principal::factory(1)->create();
        \App\Models\Secretary::factory(10)->create();
        \App\Models\Subject::factory(15)->create();
        \App\Models\Period::factory(20)->create();
        \App\Models\Parallel::factory(10)->create();
        \App\Models\Period::factory(20)->create();
        \App\Models\Stage::factory(15)->create();
        \App\Models\Teacher::factory(39)->create();
        \App\Models\Dictates::factory(30)->create();
        \App\Models\Belongs::factory(20)->create();
        \App\Models\Schedule::factory(20)->create();
        \App\Models\Grade::factory(300)->create();
    }
}
