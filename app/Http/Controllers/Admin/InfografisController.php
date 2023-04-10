<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Infografis;
use Illuminate\Http\Request;

class InfografisController extends Controller
{
    public function dashboard_infografis()
    {
        $infografis = Infografis::all();
        return view('components.dashboard.infografis.index', compact('infografis'));
    }
    public function create_infografis()
    {
        return view('components.dashboard.infografis.create');
    }
    public function store_infografis(Request $request, $slug)
    {
        $this->validate($request, [
            'title' => 'required',
            'type_infografis' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
        ]);
    }
}
