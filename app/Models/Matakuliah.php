<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    // TAMBAHKAN BARIS INI UNTUK MEMPERBAIKI ERROR
    protected $table = 'matakuliah'; 

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}