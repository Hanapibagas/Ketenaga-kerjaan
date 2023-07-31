<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheadDetailsDataset extends Model
{
    use HasFactory;

    protected $fillable = [
        'variabale',
        'tahun',
        'laki',
        'perempuan',
    ];
}
