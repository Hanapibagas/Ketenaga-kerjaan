<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataStaf extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'sub_bagian_id', 'pangkat', 'pendidikan', 'biodata', 'foto'
    ];

    public function SubBagian()
    {
        return $this->belongsTo(SubBagian::class, 'sub_bagian_id');
    }
}
