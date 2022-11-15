<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payement;
class PayementController extends Controller
{
    //
    /**
     * get all the payement
     */
    public function allpayements()
    {
        //
        $allpayements = Payement::all();
        return view('dashboard.admin.payements.payements', compact('allpayements'));
    }
}
