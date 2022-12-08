<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Recette;
use Validator;
class CategorieController extends Controller
{
    //
    /**
     * get all the recettes of the categorie
     */
    public function getallrecettesofcategorie($catid)
    {
        if((Categorie::where('id', $catid)->exists())){
            $recettes = Categorie::where('id', $catid)->first()->recettes;
        }else{
            return redirecet(route('404'));
        }
       
    }
    //
    public function getallcategories()
    {
        $allcategories = Categorie::all();
        return view('dashboard.admin.categories.allcategories', compact('allcategories'));
    }
    /**
     * strore a new catégorie
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'libelle' => 'string|required'
        ]);
        $newcategorie = new Categorie;
        $newcategorie->libelle = $request->libelle;
        if(!$newcategorie->save()){
            return redirect()->back()->with("error", "Une erreur est survenue lors de l'enregistrement de la catégorie");
        }
        return redirect()->back()->with("success", "Catégorie sauvegarder avec succès");
    }
    /**
     * update a catégorie
     */
    public function update(Request $request,$idcat)
    {
        //
    }
    /**
     * delelet a catégorie
     */
    public function delete()
    {
        //
    }
    /**
     * the view for adding a new categorie of recette
     */
    public function addview()
    {
        return view('dashboard.admin.categories.add');
    }
}
