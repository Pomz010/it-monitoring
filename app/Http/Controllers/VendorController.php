<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function createVendor(Request $request) {
        $data = $request->validate([
            'vendor_name' => 'required',
            'vendor_address' => 'required',
            'cellphone_#' => 'nullable',
            'telephone_#' => 'nullable',
            'email' => 'nullable'
        ]);

        // return $data;

        Vendor::create($data);

        return '<h1>Success</h1>';
    }
}
