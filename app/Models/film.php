<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class film extends Model
{
    use HasFactory;
    public function halls(): BelongsToMany
    {
        return $this->belongsToMany(hall::class, 'seance');
    }
}
