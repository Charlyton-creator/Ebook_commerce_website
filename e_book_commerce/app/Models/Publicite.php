<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User;
class Publicite extends Model
{
    use HasFactory;
    protected $table = 'publicites';
    /**
     * Avoir la liste de tous les users de la pub
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
