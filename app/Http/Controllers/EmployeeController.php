<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function createEmployee(Request $request) {
        $data = $request->validate([
            'employee_id' => 'required',
            'dept_id' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'middle_name' => 'required',
            'name_ext' => 'nullable',
            'gender' => 'required',
            'position' => 'required',
            'role' => 'required',
            'email' => 'required'
        ]);
    
        Employee::create($data);
    
        // return $data;
    }
}
