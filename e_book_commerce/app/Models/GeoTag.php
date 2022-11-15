<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Recette;
class GeoTag extends Model
{
    use HasFactory;
    protected $table = 'geo_tags';
    /**
     * Les recettes appaartenant au Tag 
     */
    public function recettes()
    {
        return $this->belongsToMany(Recette::class)->using(RecetteGeoTag::class);
    }
}
