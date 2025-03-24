<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail($id){
        $data = Product::find($id);
        return view('livewire.pages.products.detail', compact('data'));
    }
}
