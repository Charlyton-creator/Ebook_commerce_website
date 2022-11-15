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
     * get all the ebook_users instance owns the cart
     */
    public function ebookusers()
    {
        return $this->hasMany(EBook_user::class);
    }
    /**
     * get the user owns the cart
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
