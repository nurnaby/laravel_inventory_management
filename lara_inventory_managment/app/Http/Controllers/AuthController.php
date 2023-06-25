<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
      $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:users',
        // 'password'=>'required',
        'password'=>'required|min:5|max:12',
      ]);
      $users= new User();
      $users->name = $request->name;
      $users->email = $request->email;
      $users->password =Hash::make($request->password) ;
      $res = $users->save();
      if($res){
        $notification = array(
            'message' => 'you have registion successfuly',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
        // return back()->with('success','you have registion successfuly');

      }else{
        $notification = array(
            'message' => 'you have registion successfuly',
            'alert-type' => 'warning',
        );
        return redirect()->back()->with($notification);

      }
     
        
    }

    public function LoginUser(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required|min:5|max:15',
          ]);

        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('/');

            }else{
                return back()->with('fail','Password not matchs');
            }

        }else{
            return back()->with('fail','This eamil is not registered');
        }

        // public function dashboard(){
        //     $data= array();
        //     if(Session::has('loginId')){
        //         $data = User::where('email','=',$request->email)->first();
        //     }
        //     return view('dashboard');
        // }
    }
}