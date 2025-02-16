<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari nama default
    protected $table = 'agenda';

    // Tentukan kolom yang bisa diisi secara massal
    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi',
    ];
}
