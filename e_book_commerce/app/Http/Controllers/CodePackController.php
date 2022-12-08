<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CodePack;
use Validator;
class CodePackController extends Controller
{
    //
    /**
     * strore a new codepack
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'longueur' => 'required|string|max:100'
        ]);
        if($validator->fails()){
            return redirect()->back()->with('error', "Votre formulaire contient des erreurs");
        }
        $codepack = new CodePack;
        $newcode = $this->genratecodepromo($request->longueur);
        $codepack->code = $newcode;
        if(!$codepack->save())
        {
            return redirect()->back()->with('error', "Une erreur est survenue lors de l'enregistrement du code généré");
        }
        return redirect()->back()->with('success', "Nouveau code Promo généré et enregistrer avec succès");
    }
    /**
     * update a code pack
     */
    public function update($icodpack)
    {
        //
    }
    /**
     * delete a codepack
     */
    public function delete($idcodepack)
    {
        //
        if($idcodepack !=null){
            if( CodePack::where('id', $idcodepack)->delete())
            {
                return redirect()->back()->with("success", "Code Supprimé avec succès");
            }
            return redirect()->back()->with("error", "La suppression n'a pas marché");
        }
        return redirect()->back()->with("error", "Action non possible aucun code promo n'a été indexé");
    }
    /**
     * get all the codepacks
     */
    public function getall()
    {
        //
        $allcodespack = CodePack::all();
        return view('dashboard.admin.codepacks.allcodes', compact('allcodespack'));
    }
    /**
     * the view for adding a new code pack for promotions
     */
    public function addview()
    {
        return view('dashboard.admin.codepacks.add');
    }
    /**
     * function that generate code
     */
    protected function genratecodepromo(int $longueur): String
    {
        $alpha = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $code = substr(str_shuffle($alpha), 0, $longueur);
        return $code;
    }
}
