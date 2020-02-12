<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    protected $guarded = [];

    public function setDateToBeAchivedAttribute($date)
    {
        if (isset($date)) {
            $this->attributes['date_to_be_achived'] = \Carbon\Carbon::parse($date)->format('Y-m-d');
        }
    }

    public function category()
    {
        return $this->hasOne('App\ObjectiveCategory', 'id', 'category_id');
    }
}
