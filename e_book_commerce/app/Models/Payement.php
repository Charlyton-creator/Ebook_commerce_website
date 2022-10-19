<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cart;
use Souscription;

class Payement extends Model
{
    use HasFactory;
    protected $table = 'payements';
    /**
     * Get the cart associated with the payement.
     */
    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
    /**
     * Get the souscription associated with the payement.
     */
    public function payement()
    {
        return $this->hasOne(Souscription::class);
    }
}
