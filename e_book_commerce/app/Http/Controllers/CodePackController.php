<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CodePack;

class CodePackController extends Controller
{
    //
    /**
     * strore a new codepack
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * update a code pack
     */
    public function update($icodpack)
    {
        //
    }
    /**
     * delete a codepack
     */
    public function delete($idcodepack)
    {
        //
    }
    /**
     * get all the codepacks
     */
    public function getall()
    {
        //
        $allcodespack = CodePack::all();
        return view('dashboard.admin.codepacks.allcodes', compact('allcodespack'));
    }
}
