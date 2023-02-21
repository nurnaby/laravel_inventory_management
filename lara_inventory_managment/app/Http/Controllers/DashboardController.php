<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function dashboard(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data = User::where('id','=',$userId)->first();
        }
        // dd($data);
        return view('dashboard',compact('data'));
    }
    public function Logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}