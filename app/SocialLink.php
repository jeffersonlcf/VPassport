<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    protected $guarded = ['id'];

    public function sociable()
    {
        return $this->morphTo();
    }
}
