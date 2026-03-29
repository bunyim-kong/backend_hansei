<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'employees_infor_id',
        'date',
        'check_in',
        'check_out',
        'status',
    ];

    public function employee()
    {
        return $this->belongsTo(EmployeesInfor::class, 'employees_infor_id');
    }
}