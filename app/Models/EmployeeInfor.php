<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class EmployeeInfor extends Model

{
    protected $table = 'employees_infor';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'sex',
        'dob',
        'phone_numb',
        'email',
        'departments_id',
        'positions_id',
    ];

    public function attendances()
    {
        return $this -> hasMany(Attendance::class);
    }

    public function departments()
    {
        return $this -> belongsTo(Department::class);
    }

    public function leaves()
    {
        return $this -> hasMany(Leave::class);
    }

    public function positions()
    {
        return $this -> belongsTo(Position::class);
    }

    public function rosters()
    {
        return $this -> hasMany(Roster::class);
    }

    public function salaries()
    {
        return $this -> hasOne(Salary::class);
    }
}
