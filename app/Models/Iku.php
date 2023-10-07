<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iku extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_iku',
        'role_id',
        'thead_html',
        'tahun'
    ];

    public function Role()
    {
        return $this->BelongsTo(User::class, 'role_id');
    }
}
