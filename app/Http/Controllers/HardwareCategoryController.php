<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HardwareCategory;

class HardwareCategoryController extends Controller
{
    public function store(Request $request) {
        $data = $request->validate([
            'category' => 'required'
        ]);

        HardwareCategory::create($data);
        return back();
    }
}
