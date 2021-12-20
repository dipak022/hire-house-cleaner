@php  
  $category=DB::table('category')->get();
  
@endphp
<!-- Header Bottom -->
<div class="header-bottom">
	<div class="container">
		<div class="row">
			
			<div class="sidebar-menu col-md-3 col-sm-6 col-xs-12 ">
				<div class="responsive so-megamenu ">
					<div class="so-vertical-menu no-gutter ">
						<nav class="navbar-default">	
							
							<div class="container-megamenu vertical open">
								<div id="menuHeading">
									<div class="megamenuToogle-wrapper">
										<div class="megamenuToogle-pattern">
											<div class="container">
												<div>
													<span></span>
													<span></span>
													<span></span>
												</div>
												All Categories							
												<i class="fa pull-right arrow-circle fa-chevron-circle-up"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="navbar-header">
									<button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle fa fa-list-alt">
										
									</button>
									All Categories		
								</div>
								<div class="vertical-wrapper" >
									<span id="remove-verticalmenu" class="fa fa-times"></span>
									<div class="megamenu-pattern">
										<div class="container">
											<ul class="megamenu">
												@foreach($category as $cat)
													<li class="item-vertical css-menu with-sub-menu hover">
														<p class="close-menu"></p>
														<a href="#" class="clearfix">
															<img src="{{ asset($cat->logo)}}"style="height: 20px; width:20px;" alt="icon">
															<span>{{$cat->categoty_name}}</span>
															<b class="caret"></b>
														</a>
														<div class="sub-menu" data-subwidth="30" style="width: 270px; display: none; right: 0px;">
															<div class="content" style="display: none;">
																<div class="row">
																	<div class="col-sm-12">
																		<div class="row">
																			<div class="col-sm-12 hover-menu">
																				<div class="menu">
																					<ul>
																						@php  
																						$subcategory=DB::table('subcategory')->where('category_id',$cat->id)->get();
																					 @endphp
																						@foreach($subcategory as $row)
																						@if($subcategory!=null)	
																					 <li>
																							<a href="{{ url('products/'.$row->id) }}" class="main-menu">{{$row->subcategory_name}}</a>
																						</li>
																						@else
																						@endif
																					@endforeach

																				

																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													@endforeach
												</ul>
											</div>
										</div>
									</div>
								</div>
							</nav>
					</div>
				</div>

			</div>
			
			<!-- Main menu -->
			<div class="megamenu-hori header-bottom-right  col-md-9 col-sm-6 col-xs-12 ">
				<div class="responsive so-megamenu ">
	<nav class="navbar-default">
		<div class=" container-megamenu  horizontal">
			<div class="navbar-header">
				<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				Navigation		
			</div>
			
			<div class="megamenu-wrapper">
				<span id="remove-megamenu" class="fa fa-times"></span>
				<div class="megamenu-pattern">
					<div class="container">
						<ul class="megamenu " data-transition="slide" data-animationtime="250">
							<li class="home hover">
								<a href="/">Home</a>
								
							</li>
							<li class="with-sub-menu hover">
								<p class="close-menu"></p>
								<a href="#" class="clearfix">
									<strong>Services</strong>
									<img class="label-hot" src="{{ asset('user/')}}/image/theme/icons/hot-icon.png" alt="icon items">
									<b class="caret"></b>
								</a>
								<div class="sub-menu" style="width: 40%; ">
									<div class="content" >
										<div class="row">
											<div class="col-md-12">
												@foreach($category as $cat)
												<ul class="row-list">
													
														@php  
														$subcategory=DB::table('subcategory')->where('category_id',$cat->id)->get();
													 @endphp
														@foreach($subcategory as $row)
														@if($subcategory!=null)	
													 <li>
															<a href="{{ url('products/'.$row->id) }}" class="main-menu">{{$row->subcategory_name}}</a>
														</li>
														@else
														@endif
													@endforeach	
												</ul>
												@endforeach
											</div>
											
										</div>
									</div>
								</div>
							</li>
						
							
							<li class="">
								<p class="close-menu"></p>
								<a href="" class="clearfix">
									<strong>About</strong>
									<span class="label"></span>
								</a>
							</li>
							
							
							<li class="">
								<p class="close-menu"></p>
								<a href="" class="clearfix">
									<strong>Contract</strong>
									<span class="label"></span>
								</a>
							</li>

							<li class="">
								<p class="close-menu"></p>
								<a href="" class="clearfix">
									<strong>FAQ</strong>
									<span class="label"></span>
								</a>
							</li>
							
							
						</ul>
						
					</div>
				</div>
			</div>
		</div>
	</nav>
</div>
