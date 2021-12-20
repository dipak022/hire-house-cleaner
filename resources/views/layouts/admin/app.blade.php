
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="UTF-8">
        <title> Admin Dashboard</title>
        <meta name="csrf" value="{{ csrf_token() }}">
        
        <meta name="viewport" content="width=device-width,initial-scale=1"> 

        <link rel="stylesheet" href="{{asset('admin/')}}/dist/vendors/bootstrap/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('admin/')}}/dist/vendors/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="{{asset('admin/')}}/dist/vendors/jquery-ui/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="{{asset('admin/')}}/dist/vendors/simple-line-icons/css/simple-line-icons.css"> 
     
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="{{asset('admin/')}}/dist/css/main.css">
        <link rel="stylesheet" href="{{asset('admin/')}}/dist/vendors/datatable/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="{{asset('admin/')}}/dist/vendors/datatable/buttons/css/buttons.bootstrap4.min.css"> 

        <link rel="stylesheet" href="{{asset('admin/')}}/dist/vendors/summernote/summernote-bs4.css">
        {{-- new css --}}
    </head>
    <!-- END Head-->
    <body class="">
        <!-- START: Pre Loader-->
       
        <!-- END: Pre Loader-->
        <!-- START: Header-->
<div id="header-fix" class="header fixed-top">
    <div class="site-width">
        <nav class="navbar navbar-expand-lg  p-0">
            <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">  
                <a href="{{url('admin/dashboard')}}" class="horizontal-logo text-left">
                    Admin</span>              
                </a>                   
            </div>
            <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
                <a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
            </div>

            <form class="float-left d-none d-lg-block search-form">
                <div class="form-group mb-0 position-relative">
                    <input type="text" class="form-control border-0 rounded bg-search pl-5" placeholder="Search anything...">
                        <div class="btn-search position-absolute top-0">
                            <a href="#"><i class="h6 icon-magnifier"></i></a>
                        </div>
                        <a href="#" class="position-absolute close-button mobilesearch d-lg-none" data-toggle="dropdown" aria-expanded="false"><i class="icon-close h5"></i>                               
                        </a>

                </div>
            </form>
            <div class="navbar-right ml-auto h-100">
                <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
                    <li class="d-inline-block align-self-center  d-block d-lg-none">
                        <a href="#" class="nav-link mobilesearch" data-toggle="dropdown" aria-expanded="false"><i class="icon-magnifier h4"></i>                               
                        </a>
                    </li>                        

                    <li class="dropdown align-self-center">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="icon-reload h4"></i>
                            <span class="badge badge-default"> <span class="ring">
                                </span><span class="ring-point">
                                </span> </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right border  py-0">
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <p class="mb-0">john</p>
                                                <span class="text-success">New user registered.</span>
                                            </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <p class="mb-0">Peter</p>
                                                <span class="text-success">Server #12 overloaded.</span>
                                            </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author3.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <p class="mb-0">Bill</p>
                                                <span class="text-danger">Application error.</span>
                                            </div>
                                    </div>
                                </a>
                            </li>

                            <li><a class="dropdown-item text-center py-2" href="#"> See All Tasks <i class="icon-arrow-right pl-2 small"></i></a></li>
                        </ul>

                    </li>
                    <li class="dropdown align-self-center d-inline-block">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="icon-bell h4"></i>
                            <span class="badge badge-default"> <span class="ring">
                                </span><span class="ring-point">
                                </span> </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right border   py-0">
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle w-50">
                                            <div class="media-body">
                                                <p class="mb-0 text-success">john send a message</p>
                                                12 min ago
                                            </div>
                                    </div>
                                </a>
                            </li>
                            <li >
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <p class="mb-0 text-danger">Peter send a message</p>
                                                15 min ago
                                            </div>
                                    </div>
                                </a>
                            </li>
                            <li >
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author3.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <p class="mb-0 text-warning">Bill send a message</p>
                                                5 min ago
                                            </div>
                                    </div>
                                </a>
                            </li>

                            <li><a class="dropdown-item text-center py-2" href="#"> Read All Message <i class="icon-arrow-right pl-2 small"></i></a></li>
                        </ul>
                    </li>


                    
                    <li class="dropdown user-profile align-self-center d-inline-block">
                        <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false"> 
                            <div class="media">                                   
                                <img src="dist/images/author.jpg" alt="" class="d-flex img-fluid rounded-circle" width="29">
                            </div>
                        </a>

                        <div class="dropdown-menu border dropdown-menu-right p-0">
                           
                           
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"class="dropdown-item px-2 text-danger align-self-center d-flex">
                                <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </a>
                                   
                        </div>

                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- END: Header-->

<!-- START: Main Menu-->
<div class="sidebar">
    <div class="site-width">

        <!-- START: Menu-->
        <ul id="side-menu" class="sidebar-menu">
        <li class="dropdown">                 
            <ul>
               
            <li class="dropdown">                 
                <ul>
                    <li class="dropdown"><a href="#"><i class="icon-grid"></i>Category</a>                               
                        <ul class="sub-menu">
                            <li><a href="{{route('category')}}"><i class="icon-lock"></i> Manage Category</a></li>
                            <li><a href="{{route('subcategory')}}"><i class="icon-login"></i> Manage Subcategory</a></li>

                        </ul>                               
                    </li>
                </ul>                   
            </li>
            <li class="dropdown">                 
                <ul>
                    <li class="dropdown"><a href="#"><i class="icon-grid"></i>Coupon</a>                               
                        <ul class="sub-menu">
                            <li><a href="{{route('coupon')}}"><i class="icon-lock"></i> Manage Coupon</a></li> 
                        </ul>                               
                    </li>
                </ul>                   
            </li>
           
            <li class="dropdown">                 
                <ul>
                    <li class="dropdown"><a href="#"><i class="icon-grid"></i>Service</a>                               
                        <ul class="sub-menu">
                            <li><a href="{{route('showsproduct')}}"><i class="icon-lock"></i> Manage Service</a></li>
                            <li><a href="{{route('product')}}"><i class="icon-lock"></i> Add Service</a></li>
                        </ul>                  
                    </li>
                </ul>                   
            </li>
              <li class="dropdown">                 
                <ul>
                    <li class="dropdown"><a href="#"><i class="icon-grid"></i>Order</a>                               
                        <ul class="sub-menu">
                           
                           <li class="nav-item"><a href="{{ route('admin.neworder') }}" >New Pending Order</a></li>
                          <li><a href="{{ route('admin.accept.payment') }}">Accept Payments</a></li>
                           <li><a href="{{ route('admin.progress.payment') }}">Progress Delevery</a></li>
                            <li><a href="{{ route('admin.success.payment') }}">Delevery Success</a></li>
                          <li><a href="{{ route('admin.cancel.order') }}" class="nav-link">Cancel Orders</a></li>
                        </ul>                      
                    </li>
                </ul>                   
            </li>
             <li class="dropdown">                 
                <ul>
                    <li class="dropdown"><a href="#"><i class="icon-grid"></i>Report</a>                               
                        <ul class="sub-menu">
                            <li><a href="{{route('today.order')}}"><i class="icon-lock"></i> Today Order</a></li>
                            <li><a href="{{route('today.delevered')}}"><i class="icon-lock"></i> Today Delevered</a></li>
                            <li><a href="{{route('this.month')}}"><i class="icon-lock"></i> Month Delevered</a></li>
                            <li><a href="{{route('search.report')}}"><i class="icon-lock"></i> Search Report</a></li>


                        </ul>                      
                    </li>
                </ul>                   
            </li>
             <li class="dropdown">                 
                <ul>
                    <li class="dropdown"><a href="#"><i class="icon-grid"></i>Return Order</a>                               
                        <ul class="sub-menu">
                            <li><a href="{{ route('admin.return.request') }}"><i class="icon-lock"></i> Return Request</a></li>
                            <li><a href="{{ route('admin.all.return') }}"><i class="icon-lock"></i> All Return</a></li>
                        </ul>                      
                    </li>
                </ul>                   
            </li>
             <li class="dropdown">                 
                <ul>
                    <li class="dropdown"><a href="#"><i class="icon-grid"></i>Technician Assign</a>                               
                        <ul class="sub-menu">
                            <li><a href="{{ route('technician.assign') }}"><i class="icon-lock"></i> Technician Assign</a></li>
                            <li><a href="{{route('create.user.role')}}"><i class="icon-lock"></i> All Technician Assign</a></li>
                        </ul>                      
                    </li>
                </ul>                   
            </li>
            <li class="dropdown">                 
                <ul>
                    <li class="dropdown"><a href="#"><i class="icon-grid"></i>Technician Acount Create</a>                               
                        <ul class="sub-menu">
                            <li><a href="{{ route('create.admin') }}"><i class="icon-lock"></i> Create Technician</a></li>
                            <li><a href="{{route('create.user.role')}}"><i class="icon-lock"></i> All Technician</a></li>
                        </ul>                      
                    </li>
                </ul>                   
            </li>
            <li class="dropdown"><a href="#"><i class="icon-layers"></i>Technician Permition </a>                               
                        <ul class="sub-menu">
                            <li><a href="{{route('permition.saller')}}"><i class="icon-lock"></i> Manage Permitions</a></li>
                            <li><a href="{{route('permition')}}"><i class="icon-layers"></i> Accepect Permitions</a></li>
                           
                            
                        </ul>                               
                    </li>
                </ul>                   
            </li>

            
             <li class="dropdown">                 
                <ul>
                    <li class="dropdown"><a href="#"><i class="icon-grid"></i>Slider</a>                               
                        <ul class="sub-menu">
                            <li><a href="{{route('slider')}}"><i class="icon-lock"></i> Manage Slider</a></li>
                        </ul>                      
                    </li>
                </ul>                   
            </li>
            
            <li class="dropdown">                 
                <ul>
                    <li class="dropdown"><a href="#"><i class="icon-grid"></i>Contact Information</a>                               
                        <ul class="sub-menu">
                            <li><a href="{{route('setting')}}"><i class="icon-lock"></i> Manage Setting</a></li>
                        </ul>                      
                    </li>
                </ul>                   
            </li>
           
        </ul>
        <!-- END: Menu-->
        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
            <li class="breadcrumb-item"><a href="#">Application</a></li>
            <li class="breadcrumb-item active">Calendar</li>
        </ol>
    </div>
</div>
<!-- END: Main Menu-->

@yield('content')
@yield('details')
      
<!-- START: Main Content-->

<!-- END: Content-->

<!-- START: Footer-->
<footer class="site-footer">
      
    Copyright © 2021 Hasibul Hasan Shohan- All Rights Reserved. 
</footer>
<!-- END: Footer-->
        <!-- START: Back to top-->
        <a href="#" class="scrollup text-center"> 
            <i class="icon-arrow-up"></i>
        </a>
        <script src="{{asset('admin/')}}/dist/vendors/jquery/jquery-3.3.1.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/moment/moment.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>    
        <script src="{{asset('admin/')}}/dist/vendors/slimscroll/jquery.slimscroll.min.js"></script>
        <!-- END: Template JS-->
        <!-- START: APP JS-->
        <script src="{{asset('admin/')}}/dist/js/app.js"></script>
        <!-- END: APP JS-->
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <!-- START: Page JS-->
                <!-- END: Page JS-->

        <!-- datatable js -->
         <script src="{{asset('admin/')}}/dist/vendors/datatable/js/jquery.dataTables.min.js"></script> 
        <script src="{{asset('admin/')}}/dist/vendors/datatable/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/jszip/jszip.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/pdfmake/pdfmake.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/pdfmake/vfs_fonts.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/buttons/js/buttons.colVis.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/buttons/js/buttons.flash.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/buttons/js/buttons.html5.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/buttons/js/buttons.print.min.js"></script>              
        <script src="{{asset('admin/')}}/dist/js/datatable.script.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/summernote/summernote-bs4.js"></script>
        <script src="{{asset('admin/')}}/dist/js/summernote.script.js"></script>
        <!-- START: Template JS-->
        
        <!-- new JS-->

        <script>
            @if(Session::has('message'))
                  var type="{{Session::get('alert-type','info')}}"
      
            
                  switch(type){
                        case 'info':
                           toastr.info("{{ Session::get('message') }}");
                           break;
                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;
                  case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;
                    case 'error':
                          toastr.error("{{ Session::get('message') }}");
                          break;
                  }
            @endif
      </script>

    </body>


</html>