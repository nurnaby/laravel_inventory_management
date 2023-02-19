<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    public function Login(){
        return view('auth.login');
    }
    public function Registion(){
        return view('auth.registion');
    }
    public function userRegister(Request $request){
        echo "ok";
        
    }
}