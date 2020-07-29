<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function brands()
    {
        return $this->belongsTo('App\Models\Brand');
    }
}
