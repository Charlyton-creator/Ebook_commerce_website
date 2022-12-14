<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Recette;
use Promotion;
use EbPrice;
use Price;
use Temoignage;
class Ebook extends Model
{
    use HasFactory;
    protected $table = 'e_books';
    /**
     * Get the recettes for the ebook.
     */
    public function recettes()
    {
        return $this->hasMany(Recette::class);
    }
    /**
     * Promotion auquel appartient l'Ebook.
     */
    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }
    /**
     * Recuperer tous les temoignages de l'ebook
     */
    public function temoignages()
    {
        return $this->belongsToMany(Temoignage::class);
    }
    /**
     * Recuperer tous les utilisateurs qui ont acheter l'ebook
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
