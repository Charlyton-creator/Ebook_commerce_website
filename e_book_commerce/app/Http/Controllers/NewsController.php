<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewsSouscriptionMail;
use Validator;
use App\Models\News;
class NewsController extends Controller
{
    //
    /**
     * suscribe
     */
    public function suscribe(Request $request)
    {
        try {
            //code...
            if($request->email != ''){
                $request->validate([
                   'email' => 'required|unique:users',
                ]);
             }
            $newnews = new News;
            $newnews->email = $request->email;
            $newnews->month_souscription = date('M');
            $newnews->year_souscription = date('Y');
            $newnews->save();
            //Mail::to($request->email)->send(new NewsSouscriptionMail($message));
            return response()->json($newnews);
        } catch (\Exception $th) {
            //throw $th;
            return response()->json([
                'message' => $th->getMessage()
            ],500);
        }
    }
    /**
     * all the news souscription
     */
    public function allsouscription()
    {
        //
        $allsouscriptions = News::all();
        return view('dashboard.admin.news.allnews', compact('allsouscriptions'));
    }
}
