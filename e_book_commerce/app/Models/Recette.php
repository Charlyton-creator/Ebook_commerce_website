<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ebook;
use Categorie;
use GeoTag;
class Recette extends Model
{
    use HasFactory;
    protected $table = 'recettes';
    /**
     * Get the E_book that owns the recette.
     */
    public function e_book()
    {
        return $this->belongsTo(Ebook::class);
    }
    /**
     * Categorie de la recette.
     */
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    /**
     * Regions de la recette.
     */
    public function geo_tags()
    {
        return $this->belongsToMany(GeoTag::class);
    }
}
