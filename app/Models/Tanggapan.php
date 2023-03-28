<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tanggapan extends Model
{
    use HasFactory;
    protected $table = 'tanggapan';
    protected $primarykey = 'id_tanggapan';
    protected $guarded = [];

    public function pengaduan(): belongsTo
    {
        return $this->belongsTo(Pengaduan::class);
    }

    public function petugas(): belongsTo
    {
        return $this->belongsTo(Petugas::class);
    }
}
