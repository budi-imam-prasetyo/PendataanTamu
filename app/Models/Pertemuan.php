<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    use HasFactory;

    protected $table = 'tbl_pertemuan';
    public function detailUser()
    {
        return $this->belongsTo(detailUser::class, 'id_pertemuan', 'id');
    }

    public function tamu()
    {
        return $this->belongsTo(Tamu::class, 'id_mapel', 'id');
    }
  
    public function laporan()
    {
        return $this->belongsToMany(Laporan::class, 'id_detail', 'id');
    }
}
