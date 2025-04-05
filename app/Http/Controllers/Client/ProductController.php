<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function detail($id){
        $data = Product::find($id);
        return view('livewire.pages.products.detail', compact('data'));
    }
    public function comment(Request $request, $id ){
        $comment = Comment::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'status' => 'new',
            'product_id' => $id
        ]);
        return Redirect::route('/product', $id);
    }
}
