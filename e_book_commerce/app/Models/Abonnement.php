<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User;
use Price;
use AbPrice;
use Features;
class Abonnement extends Model
{
    use HasFactory;
    protected $table = "abonnements";
    /**
     * Get the users of the abonnement.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
    /**
     * Avoir tous les prix de l'abonement
     */
    public function prices()
    {
        return $this->belongsToMany(Price::class)->using(AbPrice::class, 'abonements_prices');
    }
    /**
     * get all the features blong to the abonnement
     */
    public function features()
    {
        return $this->belongsToMany(Features::class);
    }
}
