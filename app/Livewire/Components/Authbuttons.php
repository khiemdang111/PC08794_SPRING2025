<?php

namespace App\Livewire\Components;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Authbuttons extends Component
{
    public function render()
    {
        return view('livewire.components.authbuttons', [
            'isLoggedIn' => Auth::check(),
            'user' => Auth::user(),
        ]);
    }
}
