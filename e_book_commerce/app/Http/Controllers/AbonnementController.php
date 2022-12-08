<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abonnement;
use App\Models\Souscription;
use Illuminate\Support\Facades\Auth;
use Validator;
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
    public function pay(Request $request, $packname)
    {
        //
        $validator = Validator::make($request->all(), [
            'payement_method' => 'required|string'
        ]);
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
        $validator = Validator::make($request->all(), [
            'libelle' => 'required|string',
            'prix_basic' => 'required|int',
            'prix_current' => 'required|int'
        ]);
        if($validator->fails()){
            return redirect()->back()->with("error", "Vous avez des erreurs dans le formulaire reverifier et essayer à nouveau.");
        }
        $newabonnement = new Abonnement;
        $newabonnement->libelle = $request->libelle;
        $newabonnement->price = $request->prix_basic;
        $newabonnement->is_current_price = $request->prix_current;

        if(!$newabonnement->save()){
            return redirect()->back()->with("error", "Echec d'enregistrement du nouvel abonnement une erreur est survenue");
        }
        return redirect()->back()->with("success", "Votre nouvel abonnement a été creer avec succes. il appparaitra dans la liste des abonnements");
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
    /**
     * the view for adding a new abonnement
     */
    public function addview()
    {
        return view('dashboard.admin.abonnements.add');
    }
}
