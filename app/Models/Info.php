<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Info extends Model
{
    use HasFactory, SoftDeletes;

    // Nama tabel
    protected $table = 'infos';

    // Field yang bisa diisi
    protected $fillable = [
        'email',
        'telepon',
        'alamat',
    ];
}
