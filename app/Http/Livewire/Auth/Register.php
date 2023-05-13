<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;

class Register extends Component
{

    public $name;
    public $profile_img;
    public $email;
    public $password;
    public $password_confirmation;

    use WithFileUploads;


    public function register() {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4|confirmed',
            'profile_img' => 'required|image|max:2048'
        ]);

        $path = $this->profile_img->store('public/users/images');

        $user = User::create([
            'name'   =>     $this->name,
            'email' =>  $this->email,
            'password'  => bcrypt($this->password),
            'profile_img' => $path
        ]);

        return redirect('/')->with('message', 'You registered your account successfully.');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
