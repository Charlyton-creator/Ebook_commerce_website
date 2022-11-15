<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abonnement;
use App\Models\Souscription;
use Illuminate\Support\Facades\Auth;
class AbonnementController extends Controller
{
    //

    public function index()
    {
        //$standarfeatures = Abonnement::where('libelle', 'Basic')->first()->features;
        //$premiumfeatures = Abonnement::where('libelle', 'Premium')->first()->features;
        //$ultimatefeatures = Abonnement::where('libelle', 'Ultimate')->first()->features;
        $abonnements = Abonnement::all();
        if(!empty($abonnements)){
            return view('abonnements.abonnements', compact('abonnements'));
        }else{
            return redirect()->back()->withErrors("null")->withInput();
        }
    }
    //
    public function getallabonnements()
    {
        $abonnements = Abonnement::all();
        if(!empty($abonnements)){
            return view('dashboard.admin.abonnements.allabonnements', compact('abonnements'));
        }else{
            return redirect()->back()->withErrors("null")->withInput();
        }
    }

    /**
     * souscrire a un abonnement
     */
    public function pay(Request $request)
    {
        //
        try {
            //code...
            return response()->json($newpayement);
        } catch (\Exception $th) {
            //throw $th;
            return response()->json([
                'message' => $th->getMessage()
            ]);
        }
    }
    /**
     * return the souscription page view
     */
    public function souscriptionpage(Request $request, $packname)
    {
        $souscription = new Souscription;
        if(auth()->check()){
            $userid = auth()->user()->id;
            $abonnementid = Abonnement::where('libelle', $packname)->first()->id;
            $souscription->user_id = $userid;
            $souscription->abonnement_id = $abonnementid;
            $souscription->save();
            return view('abonnements.souscription', ['packname'=>$packname]);
        }else{
            return redirect(route('401'));
        }
    }
    /**
     * store a new abonnement
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * delete an abonnement
     */
    public function delete(Request $request)
    {
        //
    }
    /**
     * update abonnement
     */
    public function update(Request $request)
    {
        //
    }
}
