<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduan';
    protected $primarykey = 'id_pengaduan';
    protected $guarded = ['id'];
    

    public function tanggapan(): hasMany
    {
        return $this->hasMany(Tanggapan::class);
    }

    public function masyarakat(): belongsTo
    {
        return $this->belongsTo(Masyarakat::class);
    }
}
