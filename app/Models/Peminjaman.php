<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    // 👉 TAMBAHKAN INI
    protected $table = 'peminjaman';

    protected $fillable = [
        'nama',
        'tanggal_mulai',
        'tanggal_selesai',
        'ruangan',
        'jam',
        'deskripsi',
        'status'
    ];
}