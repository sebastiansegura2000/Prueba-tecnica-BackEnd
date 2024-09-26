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
            ['name_city' => 'Bogotá', 'countrie_id' => 1],
            ['name_city' => 'Medellín', 'countrie_id' => 1],
            ['name_city' => 'Cali', 'countrie_id' => 1],

            // Mexico
            ['name_city' => 'Ciudad de México', 'countrie_id' => 2],
            ['name_city' => 'Guadalajara', 'countrie_id' => 2],
            ['name_city' => 'Monterrey', 'countrie_id' => 2],

            // Argentina
            ['name_city' => 'Buenos Aires', 'countrie_id' => 3],
            ['name_city' => 'Córdoba', 'countrie_id' => 3],
            ['name_city' => 'Rosario', 'countrie_id' => 3]
        ]);
    }
}
