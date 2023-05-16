<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{

    public $profile_img;
    public $user;
    public $name;
    public $email;

    use WithFileUploads;

    public function mount()
    {
        $this->user = auth()->user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->profile_img = $this->user->profile_img;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
        ]);

        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->save();

        return redirect('/profile-settings')->with('message', 'Your profile is updated successfully');
    }

    public function updatePic()
    {
        $this->validate([
            'profile_img' => 'nullable|image|max:10000'
        ]);

        if ($this->profile_img) {
            if (is_string($this->user->profile_img)) {
                Storage::delete($this->user->profile_img);
            }

            $path = $this->profile_img->store('public/users/images');
            $this->user->profile_img = $path;
        }


        $path = $this->profile_img->store('public/users/images');

        $this->user->profile_img = $path;
        $this->user->save();

        return redirect('/profile-settings')->with('message', 'Your profile picture updated successfully');
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
