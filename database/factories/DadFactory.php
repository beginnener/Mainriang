<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dad>
 */
class DadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'NIK' => $this->faker->nik(),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date(),
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'jenjang_pendidikan' => $this->faker->randomElement([
                'SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3'
            ]),
            'penghasilan' => $this->faker->randomElement([
                500_000,    // "< 1 juta"
                1_500_000,  // "1-2 juta"
                3_500_000,  // "2-5 juta"
                7_500_000,  // "5-10 juta"
                12_000_000  // "> 10 juta"
            ]),
            'pekerjaan' => $this->faker->jobTitle(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
