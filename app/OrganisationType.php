<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganisationType extends Model
{
    protected $guarded = ['id'];

    public function children() {
        return $this->hasMany('App\OrganisationType', 'parent_id');
    }

    public function parent() {
        return $this->belongsTo('App\OrganisationType', 'parent_id');
    }

    public static function get_top() {
        return self::whereNull('parent_id')->get();
    }
}
