<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abonnement;
use App\Models\Souscription;
use App\Models\Payement;
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
    public function pay(Request $request, $packname, $payementmethod)
    {
        //
        switch ($payementmethod) {
            case 'Carte':
                # code...
                $this->payementThroughtCarte($request);
                break;
            case 'Tmoney':
                # code... 
                $this->payementThroughtTmoney($request);
            case 'Flooz':
                # code... 
                $this->payementThroughtFlooz($request);
            default:
                # code...
                return redirect()->back();
                break;
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
    /**
     * paythrought carte crédit
     */
    protected function payementThroughtCarte(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cardholder_name' => 'required',
            'card_number' => 'required|number|max:12',
            'day' => 'required',
            'month' => 'required',
            'cvv' => 'required',
            'user_adress' => 'required',
            'total_amount' => 'required'
        ]);
        if($validator->fails())
        {
            return false;
        }
        $sous_id = null;
        $souscription = Souscription::where('user_id', auth()->user()->id)->get();
        if(!empty($souscription)){
            if($souscription->is_active == false){
                $sous_id = $souscription->id;
            }
        }
        $payement = new Payement;
        $payement->souscription_id = $sous_id;
        $payement->nom_proprietaire = $request->cardholder_name;
        $payement->numero_carte = $request->card_number;
        $payement->carte_expiration_date = $request->day.'-'.$request->month;
        $payement->carte_cvv = $request->cvv;
        $payement->total = $request->total_amount;
        $payement->address = $request->user_adress;
        $payement->payement_status = "pending";
        $payement->payement_method = "Carte Crédit";

        $payement->save();

    }
    /**
     * pay throught Tmoney
     */
    protected function payementThroughtTmoney(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom_proprietaire' => 'required|string',
            'numero_transac_tmoney' => 'required|number',
            'user_adress' => 'required',
            'total_amount' => 'required'
        ]);
        if($validator->fails()){
            return false;
        }
        $sous_id = null;
        $souscription = Souscription::where('user_id', auth()->user()->id)->get();
        if(!empty($souscription)){
            if($souscription->is_active == false){
                $sous_id = $souscription->id;
            }
        }
        $payement = new Payement;
        $payement->souscription_id = $sous_id;
        $payement->nom_proprietaire = $request->nom_proprietaire;
        $payement->numero_tmoney = $request->numero_transac_tmoney;
        $payement->address = $request->user_adress;
        $payement->total = $request->total_amount;
        $payement->payement_status = "pending";
        $payement->payement_method = "Tmoney";

        $payement->save();
    }
    /**
     * pay throught Flooz
     */
    protected function payementThroughtFlooz(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom_proprietaire' => 'required|string',
            'numero_transac_flooz' => 'required|number',
            'user_adress' => 'required',
            'total_amount' => 'required'
        ]);
        if($validator->fails()){
            return false;
        }
        $sous_id = null;
        $souscription = Souscription::where('user_id', auth()->user()->id)->get();
        if(!empty($souscription)){
            if($souscription->is_active == false){
                $sous_id = $souscription->id;
            }
        }else{
            return;
        }
        $payement = new Payement;
        $payement->souscription_id = $sous_id;
        $payement->nom_proprietaire = $request->nom_proprietaire;
        $payement->numero_flooz = $request->numero_transac_flooz;
        $payement->address = $request->user_adress;
        $payement->total = $request->total_amount;
        $payement->payement_status = "pending";
        $payement->payement_method = "Flooz";

        $payement->save();
    }
}
