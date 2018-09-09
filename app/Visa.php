<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visa extends Model
{
    protected $guarded = ['id'];

    public function visa_instances() {
        return $this->hasMany('App\VisaInstance');
    }
}
