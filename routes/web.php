<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;


Route::get('/', function () {
    return view('welcome');
});

// Rutas para empleados
Route::get('/employees', [EmployeeController::class, 'view'])->name('employees.view');

// Rutas para cargos
Route::get('/charges', [ChargeController::class, 'index'])->name('charges.index');

// Rutas para países
Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');

// Rutas para ciudades
Route::get('/cities', [CityController::class, 'index'])->name('cities.index');
