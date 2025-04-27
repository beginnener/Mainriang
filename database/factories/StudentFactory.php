<?php

namespace Database\Factories;

use App\Models\Child;
use App\Models\Rombel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => Child::factory(), // pastikan ada StudentFactory
            'rombel_id' => Rombel::factory(),   // pastikan ada RombelFactory
            'user_id' => User::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
