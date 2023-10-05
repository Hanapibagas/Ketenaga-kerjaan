<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiSetiapSaat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nama_link',
        'link'
    ];
}
