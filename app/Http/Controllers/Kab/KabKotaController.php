<?php

namespace App\Http\Controllers\Kab;

use App\Http\Controllers\Controller;
use App\Models\DataSet;
use Illuminate\Http\Request;

class KabKotaController extends Controller
{
    public function index_kab()
    {
        return view('components.kab-kota.dashboard', [
            'jumlahdataunduhdata' => DataSet::count()
        ]);
    }
}
