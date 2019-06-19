<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use Sluggable;
    use SluggableScopeHelpers;


    protected $fillable = ['parent_id', 'name', 'photo_id', 'position'];


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    public function photo(){

        return $this->belongsTo('App\Photo');

    }

    public function artists(){

        return $this->hasMany('App\Artist');

    }

    public function photoPlaceholder(){

        return "https://i.pravatar.cc/70?img=55";

    }

    public function frontPhotoPlaceholder(){

        return "https://i.pravatar.cc/300?img=55";

    }
}
