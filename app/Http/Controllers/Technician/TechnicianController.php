<?php

namespace App\Http\Controllers\Technician;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Auth;
class TechnicianController extends Controller
{
    public function index(){
        $check = DB::table('users')->where('id',Auth::id())->where('user_status',1)->first();
        if($check ){
            return view('Technician.deshboard');
  
        }else{
            return view('Technician.pandingdeshboard');
        }
        
    }
}
