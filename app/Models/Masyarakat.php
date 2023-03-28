<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Auth\Authenticatable;

class Masyarakat extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use HasFactory,Authenticatable;
    protected $table = 'masyarakat';
    protected $primarykey = 'nik';
    protected $guarded = [];

    public function pengaduan(): hasMany
    {
        return $this->hasMany(Pengaduan::class);
    }
}
