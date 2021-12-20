@php  
	$setting=DB::table('settings')->first();
	$charge=$setting->shipping_charge;
	$vat=$setting->vat;

@endphp
@extends('layouts.user.app')
@section('content')

<style type="text/css">
	/**
	 * The CSS shown here will not be introduced in the Quickstart guide, but shows
	 * how you can use CSS to style your Element's container.
	 */
	.StripeElement {
	  box-sizing: border-box;

	  height: 40px;
	  width: 100%;

	  padding: 10px 12px;

	  border: 1px solid transparent;
	  border-radius: 4px;
	  background-color: white;

	  box-shadow: 0 1px 3px 0 #e6ebf1;
	  -webkit-transition: box-shadow 150ms ease;
	  transition: box-shadow 150ms ease;
	}

	.StripeElement--focus {
	  box-shadow: 0 1px 3px 0 #cfd7df;
	}

	.StripeElement--invalid {
	  border-color: #fa755a;
	}

	.StripeElement--webkit-autofill {
	  background-color: #fefde5 !important;
	}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
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
			
             
			<div id="content" class="col-sm-12">
			  <h2 class="title">Checkout</h2>
			  <div class="so-onepagecheckout ">
				
				<div class="col-right col-sm-12">
				  <div class="row">
					<div class="col-sm-12">
						<div style="text-align: center;" class="panel panel-default no-padding">
							
							<div class="col-sm-12  checkout-payment-methods">
								<div class="panel-heading">
								  <h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method Stripe</h4>
								</div>
								<div class="panel-body">
									<p>Please select the preferred payment method to use on this order.</p>
									
									
								
							</div>
						</div>
						
						
							
						</div>
					
	
					
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
						  <h4 class="panel-title"><i class="fa fa-pencil"></i> Add Your Card Number And Order Confirm</h4>
						</div>
						  <div class="panel-body">
							
							<br>
							<form action="{{ route('stripe.charge') }}" method="post" id="payment-form" style="border: 1px solid grey; padding: 20px;">
                        	@csrf
                          <div class="form-row">
                            <label for="card-element">
                              Credit or debit card
                            </label>
                            <div id="card-element">
                              <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                          </div><br>

                        {{--   extra data --}}
                           <input type="hidden" name="shipping" value="{{ $charge }}" >
                           <input type="hidden" name="vat" value="{{ $vat }}">
                           <input type="hidden" name="total" value="{{ Cart::Subtotal()  }}" >
                             {{-- shipping details pass --}}
	                         <input type="hidden" name="firstname" value="{{ $data['firstname'] }}">
	                         <input type="hidden" name="lastname" value="{{ $data['lastname'] }}">
	                         <input type="hidden" name="email" value="{{ $data['email'] }}">
	                         <input type="hidden" name="telephone" value="{{ $data['telephone'] }}">
	                         <input type="hidden" name="fax" value="{{ $data['fax'] }}">
	                         <input type="hidden" name="company" value="{{ $data['company'] }}">
	                         <input type="hidden" name="address_1" value="{{ $data['address_1'] }}">
	                         <input type="hidden" name="address_2" value="{{ $data['address_2'] }}">
	                         <input type="hidden" name="city" value="{{ $data['city'] }}">
	                         <input type="hidden" name="postcode" value="{{ $data['postcode'] }}">
	                         <input type="hidden" name="country_id" value="{{ $data['country_id'] }}">
	                         <input type="hidden" name="zone_id" value="{{ $data['zone_id'] }}">
	                         <input type="hidden" name="comments" value="{{ $data['comments'] }}">
	                         <input type="hidden" name="payment" value="{{ $data['payment'] }}">  

							<div class="buttons">
							  <div class="pull-right">
								<button type="submit" class="btn btn-primary">Pay Now</button>
							  </div>
							</div>
							</form>
						  </div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		
			<!--Middle Part End -->
			
		</div>
	</div>
	<!-- //Main Container -->
	
		
<script type="text/javascript">
	// Create a Stripe client.
var stripe = Stripe('pk_test_51IdiCJA4qXiRDztJMX0pVtKqCwmzGwgLUDgcPUIgWVFiLRKbcYaFCE5v1YabuR6Ma8ITaIpbscKewZdDddCMnfZV0091tPfeAF');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}
</script>


@endsection