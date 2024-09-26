<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ChargeController;


// Rutas para Countries
Route::get('/countries', [CountryController::class, 'index']); // Listar todos los países
Route::post('/countries', [CountryController::class, 'store']); // Crear un nuevo país
Route::put('/countries/{country}', [CountryController::class, 'update']); // Actualizar un país
Route::delete('/countries/{country}', [CountryController::class, 'destroy']); // Borrar un país

// Rutas para Cities
Route::get('/cities', [CityController::class, 'index']); // Listar todas las ciudades
Route::post('/cities', [CityController::class, 'store']); // Crear una nueva ciudad
Route::put('/cities/{city}', [CityController::class, 'update']); // Actualizar una ciudad
Route::delete('/cities/{city}', [CityController::class, 'destroy']); // Borrar una ciudad

// Rutas para Charges
Route::get('/charges', [ChargeController::class, 'index']); // Listar todos los cargos
Route::post('/charges', [ChargeController::class, 'store']); // Crear un nuevo cargo
Route::put('/charges/{charge}', [ChargeController::class, 'update']); // Actualizar un cargo
Route::delete('/charges/{charge}', [ChargeController::class, 'destroy']); // Borrar un cargo

// Rutas para Employees
Route::get('/employees', [EmployeeController::class, 'index']); // Listar todos los empleados
Route::post('/employees', [EmployeeController::class, 'store']); // Crear un nuevo empleado
Route::put('/employees/{employee}', [EmployeeController::class, 'update']); // Actualizar un empleado
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy']); // Borrar un empleado



Route::get('/employees/create', [EmployeeController::class, 'create']);
Route::get('/employees/{id}', [EmployeeController::class, 'show']);
