<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $table = 'pay_desig';
    protected $primaryKey = 'desg_code';

    public function jobs()
    {
        return $this->hasMany(Job::class, 'position_id', 'desg_code');
    }
}
