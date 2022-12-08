<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abonnement;
use App\Models\Features;
use Validator;
class FeaturesController extends Controller
{
    //

    /**
     * get the features of an abonement
     */
    public function getfeatures($idabonnement)
    {
        if($idabonnement != null){
            $features = Abonnement::find($idabonnement)->features;
        }
        return view('abonnements.abonnements', compact('features'));
    }
    /**
     * strore a new feature
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'libelle' => 'required|string',
            'target_abonnement' => 'required'
        ]);
        if($validator->fails())
        {
            return redirect()->back()->with("error", "Vous avez des erreurs dans votre formulaire veuillez reverifier et essayer à nouveau");
        }
        $newfeature = new Features;
        $newfeature->libelle = $request->libelle;
        $newfeature->abonnement_id = $request->target_abonnement;
        if(!$newfeature->save()){
            return redirect()->back()->with("error", "Une erreur est survenue lors de l'enregistrement. Le serveur n'a pu continuer");
        }
        return redirect()->back()->with("success", "nouveau feature sauvegarder avec succès. Les utilisateurs auront cette avantage en souscrivant a cette offre");

    }
    /**
     * update a feature
     */
    public function update(Request $request)
    {
        //
    }
    /**
     * delete a feature
     */
    public function delete(Request $request)
    {
        //
    }
    /**
     * view for adding a new abonnement feature
     */
    public function addview()
    {
        return view('dashboard.admin.features.add');
    }
}
