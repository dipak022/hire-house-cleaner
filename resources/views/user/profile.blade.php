@extends('layouts.user.app')

@section('content')
  <!-- Main Container  -->
  @include('layouts.user.manubar')
  </header>
@php 
  $order=DB::table('orders')->where('user_id',Auth::id())->orderBy('id','DESC')->limit(10)->get();
@endphp
 

      <!-- Main Container  -->
  <div class="main-container container">
    <ul class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i></a></li>
      <li><a href="#">Order History</a></li>
    </ul>
    
    <div class="row">
      <!--Middle Part Start-->
      <div id="content" class="col-sm-9">
        <h2 class="title">Order History</h2>
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                {{-- <td class="text-center">Image</td>
                <td class="text-left">Product Name</td>
                <td class="text-center">Order ID</td>
                <td class="text-center">Qty</td>
                <td class="text-center">Status</td>
                <td class="text-center">Date Added</td>
                <td class="text-right">Total</td>
                <td></td> --}}
                <td class="text-center">PaymentType</td>
                <td class="text-center">Order ID</td>
                <td class="text-left">Amount</td>
                <td class="text-center">Date</td>
                <td class="text-center">Status</td>
                <td class="text-center">Status Code</td>
                <td class="text-right">Action</td>
                <td></td>

                
              </tr>
            </thead>
            <tbody>
             {{--  @foreach($order as $row)
              <tr>
                <td class="text-center">
                  <a href="product.html"><img width="85" class="img-thumbnail" title="Aspire Ultrabook Laptop" alt="Aspire Ultrabook Laptop" src="{{ asset($row->image_one) }}">
                  </a>
                </td>
                <td class="text-left"><a href="product.html">Aspire Ultrabook Laptop</a>
                </td>
                <td class="text-center">#214521</td>
                <td class="text-center">1</td>
                <td class="text-center">Shipped</td>
                <td class="text-center">21/06/2016</td>
                <td class="text-right">$228.00</td>
                <td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="order-information.html" data-original-title="View"><i class="fa fa-eye"></i></a>
                </td>
              </tr>
            @endforeach --}}
            @foreach($order as $row)
               <tr>
                 <td class="text-center">{{ $row->payment_type }}</td>
                 <td class="text-center">{{ $row->payment_id }}</td>
                 <td class="text-center">{{ $row->total }} $</td>
                 <td class="text-center">{{ $row->date }}</td>
                 <td class="text-center">
                  @if($row->status == 0)
                   <span class="badge badge-warning">Pending</span>
                  @elseif($row->status == 1)
                  <span class="badge badge-info">Payment Accept</span>
                  @elseif($row->status == 2) 
                   <span class="badge badge-info">Progress </span>
                   @elseif($row->status == 3)  
                   <span class="badge badge-success">Delevered </span>
                   @else
                   <span class="badge badge-danger">Cancel </span>
                   @endif
                 </td>
                 <td class="text-center">{{ $row->status_code }}</td>
                 <td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="order-information.html" data-original-title="View"><i class="fa fa-eye"></i></a>
                </td>
               </tr>
             @endforeach
            </tbody>
          </table>
        </div>

      </div>
      <!--Middle Part End-->
      <!--Right Part Start -->
      <aside class="col-sm-3 hidden-xs" id="column-right" style="text-align: center;">
        <h2  class="subtitle">Account Information</h2>
<div class="list-group">
   <div class="col-12" style="text-align: center;">
                 <div class="card" >
                  <img src="{{ asset('avatar1.png') }}" class="card-img-top" style="height: 90px; width: 90px;" >
                  <div class="card-body">
                    <h5 class="card-title text-center">{{ Auth::user()->name }}</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href=" "> Password Change </a></li>
                    <li class="list-group-item"><a href=""> Edit Profile </a></li>
                    <li class="list-group-item"><a href="{{ route('success.orderlist') }}"> Return Order </a></li>
                  </ul>
                  <div class="card-body">
                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                  </div>
                </div>
               </div>
</div>      </aside>
      <!--Right Part End -->
    </div>
  </div>
  <!-- //Main Container -->



@endsection


