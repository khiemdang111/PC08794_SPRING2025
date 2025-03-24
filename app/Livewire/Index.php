<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Index extends Component
{
    public $title = 'Post title...';

    #[Layout('components.layouts.master')] 
    public function render()
    {
        return view('livewire.index');
    }
}
