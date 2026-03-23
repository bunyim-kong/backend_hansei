<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            ['name' => 'Human Resources'],
            ['name' => 'Information Technology'],
            ['name' => 'Finance'],
            ['name' => 'Operations'],
            ['name' => 'Marketing'],
            ['name' => 'Security']
        ];

        foreach ($departments as $dept) {
            DB::table('departments')->insert([
                'name'       => $dept['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}