@extends('layouts.user.app')
@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
@include('layouts.user.manubar')
	</header>
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Service</a></li>
			<li><a href="#">Service Details</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-md-12 col-sm-12">
				
				<div class="product-view row">
					<div class="left-content-product col-lg-10 col-xs-12">
						<div class="row">
							<div class="content-product-left  col-sm-7 col-xs-12 ">
								<div id="thumb-slider-vertical" class="thumb-vertical-outer">
									<span class="btn-more prev-thumb nt"><i class="fa fa-angle-up"></i></span>
									<span class="btn-more next-thumb nt"><i class="fa fa-angle-down"></i></span>
									<ul class="thumb-vertical">
										<li class="owl2-item">
											<a data-index="0" class="img thumbnail" data-image="{{ asset($product->image_one) }}" title="Canon EOS 5D">
												<img src="{{ asset($product->image_one) }}" title="Canon EOS 5D" alt="Canon EOS 5D">
											</a>
										</li>
										<li class="owl2-item">
											<a data-index="1" class="img thumbnail " data-image="{{ asset($product->image_two) }}" title="Bint Beef">
												<img src="{{ asset($product->image_two) }}" title="Bint Beef" alt="Bint Beef4">
											</a>
										</li>
										<li class="owl2-item">
											<a data-index="2" class="img thumbnail" data-image="{{ asset($product->image_three) }}" title="Bint Beef">
												<img src="{{ asset($product->image_three) }}" title="Bint Beef" alt="Bint Beef3">
											</a>
										</li>
										<li class="owl2-item">
											<a data-index="3" class="img thumbnail" data-image="{{ asset($product->image_two) }}" title="Bint Beef">
												<img src="{{ asset($product->image_two) }}" title="Bint Beef" alt="Bint Beef2">
											</a>
										</li>
									</ul>
									
									
								</div>
								<div class="large-image  vertical">
									<img itemprop="image" class="product-image-zoom" src="{{ asset($product->image_one) }}" data-zoom-image="{{ asset($product->image_one) }}" title="Bint Beef" alt="Bint Beef1">
								</div>
								
								
							</div>

							<div class="content-product-right col-sm-5 col-xs-12">
								<div class="title-product">
									<h1>{{ $product->product_name }}</h1>
								</div>
								<!-- Review ---->
								<div class="box-review form-group">
								

									
								</div>

								<div class="product-label form-group">
									<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
										
										
										@if($product->discount_price == NULL)            
                                         <span class="price-new" itemprop="price">ট {{ $product->selling_price }}</span>
                                        @else
                                        @endif
                                        @if($product->discount_price != NULL)
                                         <span class="price-new" itemprop="price">ট {{ $product->discount_price }}</span>
                                         <span class="price-old">ট {{ $product->selling_price }}</span>
                                        @else
                                        @endif
									</div>
									
								</div>

								@if($product->approximate != null)
								<div class="product-box-desc">
									<div class="inner-box-desc">
										<div class="price-tax"><span>Ex Tax:</span>ট {{ $product->ex_tax }}</div>
										
										<div class="model"><span>approximate Area:</span> {{ $product->approximate }} </div>
										
									</div>
								</div>
								@else
								<div class="product-box-desc">
									<div class="inner-box-desc">
										<div class="price-tax"><span>Ex Tax:</span>ট {{ $product->ex_tax }}</div>
										
										<div class="model"><span>Others :</span> {{ $product->others }} </div>
										
									</div>
								</div>
								@endif


								<div id="product">
									<h4>Available  Cart Options</h4>
								
									<form action="{{ url('cart/product/add/'.$product->id) }}" method="post">
								     @csrf
								
									</br>
								
									

									<div class="form-group box-info-product">
										<div class="option quantity">
											<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
												<label>Qty</label>
												<input class="form-control" type="text" name="qty"
												value="1">
												<input type="hidden" name="product_id" value="50">
												<input type="hidden" name="approximate" value="{{$product->approximate}}">
												<span class="input-group-addon product_quantity_down">−</span>
												<span class="input-group-addon product_quantity_up">+</span>
											</div>
										</div>
										<div class="cart">
											<input type="submit" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg"  data-original-title="Add to Cart">
											<button class="addwishlist wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" data-id="{{ $product->id }}"><i class="fa fa-heart"></i></button>
										</div>

									
										<div class="sharethis-inline-share-buttons"></div>

									</div>
								</form>

								</div>
								<!-- end box info product -->

							</div>
						</div>
					</div>
					
				
				</div>
				
				<!-- Product Tabs -->
				<div class="producttab ">
	<div class="tabsslider  col-xs-12">
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
			<li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews (1)</a></li>
			<li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Comment Box</a></li>
			<li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a></li>
		</ul>
		<div class="tab-content col-xs-12">
			<div id="tab-1" class="tab-pane fade active in">
				<p>
					{!! $product->product_details !!}
				</p>	
			</div>
			<div id="tab-review" class="tab-pane fade">
				<form>
					<div id="review">
						<table class="table table-striped table-bordered">
							<tbody>
								<tr>
									<td style="width: 50%;"><strong>Super Administrator</strong></td>
									<td class="text-right">29/07/2015</td>
								</tr>
								<tr>
									
								</tr>
							</tbody>
						</table>
						<div class="text-right"></div>
					</div>
					<h2 id="review-title">Write a review</h2>
					<div class="contacts-form">
						<div class="form-group"> <span class="icon icon-user"></span>
							<input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}"> 
						</div>
						<div class="form-group"> <span class="icon icon-bubbles-2"></span>
							<textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
						</div> 
						<span style="font-size: 11px;"><span class="text-danger">Note:</span>						HTML is not translated!</span>
						
						
						<div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
					</div>
				</form>
			</div>
			<div id="tab-4" class="tab-pane fade">
				<div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="20"></div>	
							
			</div>
			<div id="tab-5" class="tab-pane fade">
				<p>Lorem ipsum dolor sit amet, consetetur
					sadipscing elitr, sed diam nonumy eirmod
					tempor invidunt ut labore et dolore
					magna aliquyam erat, sed diam voluptua.
					At vero eos et accusam et justo duo
					dolores et ea rebum. Stet clita kasd
					gubergren, no sea takimata sanctus est
					Lorem ipsum dolor sit amet. Lorem ipsum
					dolor sit amet, consetetur sadipscing
					elitr, sed diam nonumy eirmod tempor
					invidunt ut labore et dolore magna aliquyam
					erat, sed diam voluptua. </p>
				<p>At vero eos et accusam et justo duo dolores
					et ea rebum. Stet clita kasd gubergren,
					no sea takimata sanctus est Lorem ipsum
					dolor sit amet. Lorem ipsum dolor sit
					amet, consetetur sadipscing elitr.</p>
				<p>Sed diam nonumy eirmod tempor invidunt
					ut labore et dolore magna aliquyam erat,
					sed diam voluptua. At vero eos et accusam
					et justo duo dolores et ea rebum. Stet
					clita kasd gubergren, no sea takimata
					sanctus est Lorem ipsum dolor sit amet.</p>
			</div>
		</div>
	</div>
</div>
	

				

				
			</div>
			
			
		</div>
		<!--Middle Part End-->
	</div>
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
	<!-- //Main Container -->
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="zRdWGbrz"></script>
	<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5dff5c0e258810001231d9cc&product=inline-share-buttons&cms=sop' async='async'></script>

@endsection