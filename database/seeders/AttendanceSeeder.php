<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Example data (make sure employee_id exists in employees_infor table)
        DB::table('attendances')->insert([
            [
                'employee_id' => 1,
                'date' => Carbon::today(),
                'check_in' => '08:00:00',
                'check_out' => '17:00:00',
                'status' => 'Present',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 2,
                'date' => Carbon::today(),
                'check_in' => '09:15:00',
                'check_out' => '17:00:00',
                'status' => 'Late',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 3,
                'date' => Carbon::today(),
                'check_in' => null,
                'check_out' => null,
                'status' => 'Absent',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}