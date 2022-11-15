<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\CodePack;
use App\Models\Promotion;
class PromotionController extends Controller
{
    //
    /**
     * get promotion of the day
     */
    public static function getpromotionofday(){
        if(Promotions::where('is_active', true)->exists()){
            $promotion =  Promotions::where('is_active', true)->first();
            if(strtotime($promotion->duree) > strtotime(date('d-m-y'))){
                return $promotion;
            }else{
                return "No promotion for today";
            }
        }
    }
    /**
     * validte promotion code pack
     */
    public function applycodepack(Request $request)
    {
        if($request->discount_token == null){
            return redirect()->back();
        }
        if(CodePack::where('code', $request->discount_token)->exists()){
            $codepack = CodePack::where('code', $request->discount_token)->first();
            $reduction = Promotion::where('codepack_id', $codepack->id)->first()->reduction;
            if(strtotime(Promotion::where('codepack_id', $codepack->id)->first()->duree) > strtotime(date('y-m-d')) && Promotion::where('codepack_id', $codepack->id)->first()->is_active == true){
                $request->session()->put('reduction', $reduction);
            }
            $request->session()->put('unavailable', $reduction);
            return redirect()->back();
        }else{
            return redirect(route('404'));
        }
    }
    /**
     * get all the promotions
     */
    public function getallpromotion()
    {
        //
        $allpromotions = Promotion::all();
        return view('dashboard.admin.promotions.allpromotions', compact('allpromotions'));
    }
    /**
     * update a promotion infos
     */
    public function update(Request $request)
    {
        //
    }
    /**
     * delete a promotion
     */
    public function delete(Request $request)
    {
        //
    }
    /**
     * store a new promotion
     */
    public function store(Request $request)
    {
        //
    }
}
