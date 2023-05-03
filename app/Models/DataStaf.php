<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataStaf extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nip',
        'tempat_lahir',
        'tempat_melaksanakan_tugas',
        'pangkat',
        'golongan_ruang',
        'pendidikan',
        'tahun_lulus',
        'jenis_kelamin',
        'agama',
        'etmis',
        'asal_daerah',
    ];
}
