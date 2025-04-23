<?php

namespace Database\Factories;

use App\Models\Dad;
use App\Models\Mom;
use App\Models\User;
use App\Models\Guardian;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Child>
 */
class ChildFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'nama_panggilan' => $this->faker->firstName,
            'jk' => $this->faker->randomElement(['L', 'P']),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date,
            'NIK' => $this->faker->nik(),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu']),
            'alamat' => $this->faker->address,
            'RT' => $this->faker->numberBetween(1, 10),
            'RW' => $this->faker->numberBetween(1, 10),
            'dusun' => $this->faker->word,
            'kelurahan' => $this->faker->citySuffix,
            'kecamatan' => $this->faker->city,
            'kode_pos' => $this->faker->postcode,
            'jenis_tinggal' => $this->faker->randomElement(['Orang Tua', 'Wali']),
            'alat_transportasi' => $this->faker->randomElement(['Jalan Kaki', 'Sepeda', 'Motor', 'Mobil', 'Angkutan Umum']),
            'lintang' => $this->faker->latitude,
            'bujur' => $this->faker->longitude,
            'berat_badan' => $this->faker->randomFloat(1, 10, 50),
            'tinggi_badan' => $this->faker->randomFloat(1, 50, 150),
            'lingkar_kepala' => $this->faker->randomFloat(1, 20, 60),
            'jumlah_saudara' => $this->faker->numberBetween(0, 10),
            'anak_keberapa' => $this->faker->numberBetween(1, 10),
            'jarak_ke_sekolah' => $this->faker->randomFloat(2, 0.1, 20.0),
            'akta_kelahiran' => $this->faker->boolean,
            'kartu_keluarga' => $this->faker->boolean,
            'mom_id' => Mom::factory(), // Diisi dengan relasi atau dummy ID jika perlu
            'dad_id' => Dad::factory(),
            'guardian_id' => Guardian::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
