<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('Auth.Register');
    }
    public function login(){
        return view('Auth.login');
    }
}
