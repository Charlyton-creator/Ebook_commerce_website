<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Payement extends Model
{
    use HasFactory;
    protected $table = 'payements';
    /**
     * Get the cart associated with the payement.
     */
    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }
    /**
     * Get the souscription associated with the payement.
     */
    public function souscription()
    {
        return $this->belongsTo(Souscription::class);
    }
    protected $fillable = [];
}
