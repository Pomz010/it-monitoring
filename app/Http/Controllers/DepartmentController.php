<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function createDepartment(Request $request) {
        $data = $request->validate([
            'department_code' => 'required',
            'department_name' => 'required',
            'description' => 'required'
        ]);

        Department::create($data);

        return '<h1>Success</h1>';
    }
}
