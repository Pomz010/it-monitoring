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

        return view('homepage');
    }

    public function logout() {
        return view('components.login-page');
    }

    public function showHomepage() {
        if(auth()->check()){
            return view('homepage');
        } 
        
        // $data = $request->validate([
        //     'username' => ['required'],
        //     'password' => ['required']
        // ]);

        // if(auth()->attempt(['name' => $data['username'], 'password' => $data['password']])) {
        //     $request->session()->regenerate();
        //     return view('homepage');
        // } else {
        //     return redirect('/');
        // }
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

        // If validation fails, redirect back to the previous route with errors
        
    
        if(auth()->check()){
            // $user = Auth::user();
            // $user->password = Hash::make($data['password']);
            // $user->save();


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
