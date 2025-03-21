<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail(){
        // Your logic to retrieve product details goes here
        return view('client.product.detail');
    }
}
