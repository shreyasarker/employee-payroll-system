<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(){
        if(Auth::check()){

        }
        return view('auth.login');
    }
    public function login(){}
    public function logout(){}
}
