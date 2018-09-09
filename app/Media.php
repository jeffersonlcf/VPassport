<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $guarded = ['id'];

    public function mediable()
    {
        return $this->morphTo();
    }

    public function type() {
        return $this->belongsTo('App\MediaType', 'media_type', 'type');
    }
}
