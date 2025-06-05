<?php

namespace Database\Seeders;

use App\Models\Price;
use App\Models\Program;
use App\Models\Location;
use App\Models\Description;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgramSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'name' => 'Baby Class Tahun Full Day 1 - 2 Tahun (Bulanan)',
                'desc' => 'a'
            ],
            [
                'name' => 'Baby Class Tahun Full Day 1 - 2 Tahun (Harian)',
                'desc' => 'a'
            ],
            [
                'name' => 'Kids Class Full Day 3 - 6 Tahun (Bulanan)',
                'desc' => 'b'
            ],
            [
                'name' => 'Kids Class Full Day 3 - 6 Tahun (Harian)',
                'desc' => 'b'
            ],
            [
                'name' => 'Baby Class 5 Hours 1 - 3 Tahun (Bulanan)',
                'desc' => 'b'
            ],
            [
                'name' => 'Baby Class 5 Hours 1 - 3 Tahun (Harian)',
                'desc' => 'b'
            ],
            [
                'name' => 'Kids Class 5 Hours 3 - 6 Tahun (Bulanan)',
                'desc' => 'b'
            ],
            [
                'name' => 'Kids Class 5 Hours 3 - 6 Tahun (Harian)',
                'desc' => 'b'
            ],
            [
                'name' => 'PG Main A',
                'desc' => 'b'
            ],
            [
                'name' => 'PG Main B',
                'desc' => 'b'
            ],
            [
                'name' => 'TK A',
                'desc' => 'b'
            ],
            [
                'name' => 'TK B',
                'desc' => 'b'
            ],
        ];
        foreach ($programs as $program){
            Program::create($program);
        }
        $locations = [
            [
                'name' => 'gunung batu, Jl. Babakan Radio No. 25 Kota Bandung',
                'desc' => 'a'
            ],
            [
                'name' => 'Arcamanik',
                'desc' => 'a'
            ]
        ];
        foreach ($locations as $location){
            Location::create($location);
        }

        $locations = Location::all();
        $programs = Program::all();

        foreach ($locations as $location) {
            foreach ($programs as $program) {
                $id = $location->id . $program->id;

                DB::table('rombels')->insert([
                    'id' => $id,
                    'program_id' => $program->id,
                    'location_id' => $location->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
        $descriptions = [
            [
                'desc' => 'usia 4-5 tahun',
                'program_id' => 1
            ],
            [
                'desc' => '5 hari belajar setiap hari senin - jumat',
                'program_id' => 1
            ],
            [
                'desc' => '08.00 - 11.00',
                'program_id' => 1
            ],
            [
                'desc' => 'usia 4-5 tahun',
                'program_id' => 2
            ],
            [
                'desc' => '5 hari belajar setiap hari senin - jumat',
                'program_id' => 2
            ],
            [
                'desc' => '08.00 - 11.00',
                'program_id' => 2
            ],
        ];
        foreach ($descriptions as $description){
            Description::create($description);
        }
        $prices = [
            [
                'desc' => 'Biaya Tahunan',
                'price' => 1000000,
                'program_id' => 1
            ],
            [
                'desc' => 'Biaya Bulanan',
                'price' => 2500000,
                'program_id' => 1
            ],
            [
                'desc' => 'Biaya bulanan',
                'price' => 250000,
                'program_id' => 2
            ],
            [
                'desc' => 'Biaya Tahunan',
                'price' => 1000000,
                'program_id' => 3
            ],
            [
                'desc' => 'Biaya Bulanan',
                'price' => 2000000,
                'program_id' => 3
            ],
            [
                'desc' => 'Biaya bulanan',
                'price' => 200000,
                'program_id' => 4
            ],
            [
                'desc' => 'Biaya Tahunan',
                'price' => 1000000,
                'program_id' => 5
            ],
            [
                'desc' => 'Biaya Bulanan',
                'price' => 1500000,
                'program_id' => 5
            ],
            [
                'desc' => 'Biaya bulanan',
                'price' => 175000,
                'program_id' => 6
            ],
            [
                'desc' => 'Biaya Tahunan',
                'price' => 1000000,
                'program_id' => 7
            ],
            [
                'desc' => 'Biaya Bulanan',
                'price' => 1350000,
                'program_id' => 7
            ],
            [
                'desc' => 'Biaya bulanan',
                'price' => 150000,
                'program_id' => 8
            ],
            [
                'desc' => 'Biaya Pengembangan',
                'price' => 1500000,
                'program_id' => 9
            ],
            [
                'desc' => 'Biaya Bulanan',
                'price' => 250000,
                'program_id' => 9
            ],
            [
                'desc' => '1 Stel Seragam',
                'price' => 250000,
                'program_id' => 9
            ],
            [
                'desc' => 'Biaya Pengembangan',
                'price' => 2500000,
                'program_id' => 10
            ],
            [
                'desc' => 'Biaya Bulanan',
                'price' => 400000,
                'program_id' => 10
            ],
            [
                'desc' => '1 Stel Seragam',
                'price' => 250000,
                'program_id' => 10
            ],
            [
                'desc' => 'Biaya Pengembangan',
                'price' => 5000000,
                'program_id' => 11
            ],
            [
                'desc' => 'Biaya Tahunan',
                'price' => 1500000,
                'program_id' => 11
            ],
            [
                'desc' => 'Biaya Bulanan',
                'price' => 685000,
                'program_id' => 11
            ],
            [
                'desc' => '4 Stel Seragam',
                'price' => 1000000,
                'program_id' => 11
            ],
            [
                'desc' => 'Biaya Pengembangan',
                'price' => 3500000,
                'program_id' => 12
            ],
            [
                'desc' => 'Biaya Tahunan',
                'price' => 1500000,
                'program_id' => 12
            ],
            [
                'desc' => 'Biaya Bulanan',
                'price' => 685000,
                'program_id' => 12
            ],
            [
                'desc' => '4 Stel Seragam',
                'price' => 1000000,
                'program_id' => 12
            ]
        ];
        foreach ($prices as $price){
            Price::create($price);
        }

    }
}
