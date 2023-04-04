<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login() {
        if(!auth()->check()){
            return view('components.login-page');
        }

        return view('components.homepage');
    }

    public function logout() {
        return view('components.login-page');
    }

    public function showHomepage() {
        if(auth()->check()){
            return view('components.homepage');
        } 
    }

    public function updatePassword() {
        if(auth()->check()){
            return view('components.changepassword');
        }
        return redirect('/');
    }

    public function signout() {
        auth()->logout();
        return redirect('/');
    }

    public function createPassword(Request $request) {
        $data = $request->validate([
            'password' => ['required', 'min:8', 'confirmed', Rule::unique('users', 'password')]
        ]);
        
    
        if(auth()->check()){

            Auth::user()->update([
                'password' => Hash::make($data['password'])
            ]);

            $request->session()->regenerate();
            return redirect('/');
        }
    }

    // public function createUser() {
    //     return 'Hello from new user.';
    // }
}
