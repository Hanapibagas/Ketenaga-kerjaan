<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\DataSet;
use Illuminate\Http\Request;

class DataSeAdminSupertController extends Controller
{
    public function index_dataset()
    {
        $dataset = DataSet::all();
        return view('components.super-admin.data-set.index', compact('dataset'));
    }

    public function create_dataset()
    {
        return view('components.super-admin.data-set.create');
    }
}
