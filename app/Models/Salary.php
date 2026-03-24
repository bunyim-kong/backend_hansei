<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salaries';

    protected $primaryKey = 'id';

    protected $fillable = [
        'employees_infor_id',
        'base_salary',
    ];

    public function salaries()

    {
        return $this -> hasOne(EmployeeInfor::class);
    }
}
