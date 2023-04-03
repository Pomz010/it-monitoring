<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function updatePassword() {
        return view('components.changepassword');
    }

    public function signout() {
        auth()->logout();
        return redirect('/');
    }

    public function login() {
        if(auth()->check()){
            return view('homepage');
        } else {
            return view('components.login-page');
        }
        // return view('homepage');
    }

    public function createUser() {
        return 'Hello from new user.';
    }

    public function showHomepage(Request $request) {
        
        $data = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if(auth()->attempt(['name' => $data['username'], 'password' => $data['password']])) {
            $request->session()->regenerate();
            return view('homepage');
        } else {
            return redirect('/');
        }
    }
}
