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
        'status',
        'title',
        'initials',
        'pass',
        'body',
        'audio_id',
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


    public function photo(){

        return $this->belongsTo('App\Photo');

    }


    public function category(){

        return $this->belongsTo('App\Category');

    }


    public function audio(){

        return $this->belongsTo('App\Audio');

    }


    public function photoPlaceholder(){

        return "https://i.pravatar.cc/80?img=55";

    }


    public function frontPhotoPlaceholder(){

        return "https://i.pravatar.cc/300?img=55";

    }

    public function frontArtistPlaceholder(){

        return "https://via.placeholder.com/1024x500";

    }


    public function youtubeEmbed($video1){

        $parsedURL = parse_url($video1, PHP_URL_QUERY);

        parse_str($parsedURL, $output);

        return $output['v'];

//        return "<iframe id='ytplayer' type='text/html' width='' height='0' src='{$video1}'
//frameborder='0' allowfullscreen>";

//        return "<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/{$output['v']}\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";

    }


}
