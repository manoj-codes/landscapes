<?php

namespace App\Http\Controllers;

use App\Photographer;
use Illuminate\Http\Request;

class PhotographerController extends Controller
{

    public function showAllPhotographers()
    {
        return response()->json(Photographer::all());
    }

    public function showPhotographerAlbums($id)
    {
        $aPhotographer = Photographer::find($id);
        $aPhotographerAlbums = $aPhotographer->albums;

        return response()->json($aPhotographer);
    }


}
