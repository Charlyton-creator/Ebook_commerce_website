<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
class CommandeController extends Controller
{
    //
    /**
     * get all commandes
     */
    public function allcommandes()
    {
        //
        $allcommandes = Commande::all();
        return view('dashboard.admin.commandes.allcommandes', compact('allcommandes'));
    }
}
