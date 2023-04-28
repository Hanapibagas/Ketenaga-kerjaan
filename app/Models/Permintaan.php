<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'jenis_data',
        'deskripsi',
        'opd_produsen_data',
        'tujuan',
        'status',
    ];
}
