<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    //

    public function index()
    {
        return view('abonnements.abonnements');
    }

    /**
     * souscrire a un abonnement
     */
    public function souscrire(Request $request, $packname)
    {
        //
    }
    /**
     * return the souscription page view
     */
    public function souscriptionpage(Request $request, $packname)
    {
        return view('abonnements.souscription', ['packname'=>$packname]);
    }
}
