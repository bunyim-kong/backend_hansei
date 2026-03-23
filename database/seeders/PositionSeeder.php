<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;        // ← missing this
use Illuminate\Support\Carbon;            // ← missing this

class PositionSeeder extends Seeder
{
    public function run(): void
    {
        $position = [
            ['name' => 'HR Manager'],
            ['name' => 'HR Officer'],
            ['name' => 'IT Manager'],
            ['name' => 'Software Developer'],
            ['name' => 'Finance Manager'],
            ['name' => 'Accountant'],
            ['name' => 'Operations Manager'],
            ['name' => 'Logistics Staff'],
            ['name' => 'Marketing Manager'],
            ['name' => 'Content Creator'],
        ];

        foreach ($position as $pos) {
            DB::table('positions')->insert([
                'name'       => $pos['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}