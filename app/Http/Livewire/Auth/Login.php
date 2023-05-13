<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $email;
    public $password;

    public function login() {
        $loginUser = $this->validate([
            'email'     =>      'required|email',
            'password'  =>      'required'
        ]);

        $user = User::where('email', $loginUser['email'])->first();

        if(!$user) {
            return redirect('/')->with('error', 'Sorry the email and password you input is incorrect or does not exist');
        }

        if(Auth::attempt($loginUser)) {
            return redirect()->intended('/home');
        } else {
            return redirect('/')->with('error', 'Invalid credentials');
        }
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
