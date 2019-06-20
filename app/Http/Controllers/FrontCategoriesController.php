<?php

namespace App\Http\Controllers;

use App\Artist;
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

        if ($category->parent_id == 0) {

            $cat_ids[] = $category->id;

            if(count($category->children)>0){

                foreach ($category->children as $children) {
                    $cat_ids[] = $children->id;
                    $subCategories[] = $children->id;
                }
            }

            //print_r($cat_ids); die;
//            $artists = $category->artists()->whereIn('category_id', $cat_ids)->where('status', 'active')->get();
            $artists = Artist::whereIn('category_id', $cat_ids)->get();
            //dd($artists); die;


        } else {
            $subCategories = [];
            $artists = $category->artists()->where('status', 'active')->get();
        }

//        dd($subCategories); die;



        return view('gruppe', compact('category', 'artists', 'subCategories'));
    }


}
