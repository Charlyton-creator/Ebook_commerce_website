<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodePack extends Model
{
    use HasFactory;
    protected $table = "codepacks";
    /**
     * Get the promotion associated with the codepack.
     */
    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }
}
