<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    // ===== GET ALL =====
    public function index()
    {
        return Attendance::with('employee')->latest()->get();
    }

    // ===== CHECK IN =====
    public function store(Request $request)
    {
        $today = Carbon::today()->toDateString();

        $existing = Attendance::where('employees_infor_id', $request->employees_infor_id)
            ->where('date', $today)
            ->first();

        // ❌ Already checked in (not checked out yet)
        if ($existing && !$existing->check_out) {
            return response()->json([
                'message' => 'Already checked in today'
            ], 400);
        }

        $attendance = Attendance::create([
            'employees_infor_id' => $request->employees_infor_id,
            'date'      => $today,
            'check_in'  => Carbon::now()->format('H:i:s'),
            'status'    => 'Present',
        ]);

        return response()->json($attendance, 201);
    }

    // ===== CHECK OUT =====
    public function update(Request $request, $id)
    {
        $attendance = Attendance::find($id);

        if (!$attendance) {
            return response()->json(['message' => 'Not found'], 404);
        }

        if ($attendance->check_out) {
            return response()->json([
                'message' => 'Already checked out'
            ], 400);
        }

        $attendance->update([
            'check_out' => Carbon::now()->format('H:i:s'),
            'status'    => 'Present',
        ]);

        return response()->json($attendance);
    }
}