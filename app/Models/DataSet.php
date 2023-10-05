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
<<<<<<< HEAD
        'role',
=======
        'role_id',
>>>>>>> 84027788a1a8be87cf61766e8abbcb9b7ca82203
        'thead_html'
    ];

    public function Role()
    {
<<<<<<< HEAD
        return $this->hasMany(DetailsDataset::class, 'dataset_id');
=======
        return $this->BelongsTo(User::class, 'role_id');
>>>>>>> 84027788a1a8be87cf61766e8abbcb9b7ca82203
    }
}
