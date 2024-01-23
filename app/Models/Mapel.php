<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $table = 'mapel';
    public function detailUser()
    {
        return $this->hasMany(detailUser::class, 'id_mapel', 'id');
    }
}
