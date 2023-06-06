<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSet extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_dataset',
        'kategori',
        'opd',
        'satuan',
        'slug',
        'nama_master_data', 'deskripsi', 'file_data'
    ];
}
