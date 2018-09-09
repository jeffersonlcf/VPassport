<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisaInstance extends Model
{
    protected $guarded  = ['id'];

    protected $appends = ['user', 'organisation'];

    public function visa()
    {
        return $this->belongsTo('App\Visa');
    }

    public function position() {
        return $this->belongsTo('App\Position');
    }

    public function getUserAttribute()
    {
        return $this->position->user;
    }

    public function getOrganisationAttribute()
    {
        return $this->position->organisation;
    }
}
