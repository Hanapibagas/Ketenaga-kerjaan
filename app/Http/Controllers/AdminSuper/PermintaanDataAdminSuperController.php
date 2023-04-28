<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\Permintaan;
use Illuminate\Http\Request;

class PermintaanDataAdminSuperController extends Controller
{
    public function index_permintaan()
    {
        $permintaan = Permintaan::all();
        return view('components.super-admin.permintaan-data.index', compact('permintaan'));
    }
}
