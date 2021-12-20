<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class OrderController extends Controller
{
    public function NewOrder()
    {
    	 $order=DB::table('orders')->where('status',0)->get();
    	 return view('admin.order.pending',compact('order'));
    	 //dd($order);
    }

    public function ViewOrder($id)
    {
    	 $order=DB::table('orders')->join('users','orders.user_id','users.id')->select('users.name','orders.*')->where('orders.id',$id)->first();

    	 $shipping=DB::table('shipping')->where('order_id',$id)->first();

    	 $details=DB::table('order_details')->join('products','order_details.product_id','products.id')->select('products.product_code','products.image_one','order_details.*')->where('order_details.oder_id',$id)->get();


          return view('admin.order.view_order',compact('order','shipping','details'));
    	 //dd($details);


          /*$details=DB::table('order_details')->join('products','order_details.product_id','products.id')->select('products.product_code','products.image_one','order_details.*')->where('order_details.oder_id',$id)->get();*/
    	 
    	 
    }

    public function PaymentAccept($id)
    {
        DB::table('orders')->where('id',$id)->update(['status'=>1]);
        $notification = array(
            'message' => 'Payment Accept',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.neworder')->with($notification);
    }

    public function PaymentCancel($id)
    {
        DB::table('orders')->where('id',$id)->update(['status'=>4]);
      
        $notification = array(
            'message' => 'Order Cancel',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.neworder')->with($notification);
    }
    public function AcceptPaymentOrder()
    {
         $order=DB::table('orders')->where('status',1)->get();
         return view('admin.order.pending',compact('order'));
    }

    public function CancelPaymentOrder()
    {
        $order=DB::table('orders')->where('status',4)->get();
         return view('admin.order.pending',compact('order'));
    }

    public function ProgressPaymentOrder()
    {
         $order=DB::table('orders')->where('status',2)->get();
         return view('admin.order.pending',compact('order'));
    }

    public function SuccessPaymentOrder()
    {
         $order=DB::table('orders')->where('status',3)->get();
         return view('admin.order.pending',compact('order'));
    }
    public function DeleveryProgress($id)
    {
         DB::table('orders')->where('id',$id)->update(['status'=>2]);
        
         $notification = array(
            'message' => 'Send To delevery',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.accept.payment')->with($notification);
    }
    public function DeleveryDone($id)
    {

        $product=DB::table('order_details')->where('oder_id',$id)->get();
        DB::table('orders')->where('id',$id)->update(['status'=>3]);
        
         $notification = array(
            'message' => 'Send To delevery',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.success.payment')->with($notification);
    }
}
