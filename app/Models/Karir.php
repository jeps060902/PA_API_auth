<?php

namespace App\Models;

use App\Models\Alumni;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Karir extends Model
{
    protected $fillable = ['status', 'tempat', 'posisi', 'alumni_id', 'tahun_mulai', 'tahun_selesai'];

    public function alumni(): BelongsTo
    {
        return $this->belongsTo(Alumni::class, 'alumni_id');
    }
}
