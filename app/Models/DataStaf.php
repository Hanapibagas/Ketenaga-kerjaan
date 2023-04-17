<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataStaf extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'jabatan',
        'instagram',
        'facebook',
        'twitter',
        'gambar',
    ];
}
