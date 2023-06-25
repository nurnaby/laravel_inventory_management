<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmployeController extends Controller
{
    public function AllEmploye(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        return view('employ.all_emplory',$data);
    }
    public function AddEmploye(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        return view('employ.add_emplory',$data);
    } 
    // end method  
    public function EditEmploye(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user']= User::where('id','=',$userId)->first();
        }
        return view('employ.edit_emplory',$data);
    }
    public function StoreEmploye(){
       
        return 'this is add employe';
    }
    
}