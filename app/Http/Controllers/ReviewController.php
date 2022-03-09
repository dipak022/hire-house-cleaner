<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
class ReviewController extends Controller
{
    public function store(Request $request){
        $data=array();
        $rating = $request->product_rating;
        $product_id = $request->product_id;
        
        if (Auth::check()) {
            $check_product= DB::table('products')->where('id',$request->product_id)->first();
            if ($check_product) {
                $verified_purchase = DB::table('orders')->where('user_id',Auth::id())->first();
                //$verified_purchase=DB::table('orders')->join('order_details','orders.id','order_details.oder_id')->where('orders.user_id',Auth::id())->where('order_details.product_id',$product_id)->select('orders.*','order_details.product_name')->get();
                if($verified_purchase){
                    $existing_rating = DB::table('rating')->where('users_id',Auth::id())->where('products_id',$product_id)->first();
                    if($existing_rating)
                    {
                        $notification = array(
                            'message' => 'Rating Already added!!!.',
                            'alert-type' => 'success'
                        );
                        return redirect()->back()->with($notification);

                        
                    }else{
                        $data=array();
                        $data['users_id']=Auth::id();
                        $data['products_id']=$product_id;
                        $data['rating']=$rating;
                        $data['comment']=$request->comment;
                        $done = DB::table('rating')->insert($data);

                    }
                    
                    if ($done) {
                        $notification = array(
                            'message' => 'Thank you for Rating this service.',
                            'alert-type' => 'success'
                        );
                        return redirect()->back()->with($notification);
                    }else{
                        $notification = array(
                            'message' => 'Rating Added Unuccessfully',
                            'alert-type' => 'danger'
                        );
                        return redirect()->back()->with($notification);
                    }
                }else{
                    $notification = array(
                    'message' => 'You can not rate a product without parchase .',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
                }
            }else{
                $notification = array(
                    'message' => 'The link fallow was broken.',
                    'alert-type' => 'warning'
                );
                return redirect()->back()->with($notification);
            }
        }else{
            $notification = array(
                'message' => 'AT first login your account',
                'alert-type' => 'warning'
            );
            return redirect()->route('login')->with($notification);
    }
    }


   
  
}
