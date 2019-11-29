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
            $subCatArr = [];

            if(count($category->children)>0){

                foreach ($category->children as $children) {
                    $cat_ids[] = $children->id;
                    $subCatArr[] = $children->id;
                }
            }
//            $artists = $category->artists()->whereIn('category_id', $cat_ids)->where('status', 'active')->get();
            $subCategories = Category::whereIn('id', $subCatArr)->get();
//            $oneManCat = Category::whereIn('id', 18)->get();
            $artists = Artist::whereIn('category_id', $cat_ids)->where('status', 'active')->orderBy('updated_at', 'desc')->get();

        } else {
            $artists = $category->artists()->where('status', 'active')->orderBy('updated_at', 'desc')->get();
        }

//        dd($subCategories); die;

        return view('gruppe', compact('category', 'artists', 'subCategories'));
    }


}
