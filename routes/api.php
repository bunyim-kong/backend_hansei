<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesInforController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\RosterController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\AuthController;



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);
Route::post('/logout',   [AuthController::class, 'logout'])->middleware('auth:sanctum');

// employee information
Route::get('/employees', [EmployeesInforController::class, 'index']);
Route::get('/employees/{id}', [EmployeesInforController::class, 'show']);

// department information
Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/departments/{id}', [DepartmentController::class, 'show']);

Route::get('/attendances', [AttendanceController::class, 'index']);
Route::post('/attendances', [AttendanceController::class, 'store']);
Route::put('/attendances/{id}', [AttendanceController::class, 'update']);

Route::get('/leaves', [LeaveController::class, 'index']);
Route::get('/leaves/{id}', [LeaveController::class, 'show']);

Route::get('/positions', [PositionController::class, 'index']);
Route::get('/positions/{id}', [PositionController::class, 'show']);

Route::get('/rosters', [RosterController::class, 'index']);
Route::get('/rosters/{id}', [RosterController::class, 'show']);

Route::get('/salaries', [SalaryController::class, 'index']);
Route::get('/salaries/{id}', [SalaryController::class, 'show']);


//** ways that you can make api withtout controller

// Route::get('/employees', function () {
//     return DB::table('employees_infor')->get();
// });