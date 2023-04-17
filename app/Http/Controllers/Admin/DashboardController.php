<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataSet;
use App\Models\Infografis;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index_dashboard()
    {
        return view('components.dashboard.dashboard', [
            'jumlahdataunduhdata' => DataSet::count(),
            'jumlahdatainfografis' => Infografis::count()
        ]);
    }
}
