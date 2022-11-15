<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Features extends Model
{
    protected $table = 'features';
    use HasFactory;
    /**
     * Recupere l'abonement qui contient ce feature
     */
    public function abonnements()
    {
        return $this->belongsTo(Abonnement::class);
    }
}
