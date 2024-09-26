<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            // Colombia
            ['name_city' => 'Bogotá', 'pais_id' => 1],
            ['name_city' => 'Medellín', 'pais_id' => 1],
            ['name_city' => 'Cali', 'pais_id' => 1],

            // Mexico
            ['name_city' => 'Ciudad de México', 'pais_id' => 2],
            ['name_city' => 'Guadalajara', 'pais_id' => 2],
            ['name_city' => 'Monterrey', 'pais_id' => 2],

            // Argentina
            ['name_city' => 'Buenos Aires', 'pais_id' => 3],
            ['name_city' => 'Córdoba', 'pais_id' => 3],
            ['name_city' => 'Rosario', 'pais_id' => 3]
        ]);
    }
}
