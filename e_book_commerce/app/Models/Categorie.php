<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Recette;
class Categorie extends Model
{
    use HasFactory;
    protected $table = "categories";
    /**
     * Les recettes de la categorie
     */
    public function recettes()
    {
        return $this->hasMany(Recette::class);
    }
}
