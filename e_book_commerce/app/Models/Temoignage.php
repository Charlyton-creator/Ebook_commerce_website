<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ebook;
class Temoignage extends Model
{
    use HasFactory;
    protected $table= 'temoignages';
    /**
     * Recuperer tous les E-Books qui ont ce temoignage
     */
    public function e_books()
    {
        return $this->belongsToMany(Ebook::class);
    }
    /**
     * Get all the users own by the review
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
