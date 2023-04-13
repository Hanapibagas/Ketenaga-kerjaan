<?php

namespace App\Http\Controllers\Kab;

use App\Http\Controllers\Controller;
use App\Models\Peremintaan;
use Illuminate\Http\Request;

class PermintaanController extends Controller
{
    public function index_kab()
    {
        $permintaan = Peremintaan::all();
        return view('components.kab-kota.permintaan-data.index', compact('permintaan'));
    }
}
