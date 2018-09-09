<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaType extends Model
{
    protected $primaryKey = 'type';

    public $incrementing = false;

    protected $fillable = ['type'];

    const type_audio = 'audio';
    const type_image = 'image';
    const type_video = 'video';

}
