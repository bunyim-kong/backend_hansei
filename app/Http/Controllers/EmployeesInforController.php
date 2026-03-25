<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeInfor;

class EmployeesInforController extends Controller
{
    public function index()
    {
        return EmployeeInfor::all();
    }

    public function show(EmployeeInfor $employeeInfor)
    {
        return $employeeInfor;
    }
}