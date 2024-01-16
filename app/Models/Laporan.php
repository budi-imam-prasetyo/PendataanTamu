<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    public function pertemuan()
    {
        return $this->belongsToMany(Pertemuan::class, 'id_detail', 'id');
    }
}
