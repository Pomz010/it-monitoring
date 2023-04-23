<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'version' => 'required',
            'license' => 'required',
            'exp_date' => 'nullable',
            'developer' => 'required',
            'category' => 'required',
            'date_installed' => 'required',
            'serial_#' => 'required',
            'purchase_date' => 'required',
            'vendor' => 'required',
            'product_key' => 'required'
        ]);

        Software::create($data);
        return back();
    }
}
