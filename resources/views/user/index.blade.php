@extends('layouts.user.app')
@php
$products=DB::table('products')->where('status',1)->orderBy('id','desc')->limit(200)->get(); 
$newproduct=DB::table('products')->where('status',1)->where('new_product',1)->orderBy('id','asc')->limit(200)->get();

@endphp
@php
 $slider=DB::table('slider')->first();	
@endphp
@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
@include('layouts.user.manubar')
</header>
@include('layouts.user.slider')
	<!-- Main Container  -->
	<div class="main-container container">
		
		<div class="row">
			<div id="content" class="col-sm-12">
			
			<div class="module tab-slider titleLine">
				<h3 class="modtitle">All Services</h3>
				<div id="so_listing_tabs_1" class="so-listing-tabs first-load module">
					<div class="loadeding"></div>
					<div class="ltabs-wrap">
						<div class="ltabs-tabs-container" data-rtl="yes" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="2" data-xs="1" data-margin="30">
							<!--Begin Tabs-->
							<div class="ltabs-tabs-wrap"> 
							<span class="ltabs-tab-selected">All  Product	</span> <span class="ltabs-tab-arrow">▼</span>
								<div class="item-sub-cat">
									<ul class="ltabs-tabs cf">
										<li class="ltabs-tab tab-sel" data-category-id="20" data-active-content=".items-category-20"> <span class="ltabs-tab-label">All  Product						</span> </li>
									</ul>
								</div>
							</div>
							<!-- End Tabs-->
						</div>
						<div class="ltabs-items-container">
							<!--Begin Items-->
							<div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total="10">
								<div class="ltabs-items-inner ltabs-slider ">

									@foreach($products as $row)
									<div class="ltabs-item product-layout">
										<div class="product-item-container">
											<div class="left-block">
												<div class="product-image-container second_img ">
													<img src="{{ asset($row->image_one)}}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
													<img src="{{ asset($row->image_two)}}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
												</div>
												<!--Sale Label-->
												@if($row->discount_price == NULL)
												<span class="label label-new">New</span>
												@else
												@php
                                                $amount=$row->selling_price - $row->discount_price;
                                                $discount=$amount/$row->selling_price * 100;
                                                @endphp 
												<span class="label label-sale">
												{{ intval($discount) }}%
											   </span>
												@endif
												
												
												<!--full quick view block-->
												<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="{{ url('product/popup/'.$row->id.'/'.$row->product_name) }}">  Quickview</a>
												<!--end full quick view block-->
											</div>
											<div class="right-block">
												<div class="caption">
													<h4><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}">{{ $row->product_name }}</a></h4>		
													
																		
													<div class="price">
														@if($row->discount_price == NULL)
			                                              
			                                              <span class="price-new">ট {{ $row->selling_price }}</span>
			                                            @else
			                                            @endif
			                                            @if($row->discount_price != NULL)
			                                              
			                                             <span class="price-old">ট {{ $row->selling_price }}</span>
			                                             <span class="price-new">ট {{ $row->discount_price }}</span>
			                                            @else
			                                            @endif
																 
													</div>
												</div>
											
												  <div class="button-group">
												  <form action="{{ url('cart/product/add/'.$row->id) }}" method="post">
														@csrf
													
														</br>
													
														

														<div class="form-group box-info-product">
															<div class="option quantity">
																<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
																	
																	<input class="form-control" type="hidden" name="qty"
																	value="1">
																	<input type="hidden" name="product_id" value="50">
																	<input type="hidden" name="approximate" value="{{$row->approximate}}">
																	
																</div>
															</div>
															<div class="cart">
															<button class="addToCart" type="submit" data-toggle="tooltip" title="Add to Cart" data-id="{{ $row->id }}"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
															
																<button class="addwishlist wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" data-id="{{ $row->id }}"><i class="fa fa-heart"></i></button>
															</div>
														</div>
                                                     </form>	
													
													
													
												  </div>
											</div><!-- right block -->
										</div>
									</div>
									@endforeach			
								
								</div>
								
							</div>
							
						</div>
						<!--End Items-->
						
						
					</div>
					
				</div>
			</div>
				

		 
				
				<div class="module tab-slider titleLine">
					<h3 class="modtitle">New Services </h3>
					<div id="so_listing_tabs_2" class="so-listing-tabs first-load module">
						<div class="loadeding"></div>
						<div class="ltabs-wrap">
						<div class="ltabs-tabs-container" data-rtl="yes" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="2" data-xs="1" data-margin="30">
							<!--Begin Tabs-->
							<div class="ltabs-tabs-wrap"> 
							<span class="ltabs-tab-selected"> New Product</span> <span class="ltabs-tab-arrow">▼</span>
								<div class="item-sub-cat">
									<ul class="ltabs-tabs cf">
										<li class="ltabs-tab tab-sel" data-category-id="20" data-active-content=".items-category-20"> <span class="ltabs-tab-label">New Product</span> </li>
										
									</ul>
								</div>
							</div>
							<!-- End Tabs-->
						</div>
						<div class="ltabs-items-container">
							<!--Begin Items-->
							<div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total="10">
								<div class="ltabs-items-inner ltabs-slider ">
									@foreach($newproduct as $pro)
									<div class="ltabs-item product-layout">
										<div class="product-item-container">
											<div class="left-block">
												<div class="product-image-container second_img ">
													<img src="{{ asset($pro->image_one)}}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
													<img src="{{ asset($pro->image_two)}}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
												</div>
												<!--Sale Label-->
												@if($pro->discount_price == NULL)
												<span class="label label-new">New</span>
												@else
												@php
                                                $amount=$pro->selling_price - $pro->discount_price;
                                                $discount=$amount/$pro->selling_price * 100;
                                                @endphp 
												<span class="label label-sale">
												{{ intval($discount) }}%
											   </span>
												@endif
												<!--full quick view block-->
												<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="{{ url('product/popup/'.$pro->id.'/'.$pro->product_name) }}">  Quickview</a>
												<!--end full quick view block-->
											</div>
											<div class="right-block">
												<div class="caption">
													<h4><a href="{{ url('product/details/'.$pro->id.'/'.$pro->product_name) }}">{{ $pro->product_name }}</a></h4>		
													
																		
													<div class="price">
														@if($pro->discount_price == NULL)
			                                              
			                                              <span class="price-new">ট {{ $pro->selling_price }}</span>
			                                            @else
			                                            @endif
			                                            @if($pro->discount_price != NULL)
			                                              
			                                             <span class="price-old">ট {{ $pro->selling_price }}</span>
			                                             <span class="price-new">ট {{ $pro->discount_price }}</span>
			                                            @else
			                                            @endif		 
													</div>
												</div>
												
												  <div class="button-group">
												  <form action="{{ url('cart/product/add/'.$pro->id) }}" method="post">
														@csrf
													
														</br>
													
														

														<div class="form-group box-info-product">
															<div class="option quantity">
																<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
																	
																	<input class="form-control" type="hidden" name="qty"
																	value="1">
																	<input type="hidden" name="product_id" value="50">
																	<input type="hidden" name="approximate" value="{{$pro->approximate}}">
																	
																</div>
															</div>
															<div class="cart">
															<button class="addToCart" type="submit" data-toggle="tooltip" title="Add to Cart"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
															
																<button class="addwishlist wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" data-id="{{ $pro->id }}"><i class="fa fa-heart"></i></button>
															</div>
														</div>
                                                     </form>	
													
													
													
												  </div>
											</div><!-- right block -->
										</div>
									</div>
									@endforeach
								</div>
								
							</div>
							<div class="ltabs-items items-category-18 grid" data-total="11">
								<div class="ltabs-loading"></div>

								
							</div>
							<div class="ltabs-items  items-category-25 grid" data-total="11">
								<div class="ltabs-loading"></div>
							</div>
						</div>
						<!--End Items-->
						
						
						</div>
					
					</div>
				</div>

{{-- @include('user.categoryproductlist') --}}


				
{{-- Category wise product show modoule  --}}




				{{-- Category Show  --}}
				
				


				

				




@php
 $categorys=DB::table('category')->get();	
@endphp
				<div class="module no-margin titleLine ">
					<h3 class="modtitle">Services</h3>
					<div class="modcontent clearfix">
						<div id="collections_block" class="clearfix  block">
							<ul class="width6">
								@foreach($categorys as $cats)
								<li class="collect collection_0">
									<div class="color_co"><a href="#">{{ $cats->categoty_name }}</a> </div>
								</li>
								@endforeach

							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- //Main Container -->















  <!-- Category -->

	<!-- Block Spotlight3  -->

	<!-- //Block Spotlight3  -->
	<script type="text/javascript">
      $(document).ready(function() {
            $('.addwishlist').on('click', function(){  
              var id = $(this).data('id');
              if(id) {
                 $.ajax({
                     url: "{{  url('/add/wishlist/') }}/"+id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                       const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000
                        })

                       if($.isEmptyObject(data.error)){
                            Toast.fire({
                              type: 'success',
                              title: data.success
                            })
                       }else{
                             Toast.fire({
                                type: 'error',
                                title: data.error
                            })
                       }

                     },
                    
                 });
                 
             } else {
                 alert('danger');
             }
              e.preventDefault();
         });
     });

</script>
{{--  card add --}}
	<script type="text/javascript">
      $(document).ready(function() {
            $('.addcart').on('click', function(){  
              var id = $(this).data('id');
              if(id) {
                 $.ajax({
                     url: "{{  url('/add/to/cart/') }}/"+id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                       const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000
                        })

                       if($.isEmptyObject(data.error)){
                            Toast.fire({
                              type: 'success',
                              title: data.success
                            })
                       }else{
                             Toast.fire({
                                type: 'error',
                                title: data.error
                            })
                       }
                     },
                 });
                 //alert(id)
                 
             } else {
                 alert('danger');
             }
              e.preventDefault();
         });
     });

</script>
@endsection


