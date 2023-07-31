<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lppd extends Model
{
    use HasFactory;

    protected $fillable = [
        'indikator',
        'tahun',
        'a',
        'b',
        'link_terkait',
        'hasil',
        'user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
