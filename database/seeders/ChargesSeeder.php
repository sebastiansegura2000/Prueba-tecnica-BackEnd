<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChargesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('charges')->insert([
            ['name_charge' => 'Gerente'],
            ['name_charge' => 'Desarrollador'],
            ['name_charge' => 'Analista'],
            ['name_charge' => 'Presidente']
        ]);
    }
}
