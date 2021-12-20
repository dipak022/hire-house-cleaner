<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
use DB;
use Response;
use Auth;
use Session;
class PaymentController extends Controller
{
    public function payment(Request $request)
    {
    	 $data=array();
    	 $data['firstname']=$request->firstname;
    	 $data['lastname']=$request->lastname;
    	 $data['email']=$request->email;
    	 $data['telephone']=$request->telephone;
    	 $data['fax']=$request->fax;
    	 $data['company']=$request->company;
    	 $data['address_1']=$request->address_1;
    	 $data['address_2']=$request->address_2;
    	 $data['city']=$request->city;
    	 $data['postcode']=$request->postcode;
    	 $data['country_id']=$request->country_id;
    	 $data['zone_id']=$request->zone_id;
    	 $data['payment']=$request->payment;
    	 $data['comments']=$request->comments;

    	 //return response()->json( $data);
    	 /*dd($data);*/
    	

    	 if ($request->payment == 'stripe') {

    	 	  //stripe payment pages
    	 	$cart=Cart::content();
    	 	 return view('user.stripe',compact('data','cart'));
    	 
    	 }elseif($request->payment == 'paypal'){

    	 }elseif($request->payment == 'ideal'){

    	 }else{
    	 	echo"handcash";
    	 }

    }

    public function STripeCharge(Request $request){
    	   

    	   $total=$request->total;

			\Stripe\Stripe::setApiKey('sk_test_51IdiCJA4qXiRDztJptcvy5zkokT4v7Woftl48Ep5DvXbKZfKoN3wbVvfUA9oZ8Gq1rXPQYPn2KXOQKonbmLFj9P400JovdSgRn');

			// Token is created using Checkout or Elements!
			// Get the payment token ID submitted by the form:
			$token = $_POST['stripeToken'];

			$charge = \Stripe\Charge::create([
			    'amount' => 10000,
			    'currency' => 'usd',
			    'description' => ' Order details',
			    'source' => $token,
			    'metadata' => ['order_id' => uniqid()],
			]);

			/*dd($charge);*/
			$data=array();
			$data['user_id']=Auth::id();
			$data['payment_id']=$charge->payment_method;
			$data['paying_amount']=$charge->amount;
			$data['blnc_transection']=$charge->balance_transaction;
			$data['stripe_order_id']=$charge->metadata->order_id;
			$data['shipping']=$request->shipping;
			$data['vat']=$request->vat;
			$data['total']=$request->total;
            $data['payment_type']=$request->payment;
			 if (Session::has('coupon')) {
			 	 $data['subtotal']=Session::get('coupon')['balance'];
    	     }else{
    	  	      $data['subtotal']=Cart::Subtotal() ;
    	    }
    	    $data['status']=0;
    	    $data['date']=date('d-m-y');
    	    $data['month']=date('F');
    	    $data['year']=date('Y');
            $data['status_code']=mt_rand(100000,999999); 
    	    $order_id=DB::table('orders')->insertGetId($data);
    	    // insert shipping details table

    	

    	    	 $shipping=array();
    	    	 $shipping['order_id']=$order_id;
    	    	 $shipping['firstname']=$request->firstname;
		    	 $shipping['lastname']=$request->lastname;
		    	 $shipping['email']=$request->email;
		    	 $shipping['telephone']=$request->telephone;
		    	 $shipping['fax']=$request->fax;
		    	 $shipping['company']=$request->company;
		    	 $shipping['address_1']=$request->address_1;
		    	 $shipping['address_2']=$request->address_2;
		    	 $shipping['city']=$request->city;
		    	 $shipping['postcode']=$request->postcode;
		    	 $shipping['country_id']=$request->country_id;
		    	 $shipping['zone_id']=$request->zone_id;
		    	 $shipping['payment']=$request->payment;
		    	 $shipping['comments']=$request->comments;
    	    	DB::table('shipping')->insert($shipping);

    	    	//insert data into orderdeatils
    	    	$content=Cart::content();
    	    	$details=array();
    	    	foreach ($content as $row) {
    	    		$details['oder_id']= $order_id;
    	    		$details['product_id']=$row->id;
    	    		$details['product_name']=$row->name;
    	    		$details['approximate']=$row->options->approximate;
    	    		$details['quantity']=$row->qty;
    	    		$details['singleprice']=$row->price;
    	    		$details['totalprice']=$row->qty * $row->price;
    	    		DB::table('order_details')->insert($details);
    	    	}

    	    	Cart::destroy();
    	    	 if (Session::has('coupon')) {
			 	 Session::forget('coupon');
    	     }

    	      $notification = array(
                        'message' => 'Successfully Oder Done',
                        'alert-type' => 'success'
                    );
               return redirect()->back()->with($notification);
    }

    public function SuccessList()
    {
         $order=DB::table('orders')->where('user_id',Auth::id())->where('status',3)->orderBy('id','DESC')->limit(10)->get();
         return view('user.returnorder',compact('order'));
    }

    public function RequestReturn($id)
    {
        DB::table('orders')->where('id',$id)->update(['return_order'=>1]);
        

         $notification = array(
            'message' => 'Order Return request done please wait for our confirmation email',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
