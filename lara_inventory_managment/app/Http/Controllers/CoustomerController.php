<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Coustorm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class CoustomerController extends Controller
{
    public function AllCustomer(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $data ['customers']= Coustorm::get();
        return view('customer.all_customer',$data);
    }

    public function AddCustomer(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        return view('customer.add_customer',$data);
    }

    public function StoreCustomer(Request $request){
        // dd($request->all());
    
        $request->validate([
            'coustomer_name'=>'required',
            'email'=>'required|email|unique:Coustorms',
            'addres'=>'required',
            'phone'=>'required',
            'shope_name'=>'required',
            'photo'=>'required',
            'account_helder'=>'required',
            'account_number'=>'required',
            'bank_branch'=>'required',
            'city'=>'required',
        ]);
                    
        $photo = $request->file('photo');
        $name_gen = hexdec(uniqid()).'.'.$photo->getClientOriginalExtension();
        $photo->move('upload/',$name_gen);
        
        $save_url = 'upload/'.$name_gen;
        Coustorm::insert([
            'coustomer_name' => $request->coustomer_name,
            'email'          => $request->email,
            'addres'         => $request->addres,
            'phone'          => $request->phone,
            'shope_name'     => $request->shope_name,
            'account_helder' => $request->account_helder,
            'bank_branch'    => $request->bank_branch,
            'account_number' => $request->account_number,
            'city'           => $request->city,
            'photo'           => $save_url,
        ]);  
        $notification = array(
            'message' => 'customer Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.customer')->with($notification);
       
     } //end method

     //state edit method

     public function EditCustomer($id){
        // dd($id);
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $data['customer_data'] = Coustorm::find($id);
        return view('customer.edit_customer',$data);

     }


}