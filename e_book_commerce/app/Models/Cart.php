<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Payement;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    /**
     * Get the payement associated with the cart.
     */
    public function payement()
    {
        return $this->belongsTo(Payement::class);
    }
}
