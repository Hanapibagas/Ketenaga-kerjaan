<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanData extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'nama',
        'no_tlpn',
        'no_ktp',
        'alamat',
        'pekerjaan',
        'rincian',
        'tujuan',
        'foto_ktp',
        'foto_pengajuan',
        'status',
    ];
}
