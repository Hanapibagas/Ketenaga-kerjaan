<?php

namespace App\Http\Controllers\Masyarakat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DasboardMasyrakatController extends Controller
{
    public function dashboard_masyarakat()
    {
        return view('components.admin-masyarakat.dashboard');
    }
}
