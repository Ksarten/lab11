<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class seat extends Model
{
    use HasFactory;
    public function halls(): BelongsTo
    {
        return $this->belongsTo(hall::class);
    }
    public function seance(): BelongsToMany
    {
        return $this->belongsToMany(seance::class, 'seance');
    }
}
