<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
     * get all the features belongs to the abonnement
     */
    public function features()
    {
        return $this->hasMany(Features::class);
    }
}
