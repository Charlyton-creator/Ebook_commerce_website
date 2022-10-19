<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EBookController extends Controller
{
    //
    public function index(){
        return view('offres.offres');
    }

    /**
     * addtocart
     */
    public function addtocart(Request $request)
    {
        //
        return redirect(route('home'));
    }
}
