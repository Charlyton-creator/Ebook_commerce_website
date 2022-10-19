<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
         return view('dashboard.dashboardcontent');
      }

   /**
   * Function that store a new instance of inscription
   */

     public function register(Request $request)
     {
         try {
            //code...
            if($request->email != ''){
               $request->validate([
                  'email' => 'required|unique:users',
               ]);
            }
            $request->validate([
               'password' => 'required|string|min:8',
               'name' => 'required|string|min:3|max:50',
            ]);
            $user = new User();
            $user->email = $request->email;
            $user->name = $request->name;
            $user->password = bcrypt($request->password);
            $user->save();
            return response()->json($user);
         } catch (\Exception $th) {
            //throw $th;
            return json($th);
         }
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

            if(!$user || !Hash::check($request->password,$user->password))
            {
               return redirect()->back()->with('msg','OOppes! You have entered invalid credentials');
            }
            else
            {
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
