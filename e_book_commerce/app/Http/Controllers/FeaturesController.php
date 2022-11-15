<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abonnement;
use App\Models\Features;
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
}
