<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class EmployeeInforSeeder extends Seeder
{
    public function run(): void
    {
        $employees = [
            ['name' => 'Sophea Chan',    'sex' => 'female', 'dob' => '1990-05-14', 'phone_numb' => '012345678', 'email' => 'sophea.chan@company.com',    'department_id' => 1, 'position_id' => 1],
            ['name' => 'Dara Meas',      'sex' => 'male',   'dob' => '1993-08-20', 'phone_numb' => '012345679', 'email' => 'dara.meas@company.com',      'department_id' => 1, 'position_id' => 2],
            ['name' => 'Ratha Lim',      'sex' => 'male',   'dob' => '1988-11-02', 'phone_numb' => '098765432', 'email' => 'ratha.lim@company.com',      'department_id' => 2, 'position_id' => 3],
            ['name' => 'Pisey Keo',      'sex' => 'female', 'dob' => '1995-03-22', 'phone_numb' => '077123456', 'email' => 'pisey.keo@company.com',      'department_id' => 2, 'position_id' => 4],
            ['name' => 'Virak Sorn',     'sex' => 'male',   'dob' => '1997-06-15', 'phone_numb' => '085654321', 'email' => 'virak.sorn@company.com',     'department_id' => 2, 'position_id' => 4],
            ['name' => 'Channary Ros',   'sex' => 'female', 'dob' => '1991-01-10', 'phone_numb' => '096987654', 'email' => 'channary.ros@company.com',   'department_id' => 3, 'position_id' => 5],
            ['name' => 'Borey Phan',     'sex' => 'male',   'dob' => '1994-09-05', 'phone_numb' => '078321654', 'email' => 'borey.phan@company.com',     'department_id' => 3, 'position_id' => 6],
            ['name' => 'Sreyleak Noun',  'sex' => 'female', 'dob' => '1989-12-25', 'phone_numb' => '011456789', 'email' => 'sreyleak.noun@company.com',  'department_id' => 4, 'position_id' => 7],
            ['name' => 'Kosal Heng',     'sex' => 'male',   'dob' => '1996-04-18', 'phone_numb' => '092111222', 'email' => 'kosal.heng@company.com',     'department_id' => 4, 'position_id' => 8],
            ['name' => 'Leak Sok',       'sex' => 'female', 'dob' => '1992-07-30', 'phone_numb' => '099333444', 'email' => 'leak.sok@company.com',       'department_id' => 5, 'position_id' => 9],
            ['name' => 'Menghour Thy',   'sex' => 'male',   'dob' => '1998-02-14', 'phone_numb' => '070555666', 'email' => 'menghour.thy@company.com',   'department_id' => 5, 'position_id' => 10],
        ];

        foreach ($employees as $emp) {
            DB::table('employees_infor')->insert([
                'name'           => $emp['name'],
                'sex'            => $emp['sex'],
                'dob'            => $emp['dob'],
                'phone_numb'     => $emp['phone_numb'],
                'email'          => $emp['email'],
                'department_id' => $emp['department_id'],
                'position_id'   => $emp['position_id'],
                'created_at'     => Carbon::now(),
                'updated_at'     => Carbon::now(),
            ]);
        }
    }
}