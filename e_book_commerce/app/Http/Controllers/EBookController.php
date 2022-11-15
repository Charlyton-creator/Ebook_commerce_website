<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ebook_User;
use App\Models\Commande;
use App\Models\EBook;
use App\Models\Cart;
class EBookController extends Controller
{
    //
    public function index(){
        $allebooks = Ebook::all();
        return view('offres.offres', compact('allebooks'));
    }

    /**
     * addtocart
     */
    public function addtocart($id_ebook)
    {
        if($id_ebook == null){
            return redirect(route('mycart'));
        }
        $cart_id = null;
        if(auth()->check()){
            $user_id = auth()->user()->id;
            $ebook_user = new EBook_User;
            if(Cart::where('user_id', $user_id)->exists()){
                $cart_id = Cart::where('user_id', $user_id)->first()->id;
            }else{
                $cart = new Cart;
                $cart->user_id = $user_id;
                $cart->save();
                $cart_id = $cart->id;
            }
            $ebook_user->ebook_id = $id_ebook;
            $ebook_user->user_id = $user_id;
            $ebook_user->cart_id = $cart_id;
            $ebook_user->save();
            return redirect()->route('cartlist');
        }else{
           return redirect(route('401'));
        }
    }
    /**
     * get all the ebooks
     */
    public function allebooks()
    {
        $allebooks = Ebook::all();
        return view('dashboard.admin.ebooks.allebooks', compact('allebooks'));
    }
    /**
     * ebooks les plus achete
     */
    public function preferedebooks()
    {
        //
    }
    /**
     * ebboks les moins venndus
     */
    public function notpreferedebooks()
    {
        //
    }
    /**
     * delete an ebook
     */
    public function delete(Request $request)
    {
        //
    }
    /**
     * updte an ebook infos
     */
    public function update(Request $request)
    {
        //
    }

}
