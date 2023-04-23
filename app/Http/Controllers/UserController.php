<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use App\Models\Hardware;
use App\Models\Software;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\HardwareCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function destroy(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        return redirect('/');
    }

    public function update(Request $request) {
        $data = $request->validate([
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        auth()->user()->update([
            'password' => bcrypt($data['password'])
        ]);

        return redirect('/');
    }

    public function create() {
        return view('components.update-password-form');
    }

    public function show(Request $request) {
        if(auth()->check() && !auth()->user()->updated_at == null){
            $employee = new Employee;
            $user = new User;
            $hardware = new Hardware;
            $department = new Department;
            $software = new Software;
            $hardwareCategory = new HardwareCategory;

            $hardwareCategories = $hardwareCategory->getAllCategory();
            $softwares = $software->getAllSoftware();
            $departments = $department->getAllDepartments();
            $hardwares = $hardware->getAllHardware();
            $users = $user->getAllUsers();
            $employees = $employee->getAllEmployees();

            return view(
                    'components.homepage', 
                        compact('employees', 'users', 'hardwares', 'departments', 'softwares', 'hardwareCategories')
            );
        }

        auth()->logout();
        return view('components.login-page');
    }
}
