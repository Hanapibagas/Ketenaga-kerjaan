<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'tanggal',
        'deskripsi',
        'gambar',
        'file',
    ];
}
