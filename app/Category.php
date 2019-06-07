<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name', 'photo_id', 'position'];


    public function photo(){

        return $this->belongsTo('App\Photo');

    }

    public function photoPlaceholder(){

        return "https://i.pravatar.cc/70?img=55";

    }
}
