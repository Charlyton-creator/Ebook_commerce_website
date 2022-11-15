<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Ebook;
use App\Models\Ebook_User;
use App\Models\Commande;
use App\Models\Payement;
class CartController extends Controller
{
    //

    /**
     * return the view
     */
    public function index(){
        if(auth()->check()){
            $userid = auth()->user()->id;
            $ebooks = [];
            if(Cart::where('user_id', $userid)->exists()){
                $cartelements = Cart::where('user_id', $userid)->first()->ebookusers;
                foreach ($cartelements as $ebook_user) {
                    # code...
                    $ebook = Ebook::where('id', $ebook_user->ebook_id)->first();
                    array_push($ebooks, $ebook);
                }
                return view('cart.cartlisting', compact('ebooks'));
            }else{
                return redirect(route('404'));
            }
        }else{
            return redirect(route('401'));
        }
        
    }
    /**
     * validate cart and make command
     */
    public function validatecart(Request $request)
    {
        if(auth()->check()){
            $newcommande = new Commande;
            $user_id = auth()->user()->id;
            $cart_id = Cart::where('user_id', $user_id)->first()->id;
            $newcommande->user_id = $user_id;
            $newcommande->cart_id = $cart_id;
            $newcommande->save();
            $request->session()->put('commande', $newcommande);
            return redirect(route('cartlist'));
        }else{
            return redirect(route('401'));
        }
    }
    /**
     * pay the commande fees and receive your ebooks
     */
    public function storepayement(Request $request)
    {
        try {
            //code...
            if(auth()->check()){
                $payement = new Payement;
                $payement->cart_id = Cart::where('user_id', auth()->user()->id)->first()->id;
                $payement->payement_method = $request->payement_method;
                $payement->payement_status = 'pending';
                $payement->adresse = $request->user_address;
                $payement->numero_carte_credit = $request->card_number;
                $payement->nom_proprietaire = $request->cardholder_name;
                $payement->Net_due = $request->total;
                $payement->cvv = $request->cvv;
                $month = $request->month;
                $day = $request->day;
                $payement->date_expiration = $day.'-'.$month;
                $payement->save();
                Commande::where('user_id', auth()->user()->id)->update(['status'=>'payed']);
                Ebook_User::where('user_id', auth()->user()->id)->delete();
                $request->session()->forget('commande');
                session()->put('payed',$payement);
                return redirect()->back();
            }else{
                return redirect(route('401'));
            }
        } catch (\Exception $th) {
            //throw $th;
            return dd($th->getMessage());
        }
    }

}
