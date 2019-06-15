<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

class FrontArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artist = Artist::where([
            ['id', '=', $id],
            ['status', '=', 'active']
        ])->firstOrFail();

        //$artist = Artist::findOrFail($id);

        //dd($artist);
        return view('artist', compact('artist'));
    }


}
