<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MapCategori extends Model
{
    public function map(): HasMany
    {
        return $this->hasMany(Map::class);
    }
}
