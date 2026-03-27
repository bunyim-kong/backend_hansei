<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class position extends Model
{
    protected $table = 'position';

    protected $primaryKey = 'id';

    protected $fillable = [
         'name',
        'sex',
        'dob',
        'phone_num',
        'email',
        'department_id',
        'position_id'
    ];
    // Relationships: One employee has many attendances
   public function attendances()
        {
            return $this->hasMany(Attendance::class);
        }
}
