<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Abonnemment;
use Ebook;
use Publicite;
use Temoignage;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'email',
        'password',
        'prenom',
        'sexe',
        'tel_number', 
        'sexe',
        'has_abonnement',
        'abonnement_id',
        'has_dashboard',
        'profile',
        'activity_domain',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * Get the Abonnement that owns the user.
     */
    public function abonnement()
    {
        return $this->belongsTo(Abonnemment::class);
    }
    /**
     * Recuperer le panier de l'utilisateur
     */
    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
    /**
     * Recupere tous les publications de l'utilisateur
     */
    public function pubs()
    {
        return $this->belongsToMany(Publicite::class);
    }
    /**
     * Temoignage de l'utilisateur
     */
    public function temoignage()
    {
        return $this->belongsTo(Temoignage::class);
    }
}
