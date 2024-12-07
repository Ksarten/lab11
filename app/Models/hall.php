<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class hall extends Model
{
    use HasFactory;
    public function seats(): HasMany
    {
        return $this->hasMany(seat::class);
    }
    public function films(): BelongsToMany
    {
        return $this->belongsToMany(film::class, 'seance');
    }
}


