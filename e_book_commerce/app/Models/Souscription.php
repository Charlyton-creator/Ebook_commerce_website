<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Payement;

class Souscription extends Model
{
    use HasFactory;
    protected $table = 'souscriptions';
    /**
     * Get the payement associated with the souscription.
     */
    public function payement()
    {
        return $this->hasOne(Payement::class);
    }
}
