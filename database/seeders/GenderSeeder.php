<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gender::insert([
            [
                "sexe" => "Homme",
            ],
            [
                "sexe" => "Femme",
            ],
            [
                "sexe" => "Autres",
            ],
        ]);
    }
}
