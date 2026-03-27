<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeInfor;

class EmployeesInforController extends Controller
{
    public function index()
    {
        return EmployeeInfor::with(['positions', 'departments'])->get();
    }

    public function show(EmployeeInfor $employeeInfor)
    {
        return $employeeInfor->load(['positions', 'departments']);
    }
}