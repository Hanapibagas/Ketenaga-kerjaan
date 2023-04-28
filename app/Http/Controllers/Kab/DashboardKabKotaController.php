<?php

namespace App\Http\Controllers\Kab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardKabKotaController extends Controller
{
    public function dashboard_kab()
    {
        return view('components.admin-kab.dashboard');
    }
}
