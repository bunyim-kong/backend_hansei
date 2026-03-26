<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index()
    {
        return Salary::all();
    }

    public function show(Salary $salary)
    {
        return $salary;
    }
}
