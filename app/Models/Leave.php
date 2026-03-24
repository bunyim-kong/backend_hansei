<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $table = 'leaves';

    protected $primaryKey = 'id';

    protected $fillable = [
        'employees_infor_id',
        'type',
        'start_date',
        'end_date',
        'reason',
        'status',
    ];

    public function leaves()
    {
        return $this -> hasMany(EmployeeInfor::class);
    }

}
