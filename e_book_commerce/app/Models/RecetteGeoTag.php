<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class RecetteGeoTag extends Pivot
{
    use HasFactory;
    protected $table = "recettes_geo_tags";
}
