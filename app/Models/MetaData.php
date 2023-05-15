<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaData extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_master_data',
        'deskripsi',
        'file_data'
    ];
}
