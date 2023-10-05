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
        'role',
        'thead_html'
    ];

    public function detailsDataset()
    {
        return $this->hasMany(DetailsDataset::class, 'dataset_id');
    }
}
