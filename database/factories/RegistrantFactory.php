<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Child;
use App\Models\Rombel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RegistrantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'unique_id' => $this->faker->unique()->uuid,
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'status' => $this->faker->randomElement(['aktif', 'non-aktif']),
            'student_id' => Child::factory(), // pastikan ada StudentFactory
            'rombel_id' => Rombel::factory(),   // pastikan ada RombelFactory
            'user_id' => User::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
