<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function AllCategory(){
        
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $data ['Categories']= Category::get();
        return view('category.all_Category',$data);
    }

    public function AddCategory(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        return view('category.add_category',$data);
    }

    public function StoreCategory(Request $request){
        // dd($request->all());
        $request->validate([
            'category_name' => 'required',
        ]);
        Category::create([
            'category_name' => $request->category_name,
           
        ]);
        $notification = array(
            'message' => 'Category  Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.Category')->with($notification);
    }

    public function EditCategory($id){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $data['Category'] = Category::find($id);
        return view('category.edit_category',$data);
    }

    public function UpdateCategory(Request $request){
        $id = $request->id;
        Category::findOrFail($id)->update([
                    'category_name'  => $request->category_name,
                 
                    
                ]);
                $notification = array(
                    'message' => 'Category Update Successfully',
                    'alert-type' => 'success'
                );
                return redirect()->route('all.Category')->with($notification);
    }
}