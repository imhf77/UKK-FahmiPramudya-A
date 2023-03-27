<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pengaduan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tanggapan(): BelongsTo
    {
        return $this->belongsTo(Tanggapan::class);
    }

    public function masyarakat(): HasOne
    {
        return $this->hasOne(Masyarakat::class);
    }
}
