<?php

namespace Database\Seeders;

use App\Models\Eleve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Eleve::insert([
            [
                "name" => "Trump",
                "age" => 70,
                "gender_id" => 3,
            ],
            [
                "name" => "Bush",
                "age" => 80,
                "gender_id" => 3,
            ],
            [
                "name" => "Clinton",
                "age" => 70,
                "gender_id" => 2,
            ],
            [
                "name" => "Elisabeth allah i rhamha",
                "age" => 100,
                "gender_id" => 2,
            ],
        ]);
    }
}
