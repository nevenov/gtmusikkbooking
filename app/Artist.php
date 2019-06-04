<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    use Sluggable;
    use SluggableScopeHelpers;

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



    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }



}
