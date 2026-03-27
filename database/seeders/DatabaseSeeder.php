<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            DepartmentSeeder::class,      // 1st — no dependencies
            PositionSeeder::class,        // 2nd — no dependencies
            EmployeeInforSeeder::class,
            RosterInforSeeder::class,   // 3rd — needs departments + positions        // 7th — needs employees
        ]);
    }
}