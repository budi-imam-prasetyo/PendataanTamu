<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    public function pertemuan()
    {
        return $this->hasMany(Pertemuan::class, 'id_mapel', 'id');
    }
}
