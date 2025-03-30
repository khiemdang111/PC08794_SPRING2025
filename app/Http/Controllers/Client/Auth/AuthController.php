<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('client.auth.register');
    }
    public function login(){
        return view('client.auth.login');
    }
    public function editUser($id) {
        return view('client.auth.profileuser', [
            'id' => $id
        ]);
    }
}
