<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DataSet;
use Illuminate\Http\Request;

class DatasetApiController extends Controller
{
    public function getIndex()
    {
        $dataset = DataSet::with('detailsDataset')->get();

        return response()->json($dataset);
    }
}
