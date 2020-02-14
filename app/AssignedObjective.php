<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignedObjective extends Model
{
    protected $guarded = [];


    public function objective()
    {
        return $this->hasOne('App\Objective', 'id', 'objective_id');
    }


    public function user()
    {
        return $this->hasOne('App\User', 'id', 'colleague_number');
    }
}
