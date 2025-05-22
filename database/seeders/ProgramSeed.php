<?php

namespace Database\Seeders;

use App\Models\Price;
use App\Models\Program;
use App\Models\Description;
use Illuminate\Database\Seeder;
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
                'name' => 'TK A',
                'desc' => 'a'
            ],
            [
                'name' => 'TK B',
                'desc' => 'b'
            ]
        ];
        foreach ($programs as $program){
            Program::create($program);
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
            ]
        ];
        foreach ($descriptions as $description){
            Description::create($description);
        }
        $prices = [
            [
                'desc' => 'Uang Pengembangan',
                'price' => 5000000,
                'program_id' => 1
            ],
            [
                'desc' => 'Uang tahunan',
                'price' => 1500000,
                'program_id' => 1
            ],
            [
                'desc' => 'Uang bulanan',
                'price' => 685000,
                'program_id' => 1
            ],
            [
                'desc' => '4 Setel Seragam',
                'price' => 1000000,
                'program_id' => 1
            ],
            [
                'desc' => 'Uang Pengembangan',
                'price' => 3500000,
                'program_id' => 2
            ],
            [
                'desc' => 'Uang tahunan',
                'price' => 1500000,
                'program_id' => 2
            ],
            [
                'desc' => 'Uang bulanan',
                'price' => 685000,
                'program_id' => 2
            ],
            [
                'desc' => '4 Setel Seragam',
                'price' => 1000000,
                'program_id' => 2
            ],
        ];
        foreach ($prices as $price){
            Price::create($price);
        }

    }
}
