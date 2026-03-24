<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeInfor;

class Department extends Model
{
    protected $table = 'department';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
    ];

    public function employees_infor()
    {
        return $this -> hasMany(EmployeeInfor::class);
    }
}
