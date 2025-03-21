<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class Button extends Component
{
    public function goList(){
        return redirect()->route('list');
    }
    public function render()
    {
        return <<<'HTML'
        <div>
            <button wire:click="goList">Đăng ký</button>
        </div>
        HTML;
    }
}
