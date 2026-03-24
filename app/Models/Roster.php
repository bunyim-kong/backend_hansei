<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    protected $table = 'rosters';

    protected $primaryKey = 'id';

    protected $fillable = [
        'employees_infor_id',
        'start_time',
        'end_time',
        'type',
    ];

    public function rosters()
    {
        return $this -> belongsTo(EmployeeInfor::class);
    }
}
