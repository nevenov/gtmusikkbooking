<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Audio;
use App\Category;
use App\Photo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AdminArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $artists = Artist::orderBy('updated_at', 'desc')->paginate(50);


        return view('admin.artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::where('parent_id', 0)->orderBy('created_at', 'asc')->get();

        return view('admin.artists.create', compact('categories'));
    }


    // search
    public function search(Request $request){

        $search = $request->get('search');
        //dd($search);
        $artists = Artist::where('title', 'LIKE', '%' . $search . '%')->orWhere('initials', 'like', '%' . $search . '%')->orderBy('title', 'asc')->paginate(50);
        return view('admin.artists.index', ['artists'=>$artists]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'photo_id' => 'mimes:jpeg,png,jpg,gif',
            'audio_id' => 'mimes:mpga,wav',
            'audio2' => 'mimes:mpga,wav',

        ]);

        $picture = "";

        $input = $request->all();


        // upload artist photo
        if ($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;

//            return config('app.app_path_public', 'G.T.MUSIKKBOOKING DASHBOARD').'/images/'.$name; die;

            $resizeimage = Image::make(config('app.app_path_public').'/images/'.$name)->widen(1200, function ($constraint) {
                $constraint->upsize();
            })->text('G.T.MUSIKKBOOKING', 20, 20, function($font) {
                $font->file(config('app.app_path_public').'/front/fonts/Lato-Regular.ttf');
                $font->size(24);
                $font->color('#fdf6e3');
                $font->align('left');
                $font->valign('top');
                $font->angle(0);
            });
            $resizeimage->save();
        }


        // upload artist demo mp3
        if($file = $request->file('audio_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('audio', $name);

            //$audio = Audio::create(['file'=>$name]);

            //$input['audio_id'] = $audio->id;

            $input['audio_id'] = $name;
        }

        // upload artist demo mp3 second file
        if($file2 = $request->file('audio2')){

            $name2 = (time() + 60*60) . $file2->getClientOriginalName();

            $file2->move('audio', $name2);

            //$audio2 = Audio::create(['file'=>$name2]);

            //$input['audio2'] = $audio2->id;

            $input['audio2'] = $name2;
        }

        Artist::create($input);

        return redirect('/admin/artists')->with('status', 'Артистът е създаден успешно.'.$picture);

        //dd($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $artist = Artist::findOrFail($id);

        $categories = Category::where('parent_id', 0)->orderBy('created_at', 'asc')->get();

        return view('admin.artists.edit', compact('artist', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $artist = Artist::findOrFail($id);

        $request->validate([
            'photo_id' => 'mimes:jpeg,png,jpg,gif',
            'audio_id' => 'mimes:mpga,wav',
            'audio2' => 'mimes:mpga,wav',

        ]);

        $input = $request->all();


        // upload artist photo
        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

//            $photo = Photo::find($artist->photo_id);

            //dd($photo);

            if($artist->photo) {

                unlink(config('app.app_path_public') . $artist->photo->file);

                $artist->photo->update(['file'=>$name]);

                $input['photo_id'] = $artist->photo->id;

            } else {

                $photo = Photo::create(['file'=>$name]);

                $input['photo_id'] = $photo->id;

            }

            $resizeimage = Image::make(config('app.app_path_public').'/images/'.$name)->widen(1200, function ($constraint) {
                $constraint->upsize();
            })->text('G.T.MUSIKKBOOKING', 20, 20, function($font) {
                $font->file(config('app.app_path_public').'/front/fonts/Lato-Regular.ttf');
                $font->size(24);
                $font->color('#fdf6e3');
                $font->align('left');
                $font->valign('top');
                $font->angle(0);
            });
            $resizeimage->save();
        }


        // upload artist demo mp3
        if($file = $request->file('audio_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('audio', $name);


            if(isset($artist->audio_id) && $artist->audio_id!='/audio/') {

                unlink(config('app.app_path_public') . $artist->audio_id);

                //$artist->audio->update(['file'=>$name]);

                //$input['audio_id'] = $artist->audio->id;

            }

            $input['audio_id'] = $name;
        }


        // upload artist demo mp3 second file
        if($file2 = $request->file('audio2')){

            $name2 = time() . $file2->getClientOriginalName();

            $file2->move('audio', $name2);


            if(isset($artist->audio2) && $artist->audio2!='/audio/') {

                unlink(config('app.app_path_public') . $artist->audio2);

//                $artist->audio2->update(['file'=>$name2]);
//
//                $input['audio2'] = $artist->audio2->id;

            }

            $input['audio2'] = $name2;
        }


        $artist->where('id', $id)->first()->update($input);

        return redirect('/admin/artists')->with('status', 'Артистът е редактиран успешно. ');

//        dd($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $artist = Artist::findOrFail($id);

        if($artist->photo){
            unlink(config('app.app_path_public') . $artist->photo->file);

            $photo = Photo::findOrFail($artist->photo_id);

            $photo->delete();
        }


        if(isset($artist->audio_id) && $artist->audio_id!='/audio/'){
            unlink(config('app.app_path_public') . $artist->audio_id);
        }

        if(isset($artist->audio2) && $artist->audio2!='/audio/'){
            unlink(config('app.app_path_public') . $artist->audio2);
        }


        $artist->delete();

        return redirect('/admin/artists')->with('status', 'Артистът е изтрит успешно. ');
    }

}
