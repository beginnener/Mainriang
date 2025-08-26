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
                'name' => 'Gunung Batu',
                'address' => 'Jl. Babakan Radio No. 25 Kota Bandung'
            ],
            [
                'name' => 'Arcamanik',
                'address' => 'Jl. Cicukang 37A'
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
    }
}
