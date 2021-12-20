
@extends('layouts.admin.app')

@section('content')

<main>
   <div class="container-fluid site-width">
   <!-- START: Breadcrumbs-->
   <div class="row ">
       <div class="col-12  align-self-center">
           <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
               <div class="w-sm-100 mr-auto"><h4 class="mb-0">subscribe Manage</h4></div>

               <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                   <li class="breadcrumb-item">Home</li>
                   <li class="breadcrumb-item">Category</li>
                   <li class="breadcrumb-item active"><a href="#">Create Category</a></li>
               </ol>
           </div>
       </div>
   </div>
   <!-- END: Breadcrumbs-->


   <div class="row">
       <div class="col-12 mt-3">
           <div class="card">
               <div class="card-header  justify-content-between align-items-center">                               
                   <h4 class="card-title">Category Data</h4> 
                    <div class="pull-right">
                       
                    </div>
               </div>
               
               <div class="card-body">
                   <div class="table-responsive">
                       <table  id="categoryTable" class="display table dataTable table-striped table-bordered" >
                           <thead>
                               <tr>
                                  <th class="wd-15p">Payment Type</th>
                                  <th class="wd-15p">Transection ID</th>
                                  <th class="wd-15p">Subtotal</th>
                                  <th class="wd-20p">Shipping</th>
                                  <th class="wd-20p">Total</th>
                                   <th class="wd-20p">Date</th>
                                   <th class="wd-20p">Status</th>
                                   <th class="wd-20p">Action</th>
                               </tr>
                           </thead>
                           <tbody>
                            @foreach($order as $row)
                              <tr>
                                <td>{{ $row->payment_type }}</td>
                                <td>{{ $row->blnc_transection }}</td>
                                <td>{{ $row->subtotal }} </td>
                                <td>{{ $row->shipping }} </td>
                                <td>{{ $row->total }} </td>
                                <td>{{ $row->date }} </td>
                                <td>
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
                            
                                <td>
                                
                                  <a href="{{ URL::to('admin/view/order/'.$row->id) }}" class="btn btn-info" data-toggle="tooltip" title="View"><i class="fa fa-pencil"></i>View</a>
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

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
                    .width(50)
                    .height(50);
            };
            reader.readAsDataURL(input.files[0]);
        }
     }
  </script>
  <script>  
    $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
           swal({
             title: "Are you Want to delete?",
             text: "Once Delete, This will be Permanently Delete!",
             icon: "warning",
             buttons: true,
             dangerMode: true,
           })
           .then((willDelete) => {
             if (willDelete) {
                  window.location.href = link;
             } else {
               swal("Safe Data!");
             }
           });
       });
</script>

@endsection