<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengukuranKinerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pengukuran',
        'role_id',
        'thead_html',
        'tahun'
    ];

    public function Role()
    {
        return $this->BelongsTo(User::class, 'role_id');
    }
}
