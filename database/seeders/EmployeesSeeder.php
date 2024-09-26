<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'names' => 'Juan',
                'last_names' => 'Pérez',
                'identification' => '123456789',
                'adress' => 'Calle 123',
                'phone_number' => '555-1234',
                'city_id' => 1,
                'boss_id' => null
            ],
            [
                'names' => 'Maria',
                'last_names' => 'Rodriguez',
                'identification' => '987654321',
                'adress' => 'Avenida 456',
                'phone_number' => '555-9876',
                'city_id' => 4,
                'boss_id' => 1
            ]
        ]);
    }
}
