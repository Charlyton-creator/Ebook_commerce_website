<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use App\Models\Payement;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class AuthController extends Controller
{
   public function _construct()
   {
      $this->middleware('auth.custom', ['except' => ['login', 'register', 'index']]);
   }

    //
    /**
     * get the main view
     */

     public function index()
     {
        return view('Auth.auth');
     }
     /**
       * Dasboard index
       */
      public function dashboardindex()
      {
         //$number_cart_elements = Ebook_User::where('user_id', auth()->user->id)->count();
         $number_users = User::count();
         $number_abonnees = User::where('has_abonnement', 1)->count();
         $allpayements = Payement::all();

         return view('dashboard.dashboardcontent', compact("allpayements","number_users","number_abonnees"));
      }

   /**
   * Function that store a new instance of inscription
   */

     public function register(Request $request)
     {
         if($request->email != null){
            $request->validate([
               'email' => 'required|unique:users',
            ]);
         }
         $request->validate([
            'password' => 'required|string|min:8',
            'name' => 'required|string|max:50',
         ]);
         $user = new User();
         $user->email = $request->email;
         $user->nom = $request->name;
         $user->prenom = $request->prenom;
         $user->password = bcrypt($request->password);
         $user->sexe = $request->sexe;
         $user->tel_number = $request->tel;
         $user->profile = $request->profil;
         $user->activity_domain = $request->activity_domain;
         $user->save();
         $cart = new Cart;
         $cart->user_id = $user->id;
         $cart->save();
         return response()->json($user);
     }
     /**
      * log the user
      */
      public function login(Request $request){
         $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:100',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
         return redirect()->back()->with('msg',$validator->errors());
        }
         $user = User::where('email', $request->email)->first();

            if(!$user || !(Hash::check($request->password, $user->password)))
            {
               return redirect()->back()->with('msg','OOppes! You have entered invalid credentials');
            }
            else
            {
               Auth::login($user);
               $request->session()->put('user', $user);
               return redirect(route('mydashboard'))->withSuccess('You have Successfully logged in');
            }
      }
      /**
       * logout the user
       * 
       */

      public function logout(Request $request)
      {
         try {
            //code...
            if($request->session()->has('user')){
               Auth::logout();
               $request->session()->forget('user');
               $request->session()->flush();
               return redirect(route('home'))->withSuccess('You have Successfully logged out');;
            }else{
               return redirect(route('403'));
            }
         } catch (\Exception $th) {
            //throw $th;
            return redirect(route('401'));
         }
      }
}
