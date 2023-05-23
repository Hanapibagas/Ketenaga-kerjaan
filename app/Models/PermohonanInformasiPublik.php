<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermohonanInformasiPublik extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'no_ktp',
        'foto_ktp',
        'tahun',
        'nomor_pengesahaan',
        'alamat',
        'rincian',
        'pekerjaan',
        'tujuan',
        'status',
    ];
}
