<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataSet extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_dataset',
        'role_id',
        'thead_html'
    ];

    public function Role()
    {
        return $this->BelongsTo(User::class, 'role_id');
    }
}
