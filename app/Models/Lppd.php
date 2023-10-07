<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lppd extends Model
{
    use HasFactory;

    protected $fillable = [
          'role_id',
      'nama_lppd',
        'thead_html',
        'tahun'
    ];

    public function Role()
    {
        return $this->BelongsTo(User::class, 'role_id');
    }
}
