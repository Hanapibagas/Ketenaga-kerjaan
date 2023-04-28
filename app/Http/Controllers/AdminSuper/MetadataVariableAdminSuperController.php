<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\MetadataVariabel;
use Illuminate\Http\Request;

class MetadataVariableAdminSuperController extends Controller
{
    public function index_metadata()
    {
        $metadata = MetadataVariabel::all();
        return view('components.super-admin.metadata-variable.index', compact('metadata'));
    }
}
