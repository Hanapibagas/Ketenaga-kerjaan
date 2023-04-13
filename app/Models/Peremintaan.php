<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peremintaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'jenis_data',
        'asal',
        'deskripsi',
        'opd_produsen_data',
        'tujuan',
        'status',
    ];
}
