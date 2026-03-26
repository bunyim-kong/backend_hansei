<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function index()
    {
        return Leave::all();
    }

    public function show(Leave $leave)
    {
        require $leave;
    }
}
