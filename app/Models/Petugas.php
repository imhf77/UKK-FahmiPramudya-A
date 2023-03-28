<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Petugas extends Model
{
    use HasFactory;
    protected $table = 'petugas';
    protected $primarykey = 'id_petugas';
    protected $guarded = [];
    public function tanggapan(): HasMany
    {
        return $this->hasMany(Tanggapan::class);
    }
}
