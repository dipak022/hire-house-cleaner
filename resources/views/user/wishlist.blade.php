	
@extends('layouts.user.app')
@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
@include('layouts.user.manubar')
	</header>
		<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">My Wish List</a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-12">
				<h2 class="title">My Wish List</h2>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-center">Image</td>
								<td class="text-left">Service Name</td>
								<td class="text-left">Service Code</td>
								
								<td class="text-right">Unit Price</td>
								<td class="text-right">Action</td>
							</tr>
						</thead>
						<tbody>
							@foreach($product as $row)
							<tr>
								<td class="text-center">
									<a  href="product.html"><img width="70px" src="{{ asset($row->image_one) }}" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop">
									</a>
								</td>
								<td class="text-left"><a href="#">{{ $row->product_name }}</a>
								</td>
								<td class="text-left">{{ $row->product_code }}</td>
								
								<td class="text-right">
									<div class="price">
									 @if($row->discount_price == NULL)            
                                         <span class="price-new" itemprop="price">ট {{ $row->selling_price }}</span>
                                        @else
                                        
                                        @endif
                                        @if($row->discount_price != NULL)
                                          
                                     
                                         <span class="price-new" itemprop="price">ট {{ $row->discount_price }}</span>
                                         <span class="price-old">ট {{ $row->selling_price }}</span>
                                        
                                        @else
                                        @endif
									</div>
								
								</td>
								<td class="text-right">
									
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
															<button class="btn btn-primary" type="submit" data-toggle="tooltip" title="Add to Cart" data-id="{{ $row->id }}"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
															
																
															</div>
														</div>
                                                     </form>
									<a class="btn btn-danger" title="" data-toggle="tooltip" href="{{ URL::to('delete/wishlists/'.$row->id) }}" data-original-title="Remove"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>


		</div>
	</div>
	<!-- //Main Container -->
@endsection
