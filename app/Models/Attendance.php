<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeInfor;

class Attendance extends Model
{
    protected $table = 'attendance';

    protected $primaryKey = 'id';

    protected $fillable = [
        'employees_infor_id',
        'date',
        'check_in',
        'check_out',
        'status',
    ];

    public function emmployees_infor()
    {
        return $this->belongsTo(EmployeeInfor::class);
    }

}
