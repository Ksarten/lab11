<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class seance extends Model
{
    use HasFactory;
    public function price(): HasMany
    {
        return $this->hasMany(price::class);
    }
    public function seats(): BelongsToMany
    {
        return $this->belongsToMany(seat::class, 'seance');
    }
}
