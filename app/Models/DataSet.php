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
        'kategori',
        'opd',
        'satuan',
        'slug',
        'status',
        'user_id'
    ];

    public function detailsDataset()
    {
        return $this->hasMany(DetailsDataset::class, 'dataset_id');
    }

    public function User()
    {
        return $this->BelongsTo(User::class, 'user_id');
    }
}
