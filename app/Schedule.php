<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $guarded = ['id'];

    public function position() {
        return $this->belongsTo('App\Positions');
    }
}
