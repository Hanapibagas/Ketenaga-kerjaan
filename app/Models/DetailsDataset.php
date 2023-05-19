<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsDataset extends Model
{
    use HasFactory;
    protected $fillable = [
        'dataset_id',
        'variable',
        'tahun',
        'laki_laki',
        'perempuan'
    ];

    public function Dataset()
    {
        return $this->belongsTo(DataSet::class, 'dataset_id', 'id');
    }
}
