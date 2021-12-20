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
      <div id="content" class="col-sm-12">
        <h2 class="title">Order History</h2>
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
              
                <td class="text-center">PaymentType</td>
                <td class="text-center">Order ID</td>
                <td class="text-center">Return Order</td>
                <td class="text-left">Amount</td>
                <td class="text-center">Date</td>
                <td class="text-center">Status</td>
                <td class="text-center">Status Code</td>
                <td class="text-right">Action</td>
                <td></td>

                
              </tr>
            </thead>
            <tbody>
         
            @foreach($order as $row)
               <tr>
                 <td class="text-center">{{ $row->payment_type }}</td>
                 <td class="text-center">{{ $row->payment_id }}</td>
                <td>
                      @if($row->return_order == 0)
                       <span class="badge badge-warning text-white">No Request</span>
                      @elseif($row->return_order == 1)
                      <span class="badge badge-info">Pending</span>
                      @elseif($row->return_order == 2) 
                       <span class="badge badge-info">Success </span>
                      @endif
                 </td>
                 <td class="text-center">{{ $row->total }} $</td>
                 <td class="text-center">{{ $row->date }}</td>
                 <td class="text-center">

                        @if($row->return_order == 0)
                         <span class="badge badge-warning">Pending</span>
                        @elseif($row->return_order == 1)
                        <span class="badge badge-info">Payment Accept</span>
                        @elseif($row->return_order == 2) 
                         <span class="badge badge-info">Progress </span>
                         @elseif($row->return_order == 3)  
                         <span class="badge badge-success">Delevered </span>
                         @else
                         <span class="badge badge-danger">Cancel </span>
                         @endif
                       </td>
                      
                 <td class="text-center">{{ $row->status_code }}</td>
                  <td class="text-center">
                        @if($row->return_order == 0)
                         <a class="btn btn-info" data-toggle="tooltip" href="{{ url('/request/return/'.$row->id) }}" data-original-title="Return Order">Return Order</a>
                         @elseif($row->return_order == 1)
                            <span class="badge badge-info">Pending</span>
                     @elseif($row->return_order == 2) 
                             <span class="badge badge-info">Success </span>
                         @endif
                       </td>
                 
               </tr>
             @endforeach
            </tbody>
          </table>
        </div>

      </div>
      <!--Middle Part End-->
      <!--Right Part Start -->
 
      <!--Right Part End -->
    </div>
  </div>
  <!-- //Main Container -->



@endsection


