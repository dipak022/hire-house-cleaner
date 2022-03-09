@php
	$settings=DB::table('settings')->where('id',1)->first();
@endphp
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.smartaddons.com/templates/html/market/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Mar 2021 10:10:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    
    <!-- Basic page needs
	============================================ -->
	<title>Home Somadhan</title>
	<meta name="csrf" value="{{ csrf_token() }}">
	<meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->
   
    <link rel="shortcut icon" href="ico/favicon.png">
	
	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset('user/')}}/css/bootstrap/css/bootstrap.min.css">
	<link href="{{ asset('user/')}}/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{ asset('user/')}}/js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/css/themecss/lib.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/js/lightslider/lightslider.css" rel="stylesheet">
	
	<!-- Theme CSS
	============================================ -->
   	<link href="{{ asset('user/')}}/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="{{ asset('user/')}}/css/themecss/so-categories.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/css/themecss/so-newletter-popup.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/css/themecss/just_purchased_notification.css" rel=stylesheet>

	<link href="{{ asset('user/')}}/css/footer1.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/css/header1.css" rel="stylesheet">
	<link id="color_scheme" href="{{ asset('user/')}}/css/theme.css" rel="stylesheet">
	<link id="color_scheme" href="{{ asset('user/')}}/css/theme.css" rel="stylesheet">
	<link href="{{ asset('user/')}}/css/responsive.css" rel="stylesheet">
	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">



	{{--  new css   --}}

	
	<link rel="stylesheet" href="{{ asset('user/csss/new.css') }}">
	<link rel="stylesheet" href="{{ asset('user/csss/revision.css') }}">
	
	
</head>


	


	
   


<body class="">
		


    <div id="wrapper" class="wrapper-full banners-effect-7">
	
	

	<!-- Header Container  -->
	<header id="header" class=" variantleft type_1">
<!-- Header Top -->
<div class="header-top ">
	<div class="container">
		<div class="row">
			<div class="header-top-left form-inline col-sm-6 col-xs-12 ">
			

				
			</div>
			<div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-12 ">
				<h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
				<div class="tabBlock" id="TabBlock-1">
					<ul class="top-link list-inline">
						@guest
						<li class="account" id="my_account">
							<a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span >My Account</span> <span class="fa fa-angle-down"></span></a>
							<ul class="dropdown-menu ">
								<li><a href="{{ route('register') }}"><i class="fa fa-user"></i> Register</a></li>
								<li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
							</ul>
						</li>
						@else
						<li class="account" id="my_account">
							<a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span >My Profile</span> <span class="fa fa-angle-down"></span></a>
							<ul class="dropdown-menu ">
								<li><a href="{{ route('profile') }}"><i class="fa fa-user"></i> Profile</a></li>
								<li><a href="{{ route('user.logout') }}"><i class="fa fa-sign-out" ></i> Logout</a>
                                 
								</li>
							</ul>
						</li>
						@php 
                            $wishlist=DB::table('wishlist')->where('user_id',Auth::id())->get();
                         @endphp
						<li class="wishlist"><a href="{{ route('user.wishlist') }}" id="wishlist-total" class="top-link-wishlist" title="Wish List (2)"><span>Wish List ({{ count($wishlist) }})</span></a></li>
						<li class="checkout"><a href="{{ route('user.checkout') }}" class="top-link-checkout" title="Checkout"><span >Checkout</span></a></li>
						<li class="login"><a href="#"title="My Order Tracking" data-toggle="modal" data-target="#exampleModal">
                             
							<span >My Order Trackingt</span></a>
							
						 </li>
						@endguest
						

						  
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Header Top -->
@php
 $category=DB::table('category')->get();	
@endphp
<!-- Header center -->
<div class="header-center left">
	<div class="container">
		<div class="row">
			<!-- Logo -->
			<div class="navbar-logo col-md-3 col-sm-12 col-xs-12">
				<a href="/"><img src="{{ asset($settings->logo)}}" style="height:80px;width: 120px;" /></a>
			</div>
			<!-- //end Logo -->

			

			<!-- Search -->
			<div id="sosearchpro" class="col-sm-7 search-pro">
				<form action="{{ route('product.search') }}"method="post">
					@csrf
					<div id="search0" class="search input-group">
						<div class="select_category filter_type icon-select">
							<select class="no-border" name="category_id">
								<option selected disabled>All Categories</option>
								@foreach($category as $row)
								<option value="78">{{ $row->categoty_name }}</option>
								@endforeach
								
							</select>
						</div>

						<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
						<span class="input-group-btn">
						<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
						</span>
					</div>
					<input type="hidden" name="route" value="product/search" />
				</form>
			</div>
			<!-- //end Search -->

			<!-- Secondary menu -->
			<div class="col-md-2 col-sm-5 col-xs-12 shopping_cart pull-right">
				<!--cart-->
				<div id="cart" class=" btn-group btn-shopping-cart">
					<a href="{{ route('show.cart') }}" class="top_cart">
						<div class="shopcart">
							<span class="handle pull-left"></span>
							<span class="title">My cart</span>
							<p class="text-shopping-cart cart-total-full">{{ Cart::count() }} item(s) - ট{{ Cart::Subtotal() }} </p>
						</div>
					</a>

				</div>
				<!--//cart-->
			</div>
		</div>

	</div>
</div>
<!-- //Header center -->


{{-- @yield('slider') --}}


@yield('content')

	

<script type="text/javascript"><!--
	var $typeheader = 'header-home1';
	//-->
</script>

@php  
  $category=DB::table('category')->get();
@endphp
	<!-- Footer Container -->
	<footer class="footer-container type_footer1">
		<!-- Footer Top Container -->
		<section class="footer-top">
			<div class="container content">
				<div class="row">
					<div class="col-sm-6 col-md-9 box-information">
						<div class="module clearfix">
							<h3 class="modtitle">Display All Category and Subcategory</h3>
							<div class="modcontent">
							<div class="col-sm-12 collapsed-block footer-links">
						<div class="module clearfix">
							<div class="modcontent">
								<hr class="footer-lines">
								<div class="footer-directory-title">
									
									<ul class="footer-directory">
										@foreach($category as $cat)
										<li>
											
											<h4>{{ $cat->categoty_name }}:</h4>
											@php  
											$subcategory=DB::table('subcategory')->where('category_id',$cat->id)->get();
										    @endphp
											@foreach($subcategory as $row)
											
											<a href="{{ url('products/'.$row->id) }}">{{$row->subcategory_name}}</a> |
											@endforeach
										</li>
										@endforeach
										
										
										
									</ul>
								</div>
							</div>
						</div>
					</div>
							</div>
						</div>
					</div>

					

					<div class="col-sm-6 col-md-3 collapsed-block ">
						<div class="module clearfix">
							<h3 class="modtitle">Contact Us	</h3>
							<div class="modcontent">
								<ul class="contact-address">
									<li><span class="fa fa-map-marker"></span> {{ $settings->address }}</li>
									<li><span class="fa fa-envelope-o"></span> Email: <a href="#"> {{ $settings->email }}</a></li>
									<li><span class="fa fa-phone">&nbsp;</span> Phone 1: {{ $settings->phone }} <br>Phone 2: {{ $settings->phone_optional }}</li>
								</ul>
							</div>
						</div>
					</div>

				
				</div>
			</div>
		</section>
		<!-- /Footer Top Container -->
		
		<!-- Footer Bottom Container -->
		<div class="footer-bottom-block ">
			<div class=" container">
				<div class="row">
					<div class="col-sm-5 copyright-text"> © 2021  HASIBUL HASAN SHOHAN. All Rights Reserved. </div>
					<div class="col-sm-7">
						<div class="block-payment text-right"><img src="{{ asset('user/')}}/image/demo/content/payment.png" alt="payment" title="payment" ></div>
					</div>
					<!--Back To Top-->
					<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>

				</div>
			</div>
		</div>
		<!-- /Footer Bottom Container -->
		
		
	</footer>
	<!-- //end Footer Container -->

    </div>
	<!-- Social widgets -->
	<section class="social-widgets visible-lg">
	<ul class="items">
		<li class="facebook"> <a href="{{ $settings->facebook }}" class="tab-icon"><span class="fa fa-facebook"></span></a>
			{{-- <div class="tab-content">
				<div class="title">
					<h5>FACEBOOK</h5>
				</div>
				<div class="loading">
					<img src="{{ asset('user/')}}/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
				</div>
			</div> --}}
		</li>
		<li class="twitter"> <a href="{{ $settings->twitter }}" class="tab-icon"><span class="fa fa-twitter"></span></a>
			{{-- <div class="tab-content">
				<div class="title">
					<h5>TWITTER FEEDS</h5> 
				</div>
				<div class="loading">
					<img src="{{ asset('user/')}}/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
				</div>
			</div> --}}
		</li>
		<li class="youtube"> <a href="{{ $settings->youtoube }}" class="tab-icon"><span class="fa fa-youtube"></span></a>
			{{-- <div class="tab-content">
				<div class="title">
					<h5>YouTube</h5>
				</div>
				<div class="loading"> <img src="{{ asset('user/')}}/image/theme/lazy-loader.gif" class="ajaxloader" alt="loader"></div>
			</div> --}}
		</li>
	</ul>
</section>	<!-- End Social widgets -->
 <!-- Order Tracking Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your Status Code</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="post" action="{{ route('order.tracking') }}">
             @csrf
             <div class="form-row">
                  <label>Status Code</label>
                   <input type="text" name="code" required="" class="form-control" placeholder="Your Order Status Code">
             </div><br>
             <button class="btn btn-primary" type="submit">Track Now</button>                 
         </form>
      </div>
    </div>
  </div>
</div>
	

<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="{{ asset('user/')}}/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/themejs/libs.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/modernizr/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/bootstrap-notify.min.js"></script>

<!-- Theme files
============================================ -->
<script type="text/javascript" src="{{ asset('user/')}}/js/themejs/toppanel.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/themejs/application.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/themejs/homepage.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="{{ asset('user/')}}/js/themejs/addtocart.js"></script>	
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



 <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
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

<!-- Mirrored from demo.smartaddons.com/templates/html/market/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Mar 2021 10:10:48 GMT -->
</html>
