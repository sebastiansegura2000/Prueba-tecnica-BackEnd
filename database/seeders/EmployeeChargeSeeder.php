<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeChargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_charge')->insert([
            ['employee_id' => 1, 'charge_id' => 4], // Juan Pérez es Presidente
            ['employee_id' => 2, 'charge_id' => 2] // Maria Rodriguez es Desarrolladora
        ]);
    }
}
