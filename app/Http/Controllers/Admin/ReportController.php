<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
class ReportController extends Controller
{
    public function TodayOrder()
    {
    	  $today=date('d-m-y');
    	  $order=DB::table('orders')->where('status',0)->where('date',$today)->get();
    	  return view('admin.report.today_order',compact('order'));
    }
    public function TodayDelevered()
    {
          $today=date('d-m-y');
    	  $order=DB::table('orders')->where('status',3)->where('date',$today)->get();
    	  return view('admin.report.today_order',compact('order'));
    	  //dd($order);
    }

    public function ThisMonth()
    {
    	  $month=date('F');
    	  $order=DB::table('orders')->where('status',3)->where('month',$month)->get();
    	  return view('admin.report.today_order',compact('order'));
    }

     public function search()
    {
    	 return view('admin.report.search');
    }

    public function searchByYear(Request $request)
    {
    	 $year=$request->year;
    	 $total=DB::table('orders')->where('status',3)->where('year',$year)->sum('total');
         $order=DB::table('orders')->where('status',3)->where('year',$year)->get();
         return view('admin.report.search_report',compact('order','total'));
         //echo "$total";

    }

    public function searchByMonth(Request $request)
    {
        $month=$request->month;
    	 $total=DB::table('orders')->where('status',3)->where('month',$month)->sum('total');
         $order=DB::table('orders')->where('status',3)->where('month',$month)->get();
         return view('admin.report.search_report',compact('order','total'));
        
        
    }

    public function searchByDate(Request $request)
    {
    	  $date=$request->date;
          $newdate = date("d-m-y", strtotime($date));
          $total=DB::table('orders')->where('status',3)->where('date',$newdate)->sum('total');
          $order=DB::table('orders')->where('status',3)->where('date',$newdate)->get();
         return view('admin.report.search_report',compact('order','total'));

    }
    public function UserRole()
    {
    	 $user=DB::table('users')->where('roll_id',3)->where('user_status',1)->get();
    	 return view('admin.role.all_role',compact('user'));
    }

    public function UserCreate()
    {
        $category =DB::table('category')->get();
    	  return view('admin.role.create',compact('category'));
    }

      public function UserStore(Request $request)
    {
    	 $data=array();
    	 $data['name']=$request->name;
    	 $data['phone']=$request->phone;
    	 $data['email']=$request->email;
         $data['te_category']=$request->te_category;
         
    	 $data['password']= Hash::make($request->password);
         $data['user_status']=1;
    	 $data['roll_id']=3;

    	 $done=DB::table('users')->insert($data);
    	   if ($done) {
                $notification = array(
                    'message' => 'Technician Account Create Successfully.',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            }else{
                $notification = array(
                    'message' => 'Technician Account Create UnSuccessfully',
                    'alert-type' => 'danger'
                );
                return redirect()->back()->with($notification);
            }
    	
    }

    public function UserDelete($id)
    {
    	 DB::table('users')->where('id',$id)->delete();
    	 $notification=array(
                 'messege'=>' Technician Account Delete Successfully',
                 'alert-type'=>'success'
                       );
         return Redirect()->back()->with($notification);
    }
}


