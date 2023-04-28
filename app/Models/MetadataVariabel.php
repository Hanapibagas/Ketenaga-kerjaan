<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetadataVariabel extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_master_data',
        'klasifikasi',
        'tipe_data',
        'instansi',
        'status',
    ];
}
