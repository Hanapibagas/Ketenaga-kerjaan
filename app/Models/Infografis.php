<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infografis extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'type_infografis',
        'tanggal',
        'deskripsi',
        'gambar',
    ];
}
