<?php

namespace Database\Seeders;

use App\Models\Dad;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Mom;
use App\Models\User;
use App\Models\Child;
use App\Models\Guardian;
use App\Models\Location;
use App\Models\Program;
use App\Models\Registrant;
use App\Models\Rombel;
use App\Models\Student;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $user = User::factory(10)->create();
        // Buat masing-masing 30 mom, dad, guardian
        $moms = Mom::factory(30)->create();
        $dads = Dad::factory(30)->create();
        $guardians = Guardian::factory(30)->create();

        // Gabungkan data parent buat recycle
        $recycleData = [...$moms, ...$dads, ...$guardians];

        // Buat 100 child dengan id yang diambil dari data yang sudah ada
        $child = Child::factory(100)->recycle($recycleData)->create();

        $program = Program::factory(10)->create();
        $location = Location::factory(2)->create();

        $rombel = Rombel::factory(20)->recycle([...$location, ...$program])->create();

        Registrant::factory(100)->recycle([...$child, ...$rombel, ...$user])->create();
        Student::factory(100)->recycle([...$child, ...$rombel, ...$user])->create();

    }
}
