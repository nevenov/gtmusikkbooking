<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

class AdminAudiosController extends Controller
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

        if($artist->audio){
            unlink(public_path() . $artist->audio->file);
        }

        $artist->audio->delete();

        return back()->with('status', 'Демото на артиста е изтрита успешно. ');
    }
}
