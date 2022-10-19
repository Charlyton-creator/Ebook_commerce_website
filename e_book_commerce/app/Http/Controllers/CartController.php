<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    /**
     * return the view
     */
    public function index(){
        return view('cart.cartlisting');
    }
}
