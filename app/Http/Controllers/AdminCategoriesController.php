<?php

namespace App\Http\Controllers;

use App\Category;
use App\Photo;
use Illuminate\Http\Request;

class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::orderBy('created_at', 'asc')->paginate(20);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $levels = Category::where('parent_id', 0)->orderBy('created_at', 'asc')->get();
        return view('admin.categories.create', compact('levels'));
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

        //dd($input);

        if($file = $request->file('photo_id') && $input['parent_id']==0){

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }

        Category::create($input);

        return redirect('/admin/categories')->with('status', 'Категорията е създадена успешно.');
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
        $category = Category::findOrFail($id);

        $levels = Category::where('parent_id', 0)->orderBy('created_at', 'asc')->get();

        return view('admin.categories.edit', compact('category', 'levels'));

//        dd($category);
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
        $category = Category::findOrFail($id);

        $input = $request->all();

        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);


            if($category->photo) {

                unlink(public_path() . $category->photo->file);

                $category->photo->update(['file'=>$name]);

                $input['photo_id'] = $category->photo->id;

            } else {

                $photo = Photo::create(['file'=>$name]);

                $input['photo_id'] = $photo->id;

            }

        }

        $category->where('id', $id)->first()->update($input);

        return redirect('/admin/categories')->with('status', 'Категорията е редактирана успешно. ');

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
        $category = Category::findOrFail($id);

        if($category->photo){
            unlink(public_path() . $category->photo->file);

            $photo = Photo::findOrFail($category->photo_id);

            $photo->delete();
        }

        $category->delete();

        return redirect('/admin/categories')->with('status', 'Групата е изтрита успешно. ');
    }
}
