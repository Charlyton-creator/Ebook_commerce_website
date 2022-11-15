<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    /**
     * Get the payement associated with the commande.
     */
    public function payement()
    {
        return $this->hasOne(Payement::class);
    }
    protected $table = "commandes";
    protected $fillable = [];
}
