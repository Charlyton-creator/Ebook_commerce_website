<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Abonnement;
class Features extends Model
{
    protected $table = 'features';
    use HasFactory;
    /**
     * Recupere la liste des abonnements qui contiennent le feature
     */
    public function abonnements()
    {
        return $this->belongsToMany(Abonnement::class);
    }
}
