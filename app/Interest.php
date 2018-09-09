<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $guarded = ['id'];

    public function users() {
        return $this->belongsToMany('App\User', 'user_interest');
    }
}
