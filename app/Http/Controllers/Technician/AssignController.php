<?php

namespace App\Http\Controllers\Technician;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class AssignController extends Controller
{
    public function technician_assign(){
        $user=DB::table('users')->where('roll_id',3)->where('user_status',1)->get();
        $category =DB::table('category')->get();
        $order=DB::table('orders')->join('users','orders.user_id','users.id')->select('users.name','orders.*')->get();
       $details=DB::table('assign')->get();
        return view('admin.TechnicianAssign.create',compact('category','details','order','user'));
    }

    public function store_technician_assign(Request $request){

        $data=array();
        $data['assign_tec_id']=$request->assign_tec_id;
        $data['assign_user_id']=$request->assign_user_id;
        $data['technician_category']=$request->technician_category;
        $data['assign_status']=0;
        $done =DB::table('assign')->insert($data);
        if ($done) {
            $notification = array(
                'message' => 'Technician Assign  Successfully.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'Technician Assign Unuccessfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
        }

    }

    public function technician_assign_complate($id){
        DB::table('assign')->where('id',$id)->update(['assign_status'=>1]);
        $notification = array(
            'message' => 'Delivery Accept',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }

    public function technician_assign_delete($id){
        $done =DB::table('assign')->where('id',$id)->delete();
        if ($done) {
            $notification = array(
                'message' => 'Technician Delete Successfully.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'Technician Delete Unuccessfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
        }

    }
}
