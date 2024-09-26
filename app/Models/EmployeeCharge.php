<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EmployeeCharge extends Pivot
{

    use HasFactory;

    protected $table = 'employee_charge';

}
