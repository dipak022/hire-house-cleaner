<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
class WishlistController extends Controller
{
    public function AddWishlist($id)
    {

    	$userid=Auth::id();
    	$check=DB::table('wishlist')->where('user_id',$userid)->where('product_id',$id)->first();

    	$data = array(
    		'user_id' => $userid, 
    		'product_id'=>$id 
    	);

    	if (Auth::check()) {
    		if ($check) {
    			// return \Response::json(['error' => 'Product Already has on your wishlist']);        
                return response()->json(['error' => 'Product Already has on your wishlist']);       
    		}else{
    			DB::table('wishlist')->insert($data);
             //   return \Response::json(['success' => 'Successfully Added on your wishlist']); 
             return response()->json(['success' => 'Successfully Added on your wishlist']);   		
    		}
    	}else{
    		//return \Response::json(['error' => 'At first login your account']);
              return response()->json(['error' => 'At first login your account']);        
    	}

    }

	public function DeleteWishlist($id){
		$done =DB::table('wishlist')->where('id',$id)->delete();
        if ($done) {
            $notification = array(
                'message' => 'Wishlist Delete Successfully.',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'wishlist Delete Unuccessfully',
                'alert-type' => 'danger'
            );
            return redirect()->back()->with($notification);
        }

	}
}
