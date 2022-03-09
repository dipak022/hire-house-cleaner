<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'admin','middleware'=>['admin','auth'],'namespace'=>'admin'], function() {
    Route::get('dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.deshboard');

    //permition 
    Route::get('/permition',[App\Http\Controllers\Technician\PermitionController::class, 'permition'])->name('permition.saller');
    Route::get('/permition/accept',[App\Http\Controllers\Technician\PermitionController::class, 'permition_Accept'])->name('permition');

    //Category Route here

    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category');
    Route::post('store/category', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('store.category');
    // trainer category
    Route::get('trainer', [App\Http\Controllers\TrainerController::class, 'index'])->name('trainer');
    Route::post('store/trainer', [App\Http\Controllers\TrainerController::class, 'store'])->name('store.trainer');
    // trainers all information
    Route::get('trainers', [App\Http\Controllers\TrainersController::class, 'index'])->name('trainers');
    Route::post('store/trainers', [App\Http\Controllers\TrainersController::class, 'store'])->name('store.trainers');


    //subcategory Route here 
    Route::get('subcategory', [App\Http\Controllers\Admin\SubcategoryController::class, 'index'])->name('subcategory');
    Route::post('store/subcategory', [App\Http\Controllers\Admin\SubcategoryController::class, 'store'])->name('store.subcategory');
  


    //coupone route 
    Route::get('coupon', [App\Http\Controllers\Admin\CouponController::class, 'index'])->name('coupon');
    Route::post('store/coupon', [App\Http\Controllers\Admin\CouponController::class, 'store'])->name('store.coupon');


    Route::post('store/newslater', [App\Http\Controllers\User\NewslaterController::class, 'storenewslater'])->name('newslater.store');
    

    //product route here 
    Route::get('showsproduct', [App\Http\Controllers\Admin\ProductController::class, 'shows'])->name('showsproduct');
    Route::get('product', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product');
    Route::post('store/product', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('store.product');
    Route::get('get/subcategory/{category_id}', [App\Http\Controllers\Admin\ProductController::class, 'getsubcategory']);
   

    // setting route here 
    
    Route::get('setting/', [App\Http\Controllers\Admin\SettingController::class, 'setting'])->name('setting');
    


    //order route here 

Route::get('/panding/new/order/', [App\Http\Controllers\Admin\OrderController::class, 'NewOrder'])->name('admin.neworder');
//slider
Route::get('slider/', [App\Http\Controllers\Admin\SettingController::class, 'slider'])->name('slider');









 
});
  //admin/delete/category
  Route::get('admin/delete/category/{id}', [App\Http\Controllers\Admin\SubcategoryController::class, 'DeleteSubCategory']);
// permition seller account route here 

Route::get('admin/permition/technician/{id}', [App\Http\Controllers\Technician\PermitionController::class, 'accept_technician_account']);
Route::get('admin/delete/permition/technician/{id}', [App\Http\Controllers\Technician\PermitionController::class, 'delete_technician_account']);


//product delete 
Route::get('product/delete/item/{id}', [App\Http\Controllers\Admin\ProductController::class, 'deleteproducts']);
//product/edit/item/
Route::get('service/edit/item/{id}', [App\Http\Controllers\Admin\ProductController::class, 'editproducts']);
//admin/update/service/
Route::post('admin/update/service/{id}', [App\Http\Controllers\Admin\ProductController::class, 'Updateproducts']);

//slider update
Route::post('admin/update/slider/{id}', [App\Http\Controllers\Admin\SettingController::class, 'sliderupdate']);
//admin.database.backup
        Route::get('database/backup/', [App\Http\Controllers\Admin\SettingController::class, 'DatabaseBackup'])->name('admin.database.backup');
//admin payment manage
Route::get('admin/payment/accept/{id}', [App\Http\Controllers\Admin\OrderController::class,'PaymentAccept']);
Route::get('admin/payment/cancel/{id}', [App\Http\Controllers\Admin\OrderController::class,'PaymentCancel']);
Route::get('admin/accept/payment', [App\Http\Controllers\Admin\OrderController::class,'AcceptPaymentOrder'])->name('admin.accept.payment');
Route::get('admin/progress/payment', [App\Http\Controllers\Admin\OrderController::class,'ProgressPaymentOrder'])->name('admin.progress.payment');
Route::get('admin/success/payment', [App\Http\Controllers\Admin\OrderController::class,'SuccessPaymentOrder'])->name('admin.success.payment');
Route::get('admin/cancel/payment', [App\Http\Controllers\Admin\OrderController::class,'CancelPaymentOrder'])->name('admin.cancel.order');
Route::get('admin/delevery/progress/{id}', [App\Http\Controllers\Admin\OrderController::class,'DeleveryProgress']);
Route::get('admin/delevery/done/{id}', [App\Http\Controllers\Admin\OrderController::class,'DeleveryDone']);



//report route here
Route::get('admin/today/order', [App\Http\Controllers\Admin\ReportController::class,'TodayOrder'])->name('today.order');

Route::get('admin/today/deleverd', [App\Http\Controllers\Admin\ReportController::class,'TodayDelevered'])->name('today.delevered');
Route::get('admin/this/month', [App\Http\Controllers\Admin\ReportController::class,'ThisMonth'])->name('this.month');
Route::get('admin/search/report', [App\Http\Controllers\Admin\ReportController::class,'search'])->name('search.report');
Route::post('admin/search/byyear', [App\Http\Controllers\Admin\ReportController::class,'searchByYear'])->name('search.by.year');
Route::post('admin/search/bymonth', [App\Http\Controllers\Admin\ReportController::class,'searchByMonth'])->name('search.by.month');

Route::post('admin/search/bydate', [App\Http\Controllers\Admin\ReportController::class,'searchByDate'])->name('search.by.date');

//user role route here 
Route::get('admin/create/admin', [App\Http\Controllers\Admin\ReportController::class,'UserCreate'])->name('create.admin');
Route::get('admin/create/role', [App\Http\Controllers\Admin\ReportController::class,'UserRole'])->name('create.user.role');
Route::post('admin/store/admin', [App\Http\Controllers\Admin\ReportController::class,'UserStore'])->name('store.admin');
Route::get('delete/admin/{id}', [App\Http\Controllers\Admin\ReportController::class,'UserDelete']);






//admin/view/order/
Route::get('admin/view/order/{id}', [App\Http\Controllers\Admin\OrderController::class, 'ViewOrder']);

// payment route here 

Route::get('user/payment/process/', [App\Http\Controllers\User\PaymentController::class, 'payment'])->name('payment.process');
Route::post('user/stripe/charge/', [App\Http\Controllers\User\PaymentController::class, 'STripeCharge'])->name('stripe.charge');

//return order 
Route::get('success/list/', [App\Http\Controllers\User\PaymentController::class, 'SuccessList'])->name('success.orderlist');
Route::get('request/return/{id}', [App\Http\Controllers\User\PaymentController::class, 'RequestReturn']);

//return products admin panel
Route::get('admin/return/request', [App\Http\Controllers\Admin\ReturnRequestController::class, 'request'])->name('admin.return.request');
Route::get('/admin/approve/return/{id}', [App\Http\Controllers\Admin\ReturnRequestController::class, 'ApproveReturn']);
Route::get('admin/all/return', [App\Http\Controllers\Admin\ReturnRequestController::class, 'AllReturn'])->name('admin.all.return');






// category edit delete Update route here 
Route::get('admin/edit/categoty/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('edit.categoty');
Route::post('admin/update/category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
Route::get('admin/delete/categoty/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'delete']);



// tracking sub category edit delete route here 

Route::get('edit/subtrainers/{id}', [App\Http\Controllers\TrainersController::class,'edit']);
Route::post('update/subtrainers/{id}', [App\Http\Controllers\TrainersController::class,'update']);

Route::get('delete/subtrainers/{id}', [App\Http\Controllers\TrainersController::class,'delete']);

//settings update route here 
Route::post('admin/update/settings/{id}', [App\Http\Controllers\Admin\SettingController::class, 'updatesetting']);


// newslater delete 

Route::get('/registers', [App\Http\Controllers\User\FrontendController::class, 'register'])->name('register.open');
Route::get('user/logout', [App\Http\Controllers\User\FrontendController::class, 'logout'])->name('user.logout');

//order tracking
Route::post('order/tracking', [App\Http\Controllers\User\FrontendController::class, 'OrderTracking'])->name('order.tracking');

Route::get('alltrainers/{id}', [App\Http\Controllers\User\FrontendController::class, 'alldetails']);
Route::get('alltrainers/details/{id}', [App\Http\Controllers\User\FrontendController::class,'alltrainersdetails']);

//product search
Route::post('product/search', [App\Http\Controllers\User\FrontendController::class, 'ProductSearch'])->name('product.search');



//wishlists

Route::get('add/wishlist/{id}', [App\Http\Controllers\User\WishlistController::class, 'AddWishlist']);
Route::get('user/wishlist/', [App\Http\Controllers\User\CartController::class, 'Wishlist'])->name('user.wishlist');

//delete/wishlists/
Route::get('delete/wishlists/{id}', [App\Http\Controllers\User\WishlistController::class, 'DeleteWishlist']);


//cart

Route::get('add/to/cart/{id}', [App\Http\Controllers\User\CartController::class, 'AddCart']);
Route::get('product/cart/', [App\Http\Controllers\User\CartController::class, 'showCart'])->name('show.cart');
Route::get('remove/cart/{rowId}', [App\Http\Controllers\User\CartController::class, 'removeCart']);
Route::post('update/cart/item', [App\Http\Controllers\User\CartController::class, 'UpdateCart'])->name('update.cartitem');
Route::get('user/checkout/', [App\Http\Controllers\User\CartController::class, 'Checkout'])->name('user.checkout');
Route::post('user/apply/coupon/', [App\Http\Controllers\User\CartController::class, 'Coupon'])->name('apply.coupon');
Route::get('coupon/remove/', [App\Http\Controllers\User\CartController::class, 'CouponRemove'])->name('coupon.remove');




 Route::post('/cart/product/add/{id}', [App\Http\Controllers\User\FrontendController::class,'AddCart']);

//product show with category route here 

 Route::get('/products/{id}', [App\Http\Controllers\User\FrontendController::class, 'productsView']);


//product detail route here 
//Route::get('/product/details/{id}/{product_name}', 'ProductController@ProductView');
Route::get('/product/details/{id}/{product_name}', [App\Http\Controllers\User\FrontendController::class, 'ProductView']);
Route::get('/product/popup/{id}/{product_name}', [App\Http\Controllers\User\FrontendController::class, 'quickview']);




Route::group(['prefix' => 'user','middleware'=>['user','auth'],'namespace'=>'user'], function() {
    Route::get('dashboard',[App\Http\Controllers\User\UserController::class, 'index'])->name('user.deshboard');
    Route::get('/profile',[App\Http\Controllers\User\FrontendController::class, 'profile'])->name('profile');
    

});



Route::group(['prefix' => 'technician','middleware'=>['technician','auth'],'namespace'=>'technician'], function() {
    Route::get('/dashboard',[App\Http\Controllers\Technician\TechnicianController::class, 'index'])->name('technician.deshboard');

});


//admin/delete/cupone/

Route::get('admin/delete/cupone/{id}', [App\Http\Controllers\Admin\CouponController::class,'deleteCoupone']);

//technician.assign
Route::get('technician/assign/', [App\Http\Controllers\Technician\AssignController::class, 'technician_assign'])->name('technician.assign');
Route::post('store/technician/assign/', [App\Http\Controllers\Technician\AssignController::class, 'store_technician_assign'])->name('store.technician.assign');
Route::get('technician/assign/complate/{id}', [App\Http\Controllers\Technician\AssignController::class,'technician_assign_complate']);
Route::get('technician/assign/delete/{id}', [App\Http\Controllers\Technician\AssignController::class,'technician_assign_delete']);


//store.review
Route::post('store/technician/assign/', [App\Http\Controllers\ReviewController::class, 'store'])->name('store.review');

