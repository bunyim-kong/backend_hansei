<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RosterInforSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rosters')->insert([
            [
                'employees_infor_id'=>'4',
                'start_time'        => '7:00am',
                'end_time'          => '6:00pm',
                'type'              => 'office',
            ],
        ]);
    }
}

