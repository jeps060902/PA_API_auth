<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prestasi extends Model
{
    protected $fillable = ['prestasi', 'alumni_id', 'grade'];

    public function alumni(): BelongsTo
    {
        return $this->belongsTo(Alumni::class, 'alumni_id');
    }
}
