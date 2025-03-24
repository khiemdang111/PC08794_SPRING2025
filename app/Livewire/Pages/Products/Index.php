<?php

namespace App\Livewire\Pages\Products;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    
    public $data;
    public function mount(){
        $this->data = Product::get();
    }
    #[Layout('components.layouts.master')]  
    public function render()
    {
        return view('livewire.pages.products.index');
    }
}
