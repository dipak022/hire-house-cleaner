@extends('layouts.user.app')
@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
@include('layouts.user.manubar')
	</header>

<div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 "  style="border: 1px solid grey; padding: 20px;">
                    <div class="contact_form_container">
                        <div class="contact_form_title text-center">Your Order Status</div> <br>

					      <div class="progress">

					      	@if($track->status == 0 )
 										  <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div><br>
 									{{-- 	  <small class="text-danger"><b>Your Order are under review <b></small> --}}
					      	@elseif($track->status == 1)
					      				  <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>

					      				   <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>

					      				 {{--   <small class="text-success"><b>Payment Accept Under Processing<b></small> --}}
					      	@elseif($track->status == 2)
					      	        <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>

					      		   <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>

					      		   <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
					      		    {{--  <small class="text-success"><b>Packing Done Handover Progress<b></small> --}}
					      	@elseif($track->status == 3)
                                     <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>


							       <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>


							       <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>

							        <div class="progress-bar bg-success" role="progressbar" style="width: 35%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
					      	@else
					      	    <div class="progress-bar bg-danger" role="progressbar" style="width: 100" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div><br>
					      	@endif
					     </div>
					 </div>

				
					     @if($track->status == 0)
					     <h4>Note: <b>Payment Accept Under Processing<b>    </h4>
					     @elseif($track->status == 1)
					      <h4>Note: <b>Payment Accept Under Processing<b>    </h4>
					     @elseif($track->status == 2)
					      <h4>Note: <b>Packing Done Handover Progress<b>    </h4>
					     @elseif($track->status == 3)
					      <h4>Note: <b>Successfully Delevered Your Order<b>    </h4>
					     	@else
					     <h4>Note: <b>Order Cancel<b>    </h4>
					      @endif
					     
					 </div>
					</div>
					<br>
					<br>
					<br>

					  <div class="col-lg-12"  style="border: 1px solid grey; padding: 20px;">
		                    <div class="contact_form_container">
		                        <div class="contact_form_title text-center">Your Order Details</div> <br>

							     {{--  <div class="jumbotron">
									 <ul>
									 	<li>Payment Type:  {{ $track->payment_type }}</li>
									 	<li>Transection ID:  {{ $track->payment_id }}</li>
									 	<li>Balance  ID:  {{ $track->blnc_transection }}</li>
									    <li>Subtotal: {{ $track->subtotal }} $</li>
									 	<li>Shipping: {{ $track->shipping }} $</li>
									 	<li>Total: {{ $track->total }} $</li>
									 	<li>Month: {{ $track->month }}</li>
									 	<li>Date: {{ $track->date }}</li>
									 </ul>
							     </div> --}}
							     	<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td class="text-left">Oder</td>
							<td class="text-left">Status</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left">Payment Type:</td>
							<td class="text-left">{{ $track->payment_type }}</td>
						</tr>
						<tr>
							<td class="text-left">Transection ID:</td>
							<td class="text-left">{{ $track->blnc_transection }}</td>
						</tr>
						<tr>
							<td class="text-left">Balance  ID:</td>
							<td class="text-left">{{ $track->blnc_transection }}</td>
						</tr>
						<tr>
							<td class="text-left">Subtotal :</td>
							<td class="text-left">{{ $track->shipping }}</td>
						</tr>
						<tr>
							<td class="text-left">Total  :</td>
							<td class="text-left">{{ $track->total }}</td>
						</tr>
						<tr>
							<td class="text-left">Month  :</td>
							<td class="text-left">{{ $track->month }}</td>
						</tr>
						<tr>
							<td class="text-left">Date  :</td>
							<td class="text-left">{{ $track->date }}</td>
						</tr>
					</tbody>
				</table>
				<div class="buttons clearfix">
					<div class="pull-right"><a class="btn btn-primary" href="{{ url('/') }}">Continue Shopping</a>
					</div>
				</div>

						</div>
					</div>


				</div>
			</div>
		</div>
@endsection
