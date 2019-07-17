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

        if(isset($artist->audio_id) && $artist->audio_id!='/audio/'){
            unlink(config('app.app_path_public') . $artist->audio_id);
        }

        $artist->audio_id = NULL;

        $artist->save();

        return back()->with('status', 'Демото на артиста е изтрито успешно. ');
    }

    public function destroysec($id)
    {
        //
        $artist = Artist::findOrFail($id);

        if(isset($artist->audio2) && $artist->audio2!='/audio/'){
            unlink(config('app.app_path_public') . $artist->audio2);
        }

        $artist->audio2 = NULL;

        $artist->save();

        return back()->with('status', 'Демо 2 на артиста е изтрито успешно. ');
    }
}
