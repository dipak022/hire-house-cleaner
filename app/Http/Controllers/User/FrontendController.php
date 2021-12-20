<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;
use Cart;
class FrontendController extends Controller
{
    public function register(){
    	return view('user.register');
    }

    public function profile(){
    	return view('user.profile');
    }

    public function Logout()
    {
        // $logout= Auth::logout();
            Auth::logout();
            $notification=array(
                'messege'=>'Successfully Logout',
                'alert-type'=>'success'
                 );
             return Redirect()->to('/')->with($notification);
       

    }

    public function ProductView($id,$product_name)
    {
        $product=DB::table('products')
        ->join('category','products.category_id','category.id')
        ->join('subcategory','products.subcategory_id','subcategory.id')
        ->select('products.*','category.categoty_name','subcategory.subcategory_name')->where('products.id',$id)->first();


      return  view('user.product_details',compact('product'));
    }


       public function AddCart(Request $request,$id)
    {
         $product=DB::table('products')->where('id',$id)->first();
          $data=array();
          if ($product->discount_price == NULL) {
                        $data['id']=$id;
                        $data['name']=$product->product_name;
                        $data['qty']=$request->qty;
                        $data['price']= $product->selling_price;          
                        $data['weight']=1;
                        $data['options']['image']=$product->image_one;
                        $data['options']['approximate']=$request->approximate;
                        
                        $done =Cart::add($data);
                        //dd($data);
                        if ($done) {
                            $notification = array(
                                'message' => 'Cart Added Successfully.',
                                'alert-type' => 'success'
                            );
                            return redirect()->back()->with($notification);
                        }else{
                            $notification = array(
                                'message' => 'Added Added Unuccessfully',
                                'alert-type' => 'danger'
                            );
                            return redirect()->back()->with($notification);
                        }
                        
           }else{
                        $data['id']=$id;
                        $data['name']=$product->product_name;
                        $data['qty']=$request->qty;
                        $data['price']= $product->discount_price;
                        $data['weight']=1;
                        $data['options']['image']=$product->image_one;
                        $data['options']['color']=$request->color;
                        $data['options']['size']=$request->size;
                         $done =Cart::add($data);
                         //dd($data);
                        if ($done) {
                            $notification = array(
                                'message' => 'Cart Added Successfully.',
                                'alert-type' => 'success'
                            );
                            return redirect()->back()->with($notification);
                        }else{
                            $notification = array(
                                'message' => 'Cart Added Unuccessfully',
                                'alert-type' => 'danger'
                            );
                            return redirect()->back()->with($notification);
                        }
         }
    }

    public function quickview($id,$product_name){
        
        $product=DB::table('products')
        ->join('category','products.category_id','category.id')
        ->join('subcategory','products.subcategory_id','subcategory.id')
        ->select('products.*','category.categoty_name','subcategory.subcategory_name')->where('products.id',$id)->first();

       
      return  view('user.quickview',compact('product'));
    }

    public function productsView($id)
    {
         $products=DB::table('products')->where('subcategory_id',$id)->paginate(9);
         
         
         return view('user.all_products',compact('products'));
         //dd($products);
    }

    public function OrderTracking(Request $request)
    {
         $code=$request->code;


         $track=DB::table('orders')->where('status_code',$code)->first();
         if ($track) {             
             return view('user.track',compact('track'));
         }else{
               
              $notification = array(
                    'message' => 'Status code invalid.',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
         }

    }

    public function ProductSearch(Request $request)
    {
        
          //$brands= DB::table('products')->where('subcategory_id',$id)->select('brand_id')->groupBy('brand_id')->get();
          $item=$request->search;
          $products=DB::table('products')
                                ->where('product_name','LIKE', "%{$item}%")
                                ->paginate(20);
               return view('user.search',compact('products'));

               
         
         //return view('user.all_products',compact('products','brands')
               //dd($products);     
    }


    public function alldetails($id){
        
        
      $check=DB::table('trainer')
      ->where('id',$id)
         ->first();

         $trainerall=DB::table('trainers')->join('trainer','trainers.trainer_id','trainer.id')->where('trainers.trainer_id',$id)->select('trainers.*','trainer.trainer_name')
    ->orderBy('id','DESC')->get();
        
         return view('user.all_trainers',compact('trainerall','check'));
         
         /* echo "<pre>";
        print_r($trainerall);
        exit(); */
    }

    public function alltrainersdetails($id){

      $ids=\Crypt::decrypt($id);
      $all=DB::table('trainers')->where('id',$ids)->first();
      if($all){

        return view('user.trainer_detals',compact('all'));
      }else{
        return view('fontend-page.404');
      }
    }

    
}
