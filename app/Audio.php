<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    //
    protected $upload = '/audio/';

    protected $fillable = ['file'];


    public function getFileAttribute($audio){

        return $this->upload . $audio;

    }
}
