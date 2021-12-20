@php  
	$setting=DB::table('settings')->first();
	$charge=$setting->shipping_charge;
	$vat=$setting->vat;

@endphp
@extends('layouts.user.app')
@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
@include('layouts.user.manubar')
	</header>
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Checkout</a></li>
			
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<form action="{{ route('payment.process') }}" method="get">
              @csrf
			<div id="content" class="col-sm-12">
			  <h2 class="title">Checkout</h2>
			  <div class="so-onepagecheckout ">
				<div class="col-left col-sm-3">
				
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
					</div>
					  <div class="panel-body">
							<fieldset id="account">
							  <div class="form-group required">
								<label for="input-payment-firstname" class="control-label">First Name</label>
								<input type="text" class="form-control" id="input-payment-firstname" placeholder="First Name" value="" name="firstname" required="">
							  </div>
							  <div class="form-group required">
								<label for="input-payment-lastname" class="control-label">Last Name</label>
								<input type="text" class="form-control" id="input-payment-lastname" placeholder="Last Name" value="" name="lastname">
							  </div>
							  <div class="form-group required">
								<label for="input-payment-email" class="control-label">E-Mail</label>
								<input type="text" class="form-control" id="input-payment-email" placeholder="E-Mail" value="" name="email">
							  </div>
							  <div class="form-group required">
								<label for="input-payment-telephone" class="control-label">Telephone</label>
								<input type="text" class="form-control" id="input-payment-telephone" placeholder="Telephone" value="" name="telephone">
							  </div>
							 
							</fieldset>
						  </div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title"><i class="fa fa-book"></i> Your Address</h4>
					</div>
					  <div class="panel-body">
							<fieldset id="address" class="required">
							 
							  <div class="form-group required">
								<label for="input-payment-address-1" class="control-label">Address 1</label>
								<input type="text" class="form-control" id="input-payment-address-1" placeholder="Address 1" value="" name="address_1">
							  </div>
							  <div class="form-group">
								<label for="input-payment-address-2" class="control-label">Address 2</label>
								<input type="text" class="form-control" id="input-payment-address-2" placeholder="Address 2" value="" name="address_2">
							  </div>
							  <div class="form-group required">
								<label for="input-payment-city" class="control-label">City</label>
								<input type="text" class="form-control" id="input-payment-city" placeholder="City" value="" name="city">
							  </div>
							  <div class="form-group required">
								<label for="input-payment-postcode" class="control-label">Post Code</label>
								<input type="text" class="form-control" id="input-payment-postcode" placeholder="Post Code" value="" name="postcode">
							  </div>
							  <div class="form-group required">
								<label for="input-payment-country" class="control-label">Area</label>
								<select class="form-control" id="input-payment-country" name="country_id">
								  <option value=""> --- Please Select --- </option>
								  <option value="Sutrapur">Sutrapur</option>
								 
								  
								</select>
							  </div>
						
							  <div class="checkbox">
								<label>
								  <input type="checkbox" checked="checked" value="1" name="shipping_address">
								  My delivery and billing addresses are the same.</label>
							  </div>
							</fieldset>
						  </div>
				  </div>
				</div>
				<div class="col-right col-sm-9">
				  <div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default no-padding">
							<div class="col-sm-6 checkout-shipping-methods">
								<div class="panel-heading">
								  <h4 class="panel-title"><i class="fa fa-truck"></i> Delivery Method</h4>
								</div>
								<div class="panel-body ">
									<p>Please select the preferred shipping method to use on this order.</p>
									<div class="radio">
									  <label>
										<input type="hidden"  name="Free Shipping">
										Free Shipping - ট 0.00</label>
									</div>
									<div class="radio">
									  <label>
										<input type="hidden" name="Flat Shipping Rate">
										Flat Shipping Rate - ট {{ $charge }}</label>
									</div>
									
								</div>
							</div>
							<div class="col-sm-6  checkout-payment-methods">
								<div class="panel-heading">
								  <h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method</h4>
								</div>
								<div class="panel-body">
									<p>Please select the preferred payment method to use on this order.</p>
									{{-- <div class="radio">
									  <label>
										<input type="radio" name="Cash On Delivery"> gfdg</label>
									</div> --}}
									
									<div class="radio">
									  <label>
										<input type="radio" value="cash" name="payment">Cash On Delivery</label>
									</div>
									<div class="radio">
									  <label>
										<input type="radio" value="stripe" name="payment">Stripe</label>
									</div>
									<div class="radio">
									  <label>
										<input type="radio" value="paypal" name="payment">Paypal</label>
									</div>
									<div class="radio">
									  <label>
										<input type="radio" value="ideal" name="payment">Ideal</label>
									</div>
									<div class="radio">
									  <label>
										<input type="radio" value="bkash" name="payment">Bkash</label>
									</div>
								</div>
							</div>
						</div>
						
						
							
						</div>
					
					
					
				{{-- 	<div class="col-sm-12">
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-ticket"></i> Do you Have a Coupon or Voucher?</h4>
						</div>
						  <div class="panel-body row">
							<div class="col-sm-6">
							<div class="input-group">
							  <input type="text" class="form-control" id="input-coupon" placeholder="Enter your coupon here" value="" name="coupon">
							  <span class="input-group-btn">
							  <input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-coupon" value="Apply Coupon">
							  </span></div>
							</div>
							
							<div class="col-sm-6">
							<div class="input-group">
							  <input type="text" class="form-control" id="input-voucher" placeholder="Enter your gift voucher code here" value="" name="voucher">
							  <span class="input-group-btn">
							  <a  class="btn btn-primary" data-loading-text="Loading..." id="button-voucher" value="Apply Voucher"></a>
							  </span> </div>
							</div>
						  </div>
					  </div>
					</div> --}}
					
					<div class="col-sm-12">
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
						</div>
						  <div class="panel-body">
							<div class="table-responsive">
							  <table class="table table-bordered">
								<thead>
								  <tr>
									<td class="text-center">Image</td>
									<td class="text-left">Product Name</td>
									<td class="text-left">Quantity</td>
									<td class="text-right">Unit Price</td>
									<td class="text-right">Total</td>
								  </tr>
								</thead>
								<tbody>
									@foreach($cart as $row)
								  <tr>
									<td class="text-center"><a href="product.html"><img width="60px" src="{{ asset( $row->options->image ) }}" alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes" class="img-thumbnail"></a></td>
									<td class="text-left"><a href="product.html">{{  $row->name  }}</a></td>
									<td class="text-left">
										<div class="input-group btn-block" style="min-width: 100px;">
										 {{ $row->qty }}
										</div>
									</td>
									<td class="text-right">ট {{ $row->price }}</td>
									<td class="text-right">ট {{ $row->price*$row->qty }}</td>
								  </tr>
								  @endforeach
								</tbody>
								<tfoot>
								  <tr>
									<td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
									<td class="text-right">ট {{ Cart::Subtotal() }}</td>
								  </tr>
								  <tr>
									<td class="text-right" colspan="4"><strong>Flat Shipping Rate:</strong></td>
									<td class="text-right">ট {{ $charge }}</td>
								  </tr>
								  {{-- <tr>
									<td class="text-right" colspan="4"><strong>Eco Tax (-2.00):</strong></td>
									<td class="text-right">$3.75.00</td>
								  </tr> --}}
								  <tr>
									<td class="text-right" colspan="4"><strong>VAT ({{ $vat }} ট):</strong></td>
									<td class="text-right">ট {{ $vat }}</td>
								  </tr>
								  <tr>
									<td class="text-right" colspan="4"><strong>Total:</strong></td>
									<td class="text-right">{{ Cart::Subtotal()  }} ট</td>
								  </tr>
								</tfoot>
							  </table>
							</div>
						  </div>
					  </div>
					</div>
					<div class="col-sm-12">
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your Order</h4>
						</div>
						  <div class="panel-body">
							<textarea rows="4" class="form-control" id="confirm_comment" name="comments"></textarea>
							<br>
							<label class="control-label" for="confirm_agree">
							  <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
							  <span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span> </label>
							<div class="buttons">
							  <div class="pull-right">
								<button type="submit" class="btn btn-primary">Confirm Order</button>
							  </div>
							</div>
						  </div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		</form>
			<!--Middle Part End -->
			
		</div>
	</div>
	<!-- //Main Container -->
@endsection