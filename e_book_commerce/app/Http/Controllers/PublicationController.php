<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicite;
class PublicationController extends Controller
{
    //
    /**
     * 
     */
    public function index(){
        return view('publicités.publicités');
    }
    /**
     * store a new publication
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * get all the pubs
     */
    public function allpubs()
    {
        //
        $allpubs = Publicite::all();
        return view('dashboard.admin.publications.publications', compact('allpubs'));
    }
    /**
     * update a pubs
     */
    public function update(Request $request)
    {
        //
    }
    /**
     * delete a pub
     */
    public function delete(Request $request)
    {
        //
    }
}
