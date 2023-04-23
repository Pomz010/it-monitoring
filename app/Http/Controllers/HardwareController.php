<?php

namespace App\Http\Controllers;

use App\Models\Hardware;
use Illuminate\Http\Request;

class HardwareController extends Controller
{
    public function store(Request $request) {
        $data = $request->validate([
            'asset_tag' => 'required',
            'item' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'processor' => 'required',
            'memory' => 'required',
            'storage' => 'required',
            'serial_#' => 'required',
            'purchase_date' => 'required',
            'vendor' => 'required',
            'warranty' => 'required'
        ]);

        Hardware::create($data);
        return back();
    }
}
