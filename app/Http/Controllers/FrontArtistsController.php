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
        $artist = Artist::where('id', $id)->get();
        return view('artist', compact('artist'));
    }


}
