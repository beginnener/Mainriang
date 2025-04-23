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
                '< 1 juta', '1-2 juta', '2-5 juta', '5-10 juta', '> 10 juta'
            ]),
            'pekerjaan' => $this->faker->jobTitle(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
