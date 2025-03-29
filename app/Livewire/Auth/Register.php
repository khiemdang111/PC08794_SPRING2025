<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $passwordConfirm;
    #[Layout('components.layouts.auth')]

    public function storeUser(){
        $this->validate([
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'passwordConfirm' => 'required|same:password'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        Auth::login($user);
        session()->flash('success', 'Đăng kí thành công');
        return redirect()->to('/');
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
