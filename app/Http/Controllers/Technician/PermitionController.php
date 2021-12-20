<?php

namespace App\Http\Controllers\Technician;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
;

use DB;
use Illuminate\Support\Facades\Auth;
class PermitionController extends Controller
{
    public function permition(){
        $permition = DB::table('users')->where('roll_id',3)->where('user_status',NULL)->get();
       
        return  view('admin.permition.permition',compact('permition'));

    }

    
    public function permition_Accept(){
        $permition = DB::table('users')->where('roll_id',3)->where('user_status',1)->get();
       
        return  view('admin.permition.accept_permition',compact('permition'));

    }

    public function accept_technician_account(Request $request,$id){
        $data=array();
        $data['user_status']=1;
        $done=DB::table('users')->where('id',$id)->update($data);
        if ($done) {
            $notification = array(
                'message' => 'Account Permition Accept Successfully.',
                'alert-type' => 'success'
            );
            return redirect()->route('permition')->with($notification);
        }else{
            $notification = array(
                'message' => 'Account Not Permition Accept Successfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
        }    

    }

    

    public function delete_technician_account($id){
        $done=DB::table('users')->where('id',$id)->delete();
        if ($done) {
            $notification = array(
                'message' => 'Technician Account Delete Successfully.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'Technician Account Delete Unuccessfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
        }

    }
}
