<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesInforController;
use App\Http\Controllers\DepartmentController;
use App\Models\Department;

// employee information
Route::get('/employees', [EmployeesInforController::class, 'index']);
Route::get('/employees/{id}', [EmployeesInforController::class, 'show']);

// department information
Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/departments/{id}', [DepartmentController::class, 'show']);


// Route::get('/employees', function () {
//     return DB::table('employees_infor')->get();
// });