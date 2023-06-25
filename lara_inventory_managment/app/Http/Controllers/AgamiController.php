<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AgamiController extends Controller
{
    public function AllAgamiProduct(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $data ['agamiProducts']= Agami::get();
        return view('agami.all_agami_product',$data);
    }

    public function AddAgamiProduct(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        return view('agami.add_agami_product',$data);
    }

    public function StoreAgamiProduct(Request $request){
        $request->validate([
            'pro_name' => 'required',
            'jar'      => 'required',
            'poly'     => 'required',
            'amount'   => 'required',
            'month'    => 'required',
            'year'     => 'required',
            'date'     => 'required',
            
        ]);

        Agami::insert([
            'pro_name' => $request->pro_name,
            'jar'      => $request->jar,
            'poly'     => $request->poly,
            'amount'   => $request->amount,
            'month'    => $request->month,
            'year'     => $request->year,
            'date'     => $request->date,
        ]);
        $notification = array(
            'message' => 'Agami Product  Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.agami_product')->with($notification);

    }//end method

    public function EditAgamiSale($id){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $data['agamiSales'] = Agami::find($id);
        return view('agami.edit_agami_sale',$data);

    }

    public function UpdateAgameiSale(Request $request){
                $id = $request->id;
                Agami::findOrFail($id)->update([
                    'pro_name'  => $request->pro_name,
                    'jar'      => $request->jar,
                    'poly'      => $request->poly,
                    'amount'      => $request->amount,
                    
                ]);
                $notification = array(
                    'message' => 'Agami Sale Update Successfully',
                    'alert-type' => 'success'
                );
                return redirect()->route('all.agami_product')->with($notification);
    }


    public function TodayAgamiSale(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $date = date('d/m/y');
        $data ['todaysale']= DB::table('agamis')->where('date',$date)->get();
        
        return view('agami.today_agami_sale',$data);
    }

    public function ThisMonthAgamiSale(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $month = date('F');
        $data ['thismonthsale']= DB::table('agamis')->where('month',$month)->get();
        return view('agami.this_month_agami_sale',$data);
    }

    public function YearlyAgamiSale(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $year = date('Y');
        $data ['yearly']= DB::table('agamis')->where('year',$year)->get();
        return view('agami.yearly_sale',$data);
    }

    public function JanuaryAgamiSale(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $month_name="January";
        $year = date('Y');

        $data['january'] = DB::table('agamis')->where('month',$month_name)->where('year',$year)->get();
        
        return view('agami.january_sale',$data);


    }
    //june month
    public function JuneAgamiSale(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $month_name="June";
        $year = date('Y');
        $data['june'] = DB::table('agamis')->where('month',$month_name)->where('year',$year)->get();
        return view('agami.june_sale',$data);
    }  //end method
    //july month
    public function JulyAgamiSale(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $month_name="July";
        $year = date('Y');
        $data['july'] = DB::table('agamis')->where('month',$month_name)->where('year',$year)->get();
        return view('agami.july_sale',$data);
    } //end method
    //august month
    public function AugustAgamiSale(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $month_name="August";
        $year = date('Y');
        $data['august'] = DB::table('agamis')->where('month',$month_name)->where('year',$year)->get();
        return view('agami.august_sale',$data);
    }
// september month
    public function SeptemberAgamiSale(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $month_name="September";
        $year = date('Y');
        $data['septmber'] = DB::table('agamis')->where('month',$month_name)->where('year',$year)->get();
        return view('agami.september_sale',$data);

    }
    //october month
    public function OctoberAgamiSale(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $month_name="October";
        $year = date('Y');
        $data['october'] = DB::table('agamis')->where('month',$month_name)->where('year',$year)->get();
        return view('agami.october_sale',$data);
    }
// november
    public function NovemberAgamiSale(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $month_name="November";
        $year = date('Y');
        $data['november'] = DB::table('agamis')->where('month',$month_name)->where('year',$year)->get();
        return view('agami.november_sale',$data);
    }
    public function DecemberAgamiSale(){
        $data= array();
        if(Session::has('loginId')){
            $userId = session()->get('loginId');
            $data['user'] = User::where('id','=',$userId)->first();
        }
        $month_name="December";
        $year = date('Y');
        $data['december'] = DB::table('agamis')->where('month',$month_name)->where('year',$year)->get();
        return view('agami.december_sale',$data);
    }
}