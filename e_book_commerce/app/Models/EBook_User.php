<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class EBook_User extends Pivot
{
    use HasFactory;

    protected $table = 'e_books_users';

    public $incrementing = true;
    /**
     * get the cart that owns the Ebook_user
     */
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
