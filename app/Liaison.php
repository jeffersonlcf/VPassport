<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liaison extends Model
{
    protected $guarded  = ['id'];

    public function getUserAttribute()
    {
        return $this->position->user;
    }

    public function getOrganisationAttribute()
    {
        return $this->position->organisation;
    }
}
