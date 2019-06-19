<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class FrontCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::where('parent_id', 0)->orderBy('created_at', 'asc')->get();
        return view('index', compact('categories'));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $category = Category::findBySlugOrFail($slug);

        $artists = $category->artists()->where('status', 'active')->get();

        return view('gruppe', compact('category', 'artists'));
    }


}
