@extends('layouts.admin.app')

@section('content')
<main>
   <div class="container-fluid site-width">
   <!-- START: Breadcrumbs-->
   <div class="row ">
       <div class="col-12  align-self-center">
           <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
               <div class="w-sm-100 mr-auto"><h4 class="mb-0">Order Details </h4></div>

               <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                   <li class="breadcrumb-item">Home</li>
                   <li class="breadcrumb-item">Category</li>
                   <li class="breadcrumb-item active"><a href="#">Create Category</a></li>
               </ol>
           </div>
       </div>
   </div>

    <div class="sl-mainpanel">
      
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
 
         
         <div class="row">
         	<div class="col-md-6">
         	    <div class="card">
         	        <div class="card-header"><strong>Order</strong> Details</div>

         	        <div class="card-body">
         	    	<table class="table">
         	    		 <tr>
         	    		 	<th>Name: </th>
         	    		 	<th>{{ $order->name }}</th>
         	    		 </tr>
         	    		{{--  <tr>
         	    		 	<th>Phone: </th>
         	    		 	<th>{{ $order->phone }}</th>
         	    		 </tr> --}}
         	    		 <tr>
         	    		 	<th>Payment: </th>
         	    		 	<th>{{ $order->payment_type }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Payment ID: </th>
         	    		 	<th>{{ $order->payment_id }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Total :</th>
         	    		 	<th>{{ $order->total }} $</th>
         	    		 </tr>
         	    		  <tr>
         	    		 	<th>Month : </th>
         	    		 	<th>
         	    		 		  {{ $order->month }}
         	    		 	</th>
         	    		 </tr>
         	    		  <tr>
         	    		 	<th>Date: </th>
         	    		 	<th>{{ $order->date }}</th>
         	    		 </tr>
         	    	</table>  

         	        </div>
         	    </div>
         	</div>
         	<div class="col-md-6">
         	    <div class="card">
         	        <div class="card-header"><strong>Shipping</strong> Details</div>

         	        <div class="card-body">
         	    	<table class="table">
         	    		 <tr>
         	    		 	<th>Firstname: </th>
         	    		 	<th>{{ $shipping->firstname }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Lastname: </th>
         	    		 	<th>{{ $shipping->lastname }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Email: </th>
         	    		 	<th>{{ $shipping->email }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Telephone: </th>
         	    		 	<th>{{ $shipping->telephone }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Fax :</th>
         	    		 	<th>{{ $shipping->fax }}</th>
         	    		 </tr>
                       <tr>
                        <th>Company :</th>
                        <th>{{ $shipping->company }}</th>
                      </tr>
                       <tr>
                        <th>Address 1 :</th>
                        <th>{{ $shipping->address_1 }}</th>
                      </tr> 

                      <tr>
                        <th>Address 2 :</th>
                        <th>{{ $shipping->address_2 }}</th>
                      </tr>
                     <tr>
                        <th>City :</th>
                        <th>{{ $shipping->city }}</th>
                      </tr>
                      <tr>
                        <th>PostCode :</th>
                        <th>{{ $shipping->postcode }}</th>
                      </tr>
                      <tr>
                        <th>PostCode :</th>
                        <th>{{ $shipping->payment }}</th>
                      </tr>
                      <tr>
                        <th>Comments :</th>
                        <th>{{ $shipping->comments }}</th>
                      </tr>
                      <tr>
                        <th>Country code :</th>
                        <th>{{ $shipping->country_id }}</th>
                      </tr>



         	    		  <tr>
         	    		 	<th>Status : </th>
         	    		 	<th>
         	    		 		    @if($order->status == 0)
         	    		 		     <span class="badge badge-warning">Pending</span>
         	    		 		    @elseif($order->status == 1)
         	    		 		    <span class="badge badge-info">Payment Accept</span>
         	    		 		    @elseif($order->status == 2) 
         	    		 		     <span class="badge badge-info">Progress </span>
         	    		 		     @elseif($order->status == 3)  
         	    		 		     <span class="badge badge-success">Delevered </span>
         	    		 		     @else
         	    		 		     <span class="badge badge-danger">Cancel </span>
         	    		 		     @endif
         	    		 	</th>
         	    		 </tr>
         	    		  
         	    	</table>  

         	        </div>
         	    </div>
         	</div>
         </div>
         <br>
         <br>
         
          
         <div class="row"  style="padding: 50px;">
         	<div class="card pd-20 pd-sm-40 col-lg-12">
         	  <h6 class="card-body-title" style="text-align: center;">Product Details </h6>
         	  <br>
         	  <div class="table-wrapper">
         	    <table  class="table display responsive nowrap">
         	      <thead>
         	        <tr>
         	          <th class="wd-15p">Service ID</th>
         	          <th class="wd-15p">Service Name</th>
         	          <th class="wd-15p">Image</th>
         	          <th class="wd-15p">Approximate Area</th>
         	          <th class="wd-15p">Quantity</th>
         	          <th class="wd-15p">Unit Price</th>
         	          <th class="wd-20p">Total</th>
         	        </tr>
         	      </thead>
         	      <tbody>
         	        @foreach($details as $row)
         	        <tr>
         	          <td>{{ $row->product_code }}</td>
         	          <td>{{ $row->product_name }}</td>
         	          <td><img src="{{ URL::to($row->image_one) }}" height="50px;" width="50px;"></td>
         	          <td>{{ $row->approximate }}</td>
         	      
         	          <td>{{ $row->quantity }}</td>
         	          <td>
         	          	{{ $row->singleprice }} $
         	          	
         	          </td>
         	          <td>
         	          {{ $row->totalprice }} $
         	          	
         	          </td>
         	         
         	        </tr>
         	        @endforeach
         	      </tbody>
         	    </table>
         	  </div><!-- table-wrapper -->
         	</div><!-- card -->
            <div style="float: right; padding:20px; text-align: center !important; display: flex;">
             @if($order->status == 0)
              <a href="{{ url('admin/payment/accept/'.$order->id) }}" style="float: right;" class="btn btn-info">Payment Accept</a>
              <br>
              <a href="{{ url('admin/payment/cancel/'.$order->id) }}"style="padding-left: 20px;" class="btn btn-danger" id="delete">Cancel Order</a>
             @elseif($order->status == 1)
                 <a href="{{ url('admin/delevery/progress/'.$order->id) }}" class="btn btn-info">Delevery Progress</a><br>
                 <strong> Payment Already Checked and pass here for delevery request</strong>
             @elseif($order->status == 2)
                  <a href="{{ url('admin/delevery/done/'.$order->id) }}" class="btn btn-success">Delevered Done</a><br>
                  <strong> Payment Already done your product are handover successfully</strong>
             @elseif($order->status == 4)
               <strong class="text-danger">This order are not valid its canceled</strong>
               @else
                <strong class="text-success">This product are succesfully delevered</strong>
            @endif
            </div>
         </div>
       	


                 
      </div>
    </div>

</div>
</main>



@endsection
