<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ChargeController;

// Rutas para Countries
Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');
Route::get('/countries/create', [CountryController::class, 'create'])->name('countries.create');
Route::post('/countries', [CountryController::class, 'store']);
Route::get('/countries/{country}/edit', [CountryController::class, 'edit'])->name('countries.edit');
Route::put('/countries/{country}', [CountryController::class, 'update']);
Route::delete('/countries/{country}', [CountryController::class, 'destroy']);

// Rutas para Cities
Route::get('/cities', [CityController::class, 'index'])->name('cities.index');
Route::get('/cities/create', [CityController::class, 'create'])->name('cities.create');
Route::post('/cities', [CityController::class, 'store']);
Route::get('/cities/{city}/edit', [CityController::class, 'edit'])->name('cities.edit');
Route::put('/cities/{city}', [CityController::class, 'update']);
Route::delete('/cities/{city}', [CityController::class, 'destroy']);

// Rutas para Charges
Route::get('/charges', [ChargeController::class, 'index'])->name('charges.index');
Route::get('/charges/create', [ChargeController::class, 'create'])->name('charges.create');
Route::post('/charges', [ChargeController::class, 'store']);
Route::get('/charges/{charge}/edit', [ChargeController::class, 'edit'])->name('charges.edit');
Route::put('/charges/{charge}', [ChargeController::class, 'update']);
Route::delete('/charges/{charge}', [ChargeController::class, 'destroy']);

// Rutas para Employees
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store']);
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}', [EmployeeController::class, 'update']);
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy']);


Route::get('/', function () {
    return view('welcome');
});
