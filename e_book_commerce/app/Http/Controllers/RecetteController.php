<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recette;
class RecetteController extends Controller
{
    //
    /**
     * get all the recettes
     */
    public function allrecettes()
    {
        //
        $allrecettes = Recette::all();
        return view('dashboard.admin.recettes.allrecettes', compact('allrecettes'));
    }
}
