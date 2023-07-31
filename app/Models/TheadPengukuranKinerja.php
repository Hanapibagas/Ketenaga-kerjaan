<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheadPengukuranKinerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'indikator', 'bidang', 'tahun', 'a', 'b', 'hasil'
    ];
}
