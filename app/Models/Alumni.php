<?php

namespace App\Models;

use App\Models\Karir;
use App\Models\Prestasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alumni extends Model
{
    protected $fillable = ['nama', 'angkatan', 'jurusan'];
    protected $with = ['prestasi', 'karir'];
    public function prestasi(): HasMany
    {

        return $this->hasMany(Prestasi::class, 'alumni_id');
    }
    public function karir(): HasMany
    {

        return $this->hasMany(Karir::class, 'alumni_id');
    }
}
