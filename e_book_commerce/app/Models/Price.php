<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ebook;
use Abonnement;
use EbPrice;
class Price extends Model
{
    use HasFactory;
    protected $table = 'prices';
    /**
     * avoir tous les e_books ayant ce prix
     */
    public function ebooks()
    {
        return $this->belongsToMany(Ebook::class)->using(EbPrice::class, 'e_book_prices');
    }
    /**
     * avoir tous les abonements ayant ce prix
     */
    public function abonnement()
    {
        return $this->belongsToMany(Abonnement::class)->using(AbPrice::class, 'abonnements_prices');
    }

}
