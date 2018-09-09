<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $guarded = ['id'];

    public function organisation_type() {
        return $this->belongsTo('App\OrganisationType');
    }

    public function positions() {
        return $this->hasMany('App\Position');
    }
}
