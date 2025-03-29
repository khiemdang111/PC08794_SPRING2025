<?php

namespace App\Livewire\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public $id;
    public $name;
    public $email = '';
    public $password = '';
    #[Layout('components.layouts.auth')]
    public function handleLogin(Request $request)
    {
        $validate = $this->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:5|max:255',
        ]);
        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->to('/');
        }
        $this->addError('email', 'Email hoặc password không đúng');
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
