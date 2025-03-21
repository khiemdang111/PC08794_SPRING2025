<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail($slug){
        // Your logic to retrieve product details goes here
        return view('client.product.detail', compact('slug'));
    }
}
