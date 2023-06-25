<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function AdminProfile(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data  = User::where('id','=',$userId)->first();
        }
        // echo "<pre>";
        // print_r($data);
        return view('admin.admin_profile',compact('data'));
    }
    public function AdminChangePassword(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data = User::where('id','=',$userId)->first();
        }
        return view('admin.admin_change_password',compact('data'));
    }//  end change password methode 
    
    public function AdminPasswordUpdate(Request $request){
        //validation
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data = User::where('id','=',$userId)->first();
        }
        // dd($data->password);
        $request->validate([
            'old_password'=>'required',
            'new_password'=>'required',
            'confirm_new_password'=>'required|same:new_password',
            
        ]);
        // Match The old password
       if(Hash::check($request->old_password,$data->password)){
        User::whereId($data->id)->update([
            'password'=>Hash::make($request->new_password)
           ]);
           return back()->with("status","password change successfully");
        }else{
           return back()->with('error','old passowrd are not match ');


       }
       

        // return view('admin.admin_change_password',compact('data'));
    }//  end  password update methode
    public function AdminUpdate(Request $request){


        
        // dd($request->phone);
       $id = $request->id;
       $data= User::find($id);
       $data->name= $request->name;
       $data->email=$request->email;
       $data->phone =$request->phone;
       $data->address =$request->address;
       if($request->file('photo')){
        $file = $request->file('photo');
            unlink('public_puth/upload/admin_images'.$data->photo);
            $file_name = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$file_name);
            $data['photo']= $file_name;
            
       }
         
        $data->save();
        // User::find($id)->update([
        //    'name'=>$request->name,
        //    'email'=>$request->email,
        //    'phone'=>$request->phone,
           
        //    'address'=>$request->address,
           
        // ]);
        $notification = array(
            'message' => 'Admin profile Update  successfuly',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }
}