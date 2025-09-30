<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'visi',
        'misi',
        'gambar_deskripsi_kiri',
        'gambar_deskripsi_kanan',
        'gambar_visi_kiri',
        'gambar_visi_kanan',
        'gambar_misi'
    ];
}
