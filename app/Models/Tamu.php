<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    protected $table = 'tbl_tamu';

    protected $fillable = [
        'id_user',
        'nama_tamu',
        'alamat_tamu',
        'no_telp_tamu',
        'email_tamu',
    ];
    public function pertemuan()
    {
        return $this->hasMany(Pertemuan::class, 'id_mapel', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
