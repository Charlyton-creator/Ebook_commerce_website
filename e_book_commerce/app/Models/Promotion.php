<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CodePack;
use Ebook;
class Promotion extends Model
{
    use HasFactory;
    protected $table = 'promotions';
    /**
     * Get the codePack associated with the promotion.
     */
    public function codepack()
    {
        return $this->hasOne(CodePack::class);
    }
    /**
     *Les E_books de le promotion.
     */
    public function e_books()
    {
        return $this->hasMany(Ebook::class);
    }
}
