<?php

// routes/api.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\ChargeController;

// Rutas para Countries
Route::get('/countries', [CountryController::class, 'index']);
Route::post('/countries', [CountryController::class, 'store']);
Route::put('/countries/{country}', [CountryController::class, 'update']);
Route::delete('/countries/{country}', [CountryController::class, 'destroy']);

// Rutas para Cities
Route::get('/cities', [CityController::class, 'index']);
Route::post('/cities', [CityController::class, 'store']);
Route::put('/cities/{city}', [CityController::class, 'update']);
Route::delete('/cities/{city}', [CityController::class, 'destroy']);

// Rutas para Charges
Route::get('/charges', [ChargeController::class, 'index']);
Route::post('/charges', [ChargeController::class, 'store']);
Route::put('/charges/{charge}', [ChargeController::class, 'update']);
Route::delete('/charges/{charge}', [ChargeController::class, 'destroy']);

// Rutas para Employees
Route::get('/employees', [EmployeeController::class, 'index']);
Route::post('/employees', [EmployeeController::class, 'store']);
Route::put('/employees/{employee}', [EmployeeController::class, 'update']);
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy']);
Route::get('/employees/create', [EmployeeController::class, 'create']);
Route::get('/employees/{id}', [EmployeeController::class, 'show']);
