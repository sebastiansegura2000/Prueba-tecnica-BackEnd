<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    use HasFactory;

    protected $fillable = ['name_charge'];

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_charge');
    }
}
