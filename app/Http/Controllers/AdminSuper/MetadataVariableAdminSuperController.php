<?php

namespace App\Http\Controllers\AdminSuper;

use App\Http\Controllers\Controller;
use App\Models\MetaData;
use Illuminate\Http\Request;

class MetadataVariableAdminSuperController extends Controller
{
    public function index_metadata()
    {
        $metadata = MetaData::all();
        return view('components.super-admin.metadata-variable.index', compact('metadata'));
    }

    public function create_metadata()
    {
        return view('components.super-admin.metadata-variable.create');
    }
}
