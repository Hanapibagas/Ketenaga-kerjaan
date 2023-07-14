<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lppd extends Model
{
    use HasFactory;

    protected $fillable = [
        'indikator',
        'a',
        'b',
        'link_terkait',
        'hasil',
    ];
}
