<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'names',
        'last_names',
        'identification',
        'address',
        'phone_number',
        'city_id',
        'boss_id',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function charges()
    {
        return $this->belongsToMany(Charge::class, 'employee_charge');
    }

    public function boss()
    {
        return $this->belongsTo(Employee::class, 'boss_id');
    }

    public function subordinates()
    {
        return $this->hasMany(Employee::class, 'boss_id');
    }
}
