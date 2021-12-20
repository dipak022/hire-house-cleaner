
@extends('layouts.admin.app')

@section('content')

<main>
   <div class="container-fluid site-width">
   <!-- START: Breadcrumbs-->
   <div class="row ">
       <div class="col-12  align-self-center">
           <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
               <div class="w-sm-100 mr-auto"><h4 class="mb-0">Service Manage</h4></div>

               <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                   <li class="breadcrumb-item">Home</li>
                   <li class="breadcrumb-item">Service</li>
                   <li class="breadcrumb-item active"><a href="#">Create Service</a></li>
               </ol>
           </div>
       </div>
   </div>
   <!-- END: Breadcrumbs-->

   <!-- START: Card Data-->
   <div class="pull-right">
     <a href="{{route('product')}}"class="bg-primary py-2 px-2 rounded ml-auto text-white w-100 text-center" >
                       <i class="icon-plus align-middle text-white"></i> <span class="d-none d-xl-inline-block">Add New Service </span>
                   </a>
   </div>
   <div class="row">
       <div class="col-12 mt-3">
           <div class="card">
               <div class="card-header  justify-content-between align-items-center">                               
                   <h4 class="card-title">Service Data</h4> 
                    <div class="pull-right">
                       
                    </div>
               </div>
               
               <div class="card-body">
                   <div class="table-responsive">
                       <table  id="categoryTable" class="display table dataTable table-striped table-bordered" >
                           <thead>
                               <tr>
                               

                                   <th>Service Image</th>
                                   <th>Service Image</th>
                                   <th>Service Image</th>
                                   <th>Service Image</th>
                                   <th>Service Name</th>
                                   <th>Service Code</th>
                                 
                                   <th>Service Category</th>
                                   <th>Service Subategory</th>
                           
                                   <th>Approximate Area</th>
                                   <th>Approximate Area</th>
                                   <th>Service Price</th>
                                   <th>Discount Price</th>
                             
                                 
                                   <th>Action</th>
                               </tr>
                           </thead>
                           <tbody>
                           @foreach($productall as $row)
                              
                                    
                                   
                                   <td>
                                    <img src="{{asset($row->image_one)}}" style="height: 60px; width:60px;">     
                                   </td> 
                                   <td>
                                    <img src="{{asset($row->image_two)}}" style="height: 60px; width:60px;">     
                                   </td> 
                                   <td>
                                    <img src="{{asset($row->image_three)}}" style="height: 60px; width:60px;">     
                                   </td> 
                                   <td>
                                    <img src="{{asset($row->image_four)}}" style="height: 60px; width:60px;">     
                                   </td> 
                                   <td>{{$row->product_name}}</td> 
                                   <td>{{$row->product_code}}</td> 
                                  
                                   <td>{{$row->categoty_name}}</td> 
                                   <td>{{$row->subcategory_name}}</td> 
                                    
                                  
                                   <td>{{$row->approximate}}</td> 
                                   <td>{{$row->others}}</td> 
                                   
                                   <td>{{$row->selling_price}}</td> 
                                   <td>{{$row->discount_price}}</td> 
                                 
                                   
                                   {{--  @if($featured_product==1)
                                   <td>{{$row->featured_product}}</td> 
                                   @else
                                   @endif
                                   @if($new_product==1)
                                   @if($product->main_slidder==1)
                                    <span class="badge badge-success">Active</span> |
                                    @else
                                    <span class="badge badge-danger">Inactive</span> |
                                    @endif 
                                   @else
                                   @endif
                                   @if($buyone_getone==1)
                                   <td>{{$row->buyone_getone}}</td>
                                   @else
                                   @endif
                                   @if($status==1)
                                   <td>{{$row->status}}</td> 
                                   @else
                                   @endif  --}}
                                   
                                   <td>
                                     
                                       <a href="{{ url('service/edit/item/'.$row->id) }}" class="btn btn-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i>Edit</a>  
                                     <a href="{{ url('product/delete/item/'.$row->id) }}"  class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash">Delete</i></a>
                                   </td>
                               </tr>
                           @endforeach                          
                              
                           </tbody>
                         
                       </table>
                   </div>
               </div>
           </div> 

       </div>                  
   </div>
   <!-- END: Card DATA-->
</div>
</main>




@endsection