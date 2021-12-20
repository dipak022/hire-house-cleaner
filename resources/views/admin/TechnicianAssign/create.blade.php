
@extends('layouts.admin.app')

@section('content')

<main>
   <div class="container-fluid site-width">
   <!-- START: Breadcrumbs-->
   <div class="row ">
       <div class="col-12  align-self-center">
           <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
               <div class="w-sm-100 mr-auto"><h4 class="mb-0">Technician Assign Manage</h4></div>

               <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                   <li class="breadcrumb-item">Home</li>
                   <li class="breadcrumb-item">Technician</li>
                   <li class="breadcrumb-item active"><a href="#">Technician Assign Manage</a></li>
               </ol>
           </div>
       </div>
   </div>
   <!-- END: Breadcrumbs-->

   <!-- START: Card Data-->
     <a href="#"class="bg-primary py-2 px-2 rounded ml-auto text-white w-100 text-center pull-right" data-toggle="modal" data-target="#newcategory">
                       <i class="icon-plus align-middle text-white"></i> <span class="d-none d-xl-inline-block">Add New Technician Assign </span>
                   </a>
   <div class="row">
       <div class="col-12 mt-3">
           <div class="card">
               <div class="card-header  justify-content-between align-items-center">                               
                   <h4 class="card-title">Subsategory Data</h4> 
                    <div class="pull-right">
                       
                    </div>
               </div>
               
               <div class="card-body">
                   <div class="table-responsive">
                       <table  id="categoryTable" class="display table dataTable table-striped table-bordered" >
                           <thead>
                               <tr>
                               
                                   <th>Technician Category</th>
                                   <th>Technician Name</th>
                                   <th>User Name</th>
                                   <th> Delivery Check</th>
                                   <th>Action</th>
                               </tr>
                           </thead>
                           <tbody>
                           @foreach($details as $rowd)
                              
                                   <td>
                                    {{$rowd->technician_category}}
                                   </td>
                                   <td>
                                    {{$rowd->assign_tec_id}}
                                   </td>
                                   <td>
                                    {{$rowd->assign_user_id}}
                                   </td>
                                   
                                   @if($rowd->assign_status == 0)
                                   <td>
                                   <span class="badge badge-warning">Delivery Panding </span>
                                   </td>
                                   @else
                                   <td>
                                   <span class="badge badge-success">Delivery Compleated </span>
                                   </td>
                                   @endif

                                   @if($rowd->assign_status == 0)
                                   <td> 
                                     <a href="{{ url('technician/assign/complate/'.$rowd->id) }}" class="btn btn-success" data-toggle="tooltip" title="Accept"><i class="fa fa-trash">Delavary</i></a>
                                     <a href="{{ url('technician/assign/delete/'.$rowd->id) }}" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash">Delete</i></a>
                                   </td>
                                   @else
                                   <td> 
                                     
                                     <a href="{{ url('technician/assign/delete/'.$rowd->id) }}" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash">Delete</i></a>
                                   </td>
                                   @endif
                                   
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
<!-- Add Category Add Model  -->
<div class="modal fade" id="newcategory">
   <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title">
                   <i class="icon-pencil"></i> Add Assign tec
               </h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <i class="icon-close"></i>
               </button>
           </div>
            <form class="add-contact-form" method="post" action="{{ route('store.technician.assign')}}"enctype="multipart/form-data">    
               @csrf
               <div class="modal-body">    
               <p>
                    <label for="exampleInputEmail1">Technician  Category </label>
                   
                     <select class="form-control" name="technician_category">
                      <option selected disabled>Technician Category Select </option>
                     @foreach($category as $r)
                     <option value="{{ $r->categoty_name }}"> {{ $r->categoty_name }} </option>
                     @endforeach
                   </select>
                </p>     
               <p>
                    <label for="exampleInputEmail1">Technician Assign Name</label>
                   
                     <select class="form-control" name="assign_tec_id">
                      <option selected disabled>Select Category</option>
                     @foreach($user as $rows)
                     <option value="{{ $rows->name }}"> {{ $rows->name }} </option>
                     @endforeach
                   </select>
                </p>

                <p>
                    <label for="exampleInputEmail1">User Assign Name</label>
                   
                     <select class="form-control" name="assign_user_id">
                      <option selected disabled>Select Category</option>
                     @foreach($order as $row)
                     <option value="{{ $row->name }}"> {{ $row->name }} </option>
                     @endforeach
                   </select>
                </p> 

               

              
                  
                </br>
               


               </div>
               <div class="modal-footer">
                   <button type="submit" class="btn btn-primary add-todo">Add Subcategory</button>
               </div>
           </form>
       </div>
   </div>
</div>


@endsection