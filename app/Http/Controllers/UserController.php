<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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

    public function show() {
        if(auth()->check() && !auth()->user()->updated_at == null){
            return view('components.homepage');
        }

        auth()->logout();
        return view('components.login-page');
    }
}
