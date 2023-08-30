<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubBagian extends Model
{
    use HasFactory;
    protected $fillable = [
        'sub_bagian', 'jabatan_id'
    ];

    public function Jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }
}
