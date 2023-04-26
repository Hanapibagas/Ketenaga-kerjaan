<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboarAdminSuperdController extends Controller
{
    public function index_admin_super()
    {
        return view('components.super-admin.dashboard');
    }
}
