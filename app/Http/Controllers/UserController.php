<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signout() {
        auth()->logout();
        // return self::index();
        return redirect()->route('index');
    }

    public function index() {
        if(auth()->check()){
            return view('homepage');
        } else {
            return view('components.login-page');
        }
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
