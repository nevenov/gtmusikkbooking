<?php

namespace App\Http\Controllers;

use App\Artist;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $artists = Artist::latest('updated_at')->take(5)->get();

        return view('dashboard', compact('artists'));
    }
}
