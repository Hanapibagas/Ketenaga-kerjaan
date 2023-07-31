<?php

namespace Database\Seeders;

use App\Models\TheadDetailsDataset;
use App\Models\TheadIku as ModelsTheadIku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TheadIku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsTheadIku::create([
            'indikator' => 'Indikator',
            'bidang' => 'Bidang/UPT',
            'tahun' => 'Tahun',
            'a' => 'A',
            'b' => 'B',
            'hasil' => 'Hasil'
        ]);
        TheadDetailsDataset::create([
            'variabale' => 'variable',
            'tahun' => 'tahun',
            'laki' => 'laki-laki',
            'perempuan' => 'perempuan',
        ]);
    }
}
