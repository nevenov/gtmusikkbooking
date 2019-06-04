<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    protected $fillable = [
        'user_id',
        'category_id',
        'photo_id',
        'title',
        'body',
        'audio1',
        'audio2',
        'audio3',
        'video1',
        'video2',
        'video3',
        'reference1',
        'reference2',
        'reference3'
    ];
}
