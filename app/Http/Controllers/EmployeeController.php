<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function store(Request $request) {
        $data = $request->validate([
            'employee_id' => 'required',
            'department_id' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'middle_name' => 'required',
            'ext_name' => 'nullable',
            'gender' => 'required',
            'position' => 'required',
            'role' => 'required',
            'email' => 'required'
        ]);

        // If validation fails, redirect back to the previous route with errors
        
    
        Employee::create($data);
    
        return back();
    }
}
