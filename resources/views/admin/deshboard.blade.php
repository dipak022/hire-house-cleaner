

@extends('layouts.admin.app')

 @section('details')

        <!-- START: Template CSS-->
        <link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-ui/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/simple-line-icons/css/simple-line-icons.css"> 
        <!-- END Template CSS--> 

        <!-- START: Page CSS-->
               
<link rel="stylesheet"  href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/chartjs/Chart.min.css">        
<link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/morris/morris.css">
<link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/weather-icons/css/pe-icon-set-weather.min.css">
<link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/chartjs/Chart.min.css">
<link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/starrr/starrr.css">
<link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/fontawesome/css/all.min.css">
<link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css">     
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/css/main.css">
<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
    <!-- START: Breadcrumbs-->
    <div class="row">
        <div class="col-12  align-self-center">
            <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                <div class="w-sm-100 mr-auto"><h4 class="mb-0">Dashboard</h4> <p>Welcome to liner admin panel</p></div>

                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- END: Breadcrumbs-->

    <!-- START: Card Data-->
    <div class="row">
        <div class="col-12 col-sm-6 col-xl-3 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                        <i class="icon-basket icons card-liner-icon mt-2"></i>
                        <div class='card-liner-content'>
                            <h2 class="card-liner-title">2,390</h2>
                            <h6 class="card-liner-subtitle">Today's Orders</h6>                                       
                        </div>                                
                    </div>
                    <div id="apex_today_order"></div>                               
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                        <i class="icon-user icons card-liner-icon mt-2"></i>
                        <div class='card-liner-content'>
                            <h2 class="card-liner-title">9,390</h2>
                            <h6 class="card-liner-subtitle">Today's Visitors</h6> 
                        </div>                                
                    </div>
                    <span class="bg-primary card-liner-absolute-icon text-white card-liner-small-tip">+4.8%</span>
                    <div id="apex_today_visitors"></div> 
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                        <i class="icon-bag icons card-liner-icon mt-2"></i>
                        <div class='card-liner-content'>
                            <h2 class="card-liner-title">$4,390</h2>
                            <h6 class="card-liner-subtitle">Today's Sale</h6> 
                        </div>                                
                    </div>
                    <div id="apex_today_sale"></div> 
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                        <span class="card-liner-icon mt-1">$</span>
                        <div class='card-liner-content'>
                            <h2 class="card-liner-title">$4,390</h2>
                            <h6 class="card-liner-subtitle">Total Profit</h6> 
                        </div>                                
                    </div>
                    <div id="apex_today_profit"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-8  mt-3">
            <div class="card">                           
                <div class="card-content">
                    <div class="card-body">
                        <div id="apex_mixed_chart" class="height-500"></div>
                    </div>
                </div>
            </div>
        </div>     
        <div class="col-lg-4 mt-3">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">                               
                    <h6 class="card-title">New Users</h6>
                </div>
                <div class="card-content">
                    <div class="card-body p-0">
                        <ul class="list-group list-unstyled">
                            <li class="p-2 border-bottom">
                                <div class="media d-flex w-100">
                                    <a href="#"><img src="dist/images/author1.jpg" alt="" class="img-fluid ml-0 mt-2  rounded-circle" width="40"></a>
                                    <div class="media-body align-self-center pl-2">
                                        <span class="mb-0 font-w-600">Jonathan</span><br>
                                        <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                                    
                                    </div>
                                    <div class="ml-auto my-auto">
                                        <a href="#" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Mark as unread"><i class="icon-envelope"></i></a> 
                                        <a href="#" data-toggle="tooltip" title="" data-placement="bottom" class="ml-2" data-original-title="Save as draft"><i class="icon-pencil"></i></a> 
                                        <a href="#" data-toggle="tooltip" title="" data-placement="bottom" class="ml-2" data-original-title="Delete Email"><i class="icon-trash"></i></a>
                                    </div>
                                </div> 
                            </li>
                            <li class="p-2 border-bottom">
                                <div class="media d-flex w-100">
                                    <a href="#"><img src="dist/images/author2.jpg" alt="" class="img-fluid ml-0 mt-2  rounded-circle" width="40"></a>
                                    <div class="media-body align-self-center pl-2">
                                        <span class="mb-0 font-w-600">kelvin</span><br>
                                        <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                                    
                                    </div>
                                    <div class="ml-auto my-auto">
                                        <a href="#" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Mark as unread"><i class="icon-envelope"></i></a> 
                                        <a href="#" data-toggle="tooltip" title="" data-placement="bottom" class="ml-2" data-original-title="Save as draft"><i class="icon-pencil"></i></a> 
                                        <a href="#" data-toggle="tooltip" title="" data-placement="bottom" class="ml-2" data-original-title="Delete Email"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="p-2 border-bottom">
                                <div class="media d-flex w-100">
                                    <a href="#"><img src="dist/images/author3.jpg" alt="" class="img-fluid ml-0 mt-2 rounded-circle" width="40"></a>
                                    <div class="media-body align-self-center pl-2">
                                        <span class="mb-0 font-w-600">Peter</span><br>
                                        <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                                   
                                    </div>
                                    <div class="ml-auto my-auto">
                                        <a href="#" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Mark as unread"><i class="icon-envelope"></i></a> 
                                        <a href="#" data-toggle="tooltip" title="" data-placement="bottom" class="ml-2" data-original-title="Save as draft"><i class="icon-pencil"></i></a> 
                                        <a href="#" data-toggle="tooltip" title="" data-placement="bottom" class="ml-2" data-original-title="Delete Email"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="p-2 border-bottom">
                                <div class="media d-flex w-100">
                                    <a href="#"><img src="dist/images/author9.jpg" alt="" class="img-fluid ml-0 mt-2 rounded-circle" width="40"></a>
                                    <div class="media-body align-self-center pl-2">
                                        <span class="mb-0 font-w-600">Ray Sin</span><br>
                                        <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                                 
                                    </div>
                                    <div class="ml-auto my-auto">
                                        <a href="#" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Mark as unread"><i class="icon-envelope"></i></a> 
                                        <a href="#" data-toggle="tooltip" title="" data-placement="bottom" class="ml-2" data-original-title="Save as draft"><i class="icon-pencil"></i></a> 
                                        <a href="#" data-toggle="tooltip" title="" data-placement="bottom" class="ml-2" data-original-title="Delete Email"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="p-2 border-bottom">
                                <div class="media d-flex w-100">
                                    <a href="#"><img src="dist/images/author6.jpg" alt="" class="img-fluid ml-0 mt-2 rounded-circle" width="40"></a>
                                    <div class="media-body align-self-center pl-2">
                                        <span class="mb-0 font-w-600">Abexon Dixon</span><br/>
                                        <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                              
                                    </div>

                                    <div class="ml-auto mail-tools">
                                        <a href="#" data-toggle="tooltip" title="Mark as unread" data-placement="bottom"><i class="icon-envelope"></i></a> 
                                        <a href="#" data-toggle="tooltip" title="Save as draft" data-placement="bottom" class="ml-2"><i class="icon-pencil"></i></a> 
                                        <a href="#" data-toggle="tooltip" title="Delete Email" data-placement="bottom" class="ml-2"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="p-2 border-bottom">
                                <div class="media d-flex w-100">
                                    <a href="#"><img src="dist/images/author7.jpg" alt="" class="img-fluid ml-0 mt-2 rounded-circle" width="40"></a>
                                    <div class="media-body align-self-center pl-2">
                                        <span class="mb-0 font-w-600">Nathan S. Johnson</span><br/>
                                        <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                              
                                    </div>

                                    <div class="ml-auto mail-tools">
                                        <a href="#" data-toggle="tooltip" title="Mark as unread" data-placement="bottom"><i class="icon-envelope"></i></a> 
                                        <a href="#" data-toggle="tooltip" title="Save as draft" data-placement="bottom" class="ml-2"><i class="icon-pencil"></i></a> 
                                        <a href="#" data-toggle="tooltip" title="Delete Email" data-placement="bottom" class="ml-2"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="p-2">
                                <div class="media d-flex w-100">
                                    <a href="#"><img src="dist/images/author8.jpg" alt="" class="img-fluid ml-0 mt-2 rounded-circle" width="40"></a>
                                    <div class="media-body align-self-center pl-2">
                                        <span class="mb-0 font-w-600">Roger L. Arteaga</span><br/>
                                        <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                               
                                    </div>
                                    <div class="ml-auto mail-tools">
                                        <a href="#" data-toggle="tooltip" title="Mark as unread" data-placement="bottom"><i class="icon-envelope"></i></a> 
                                        <a href="#" data-toggle="tooltip" title="Save as draft" data-placement="bottom" class="ml-2"><i class="icon-pencil"></i></a> 
                                        <a href="#" data-toggle="tooltip" title="Delete Email" data-placement="bottom" class="ml-2"><i class="icon-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>

       
    </div>
    <!-- END: Card DATA-->                 
</div>
</main>
<!-- END: Content-->


        <!-- START: Page JS-->
               
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/raphael/raphael.min.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/morris/morris.min.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/chartjs/Chart.min.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/starrr/starrr.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.canvaswrapper.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.colorhelpers.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.flot.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.flot.saturated.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.flot.browser.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.flot.drawSeries.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.flot.uiConstants.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.flot.legend.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.flot.pie.js"></script>        
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/chartjs/Chart.min.js"></script>  
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/apexcharts/apexcharts.min.js"></script>
<script  src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/lineprogressbar/jquery.lineProgressbar.js"></script>
<script  src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/lineprogressbar/jquery.barfiller.js"></script>

<script src="http://laravel.designstream.co.in/pick/ltr/dist/js/home.script.js"></script> 
@endsection
