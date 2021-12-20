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

   <!-- START: Card Data-->
   <div class="pull-right">
     <a href="#"class="bg-primary py-2 px-2 rounded ml-auto text-white w-100 text-center" data-toggle="modal" data-target="#newcategory">
                       <i class="icon-plus align-middle text-white"></i> <span class="d-none d-xl-inline-block">Add New Category </span>
                   </a>
   </div>
   <div class="row">
       <div class="col-12 mt-3">
           <div class="card">
               <div class="card-header  justify-content-between align-items-center">                               
                   <h4 class="card-title">Category Data</h4> 
                    <div class="pull-right">
                       
                    </div>
               </div>
               
               <div class="card-body">
                   <div class="row">
           <div class="col-lg-4">
               <div class="card pd-20 pd-sm-40">
                <div class="table-wrapper">
                  <form method="post" action="{{ route('search.by.date') }}" >
                    @csrf
                    <div class="modal-body pd-20">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Search By Date</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="date" required="">
                      </div>
                    </div><!-- modal-body -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-info pd-x-20">submit</button>
                    </div>
                  </form>
                </div><!-- table-wrapper -->
              </div><!-- card -->
           </div>

            <div class="col-lg-4">
                <div class="card pd-20 pd-sm-40">
                <div class="table-wrapper">
                  <form method="post" action="{{ route('search.by.month') }}" >
                    @csrf
                    <div class="modal-body pd-20">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Search By Month</label>
                       <select class="form-control" name="month">
                         <option value="January">January</option>
                         <option value="February">February</option>
                         <option value="March">March</option>
                         <option value="April">April</option>
                         <option value="May">May</option>
                         <option value="June">June</option>
                         <option value="July">July</option>
                         <option value="August">August</option>
                         <option value="September">September</option>
                         <option value="October">October</option>
                         <option value="November">November</option>
                         <option value="December">December</option>
                       </select>
                      </div>
                    </div><!-- modal-body -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-info pd-x-20">submit</button>
                    </div>
                  </form>
                </div><!-- table-wrapper -->
              </div><!-- card -->
           </div>

            <div class="col-lg-4">
                <div class="card pd-20 pd-sm-40">
                <div class="table-wrapper">
                  <form method="post" action="{{ route('search.by.year') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body pd-20">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Search By Year</label>
                         <select class="form-control" name="year">
                         <option value="2018">2018</option>
                         <option value="2019">2019</option>
                         <option value="2020">2020</option>
                         <option value="2021">2021</option>
                         <option value="2022">2022</option>
                         <option value="2023">2023</option>
                         <option value="2024">2024</option>
                         <option value="2025">2025</option>
                         <option value="2026">2026</option>
                         <option value="2027">2027</option>
                         <option value="2028">2028</option>
                         <option value="2029">2029</option>
                          <option value="2030">2030</option>
                       </select>
                      </div>
                    </div><!-- modal-body -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-info pd-x-20">submit</button>
                    </div>
                  </form>
                </div><!-- table-wrapper -->
              </div><!-- card -->
           </div>
        </div> 
               </div>
           </div> 

       </div>                  
   </div>
   <!-- END: Card DATA-->
</div>
</main>
@endsection

  {{-- 
 <div class="row">
           <div class="col-lg-4">
               <div class="card pd-20 pd-sm-40">
                <div class="table-wrapper">
                  <form method="post" action="" >
                    @csrf
                    <div class="modal-body pd-20">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Search By Date</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="date" required="">
                      </div>
                    </div><!-- modal-body -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-info pd-x-20">submit</button>
                    </div>
                  </form>
                </div><!-- table-wrapper -->
              </div><!-- card -->
           </div>

            <div class="col-lg-4">
                <div class="card pd-20 pd-sm-40">
                <div class="table-wrapper">
                  <form method="post" action="" >
                    @csrf
                    <div class="modal-body pd-20">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Search By Month</label>
                       <select class="form-control" name="month">
                         <option value="January">January</option>
                         <option value="February">February</option>
                         <option value="March">March</option>
                         <option value="April">April</option>
                         <option value="May">May</option>
                         <option value="June">June</option>
                         <option value="July">July</option>
                         <option value="August">August</option>
                         <option value="September">September</option>
                         <option value="October">October</option>
                         <option value="November">November</option>
                         <option value="December">December</option>
                       </select>
                      </div>
                    </div><!-- modal-body -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-info pd-x-20">submit</button>
                    </div>
                  </form>
                </div><!-- table-wrapper -->
              </div><!-- card -->
           </div>

            <div class="col-lg-4">
                <div class="card pd-20 pd-sm-40">
                <div class="table-wrapper">
                  <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body pd-20">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Search By Year</label>
                         <select class="form-control" name="year">
                         <option value="2018">2018</option>
                         <option value="2019">2019</option>
                         <option value="2020">2020</option>
                         <option value="2021">2021</option>
                         <option value="2022">2022</option>
                         <option value="2023">2023</option>
                         <option value="2024">2024</option>
                         <option value="2025">2025</option>
                         <option value="2026">2026</option>
                         <option value="2027">2027</option>
                         <option value="2028">2028</option>
                         <option value="2029">2029</option>
                          <option value="2030">2030</option>
                       </select>
                      </div>
                    </div><!-- modal-body -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-info pd-x-20">submit</button>
                    </div>
                  </form>
                </div><!-- table-wrapper -->
              </div><!-- card -->
           </div>
        </div> --}}