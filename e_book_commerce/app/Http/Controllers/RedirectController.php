<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    //
    /**
     * redirections to the user
     */

     public function notfound(){
        return view('redirections.404');
     }
     /**
      * 
      */

      public function forbiden()
      {
         return view('redirections.403');
      }
      /**
       * 
       */
      public function unauthorized()
      {
         return view('redirections.401');
      }
      /**
       * 
       */
      public function internaservererror()
      {
         return view('redirections.500');
      }
}
