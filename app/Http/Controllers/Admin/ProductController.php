<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
class ProductController extends Controller
{
    public function index(){
        $category=DB::table('category')->get();
        $subcategory=DB::table('subcategory')->get();
        
        return view('admin.product.create',compact('category','subcategory'));
    }

    public function getsubcategory($category_id){
        $cat = DB::table("subcategory")->where("category_id",$category_id)->get();
        return json_encode($cat);
        dd($cat);
        //echo "Done";
    }


    public function store(Request $request)
    {
        $data=array();
    	$data['product_name']=$request->product_name;
    	$data['product_code']=$request->product_code;
    	$data['category_id']=$request->category_id;
    	$data['subcategory_id']=$request->subcategory_id;
    	$data['approximate']=$request->approximate;
        $data['others']=$request->others;
    	$data['selling_price']=$request->selling_price;
    	$data['ex_tax']=$request->ex_tax;
    	$data['product_details']=$request->product_details;
    	$data['featured_product']=$request->featured_product;
    	$data['new_product']=$request->new_product;
    	$data['status']=1;

    	$image_one=$request->image_one;
    	$image_two=$request->image_two;
    	$image_three=$request->image_three;
    	$image_four=$request->image_four;

    if($image_one && $image_two && $image_three && $image_four){
            $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
                Image::make($image_one)->resize(230,300)->save('media/product/'.$image_one_name);
                $data['image_one']='media/product/'.$image_one_name;

            $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
                Image::make($image_two)->resize(230,300)->save('media/product/'.$image_two_name);
                $data['image_two']='media/product/'.$image_two_name; 

            $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
                Image::make($image_three)->resize(230,300)->save('media/product/'.$image_three_name);
                $data['image_three']='media/product/'.$image_three_name; 

            $image_four_name= hexdec(uniqid()).'.'.$image_four->getClientOriginalExtension();
                Image::make($image_four)->resize(230,300)->save('media/product/'.$image_four_name);
                $data['image_four']='media/product/'.$image_four_name; 
                
                $product=DB::table('products')
                          ->insert($data);
                    $notification=array(
                     'messege'=>'Successfully Service Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification); 
        }
   
    }

    public function shows(){
        //$products=DB::table('products')->get();
        
        $productall=DB::table('products')
        ->join('category','products.category_id','category.id')
        ->join('subcategory','products.subcategory_id','subcategory.id')
        ->select('products.*','category.categoty_name','subcategory.subcategory_name')->get();
        //dd($productall);
        return view('admin.product.showproduct',compact('productall'));
    }

 

    public function deleteproducts($id){
        $data=DB::table('products')->where('id',$id)->first();
       
        $brand=DB::table('products')->where('id',$id)->delete();
                $notification=array(
                     'messege'=>'Successfully Service Deleted ',
                     'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);
     }

     public function editproducts($id){
        $products=DB::table('products')->where('id',$id)->first();
        return view('admin.product.editproduct',compact('products'));

     }

     public function Updateproducts(Request $request ,$id){
         
        $data=array();
        $data['discount_price']=$request->discount_price;
        $done=DB::table('products')->where('id',$id)->update($data);
        if ($done) {
            $notification = array(
                'message' => 'Service Update Successfully.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'Service Update Unuccessfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
        }

     }
}
