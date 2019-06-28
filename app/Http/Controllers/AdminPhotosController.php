<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Category;
use Illuminate\Http\Request;

class AdminPhotosController extends Controller
{

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
        }

        $artist->photo->delete();

        return back()->with('status', 'Снимката на артиста е изтрита успешно. ');
    }


    public function destroycategory($id)
    {
        //
        $category = Category::findOrFail($id);

        if($category->photo){
            unlink(config('app.app_path_public') . $category->photo->file);
        }

        $category->photo->delete();

        return back()->with('status', 'Снимката на групата е изтрита успешно. ');
    }


}
