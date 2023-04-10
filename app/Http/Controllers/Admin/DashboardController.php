<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index_dashboard()
    {
        return view('components.dashboard.dashboard');
    }
}
