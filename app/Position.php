<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function organisation() {
        return $this->belongsTo('App\Organisation');
    }

    public function schedule() {
        return $this->hasOne('App\Schedule');
    }

    public function visa_instances() {
        return $this->hasMany('App\VisaInstance');
    }
}
