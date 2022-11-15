<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeoTag;
class GeoTagController extends Controller
{
    //
    /**
     * get all the recettes of the geotag refered
     */
    public function recettesofgeotag($geptagid)
    {
        if(GeoTag::where('id', $geptagid)->exists())
        {
            $recettes = GeoTag::where('id', $geptagid)->first()->recettes;
        }else{
            return redirect(route('404'));
        }
    }
    /**
     * delete a geotag
     */
    public function delete(Request $request)
    {
        //
    }
    /**
     * 
     */
    public function allgeotags()
    {
        # code...
        $allgeostages = GeoTag::all();
        return view('dashboard.admin.geotags.all', compact('allgeostages'));
    }
}
