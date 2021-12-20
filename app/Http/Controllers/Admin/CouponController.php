<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CouponController extends Controller
{
    public function index(){
        $coupon =DB::table('coupon')->get();
        return view('admin.coupon.create',compact('coupon'));
    }

    public function store(Request $request){
        $data=array();
        $data['coupon']=$request->coupon;
        $data['discount']=$request->discount;
        $done =DB::table('coupon')->insert($data);
        if ($done) {
            $notification = array(
                'message' => 'coupon Added Successfully.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'coupon Added Unuccessfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
        }


    }

    public function deleteCoupone($id){
        $done =DB::table('coupon')->where('id',$id)->delete();
        if ($done) {
            $notification = array(
                'message' => 'coupon Delete Successfully.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'coupon Delete Unuccessfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
        }


    }


}
