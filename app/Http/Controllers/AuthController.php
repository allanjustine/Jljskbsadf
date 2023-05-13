<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function userLogin() {

        if(auth()->check()) {
            return redirect('/');
        }
        
        return view('pages.auth.login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('message', 'Log out successfully');
    }

    public function registration() {
        if(auth()->check()) {
            return redirect('/');
        }
        return view('pages.auth.register');
    }
}
