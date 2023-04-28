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
            'processor' => 'nullable',
            'memory' => 'nullable',
            'storage' => 'nullable',
            'serial_#' => 'required',
            'imei_#1' => 'nullable',
            'imei_#2' => 'nullable',
            'hostname' => 'nullable',
            'sim_#' => 'nullable',
            'purchase_date' => 'required',
            'vendor' => 'required',
            'warranty' => 'required',
        ]);

        Hardware::create($data);
        return back();
    }

    public function showLaptop() {
        return view('components.tabs.laptops', ['button' => 'laptop']);
    }

    public function showHardware(){
        $hardware = new Hardware;
        $hardwares = $hardware->getAllHardware();
        return view('components.homepage', ['tabs' => 'hardware', 'hardwares' => $hardwares]);
    }
}
