<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengukuranKinerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'indikator',
        'tahun',
        'a',
        'b',
        'hasil',
        'user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
