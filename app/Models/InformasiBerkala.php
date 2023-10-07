<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiBerkala extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'link',
        'nama_link'
    ];
}
