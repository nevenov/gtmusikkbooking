<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Audio;
use App\Category;
use App\Photo;
use Illuminate\Http\Request;

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
        $artists = Artist::orderBy('title', 'asc')->paginate(50);
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
        $categories = Category::orderBy('created_at', 'asc')->get();

        return view('admin.artists.create', compact('categories'));
    }


    // search
    public function search(Request $request){

        $search = $request->get('search');
        //dd($search);
        $artists = Artist::where('title', 'LIKE', '%' . $search . '%')->orderBy('title', 'asc')->paginate(50);
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
        $input = $request->all();

        // upload artist photo
        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }

        // upload artist demo mp3
        if($file = $request->file('audio_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('audio', $name);

            $audio = Audio::create(['file'=>$name]);

            $input['audio_id'] = $audio->id;
        }

        Artist::create($input);

        return redirect('/admin/artists')->with('status', 'Артистът е създаден успешно.');

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

        $categories = Category::orderBy('created_at', 'asc')->get();

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

        $input = $request->all();


        // upload artist photo
        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

//            $photo = Photo::find($artist->photo_id);

            //dd($photo);

            if($artist->photo) {

                unlink(public_path() . $artist->photo->file);

                $artist->photo->update(['file'=>$name]);

                $input['photo_id'] = $artist->photo->id;

            } else {

                $photo = Photo::create(['file'=>$name]);

                $input['photo_id'] = $photo->id;

            }
        }


        // upload artist demo mp3
        if($file = $request->file('audio_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('audio', $name);


            if($artist->audio) {

                unlink(public_path() . $artist->audio->file);

                $artist->audio->update(['file'=>$name]);

                $input['audio_id'] = $artist->audio->id;

            } else {

                $audio = Audio::create(['file'=>$name]);

                $input['audio_id'] = $audio->id;

            }
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
            unlink(public_path() . $artist->photo->file);

            $photo = Photo::findOrFail($artist->photo_id);

            $photo->delete();
        }

        $artist->delete();

        return redirect('/admin/artists')->with('status', 'Артистът е изтрит успешно. ');
    }

}
