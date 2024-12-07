<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class price extends Model
{
    use HasFactory;
    public function seance(): BelongsTo
    {
        return $this->belongsTo(seance::class);
    }
}
