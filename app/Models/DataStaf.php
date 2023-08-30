<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataStaf extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'jabatan_id', 'pangkat', 'pendidikan', 'biodata', 'foto'
    ];

    public function Jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }
}
