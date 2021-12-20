<!-- Block Spotlight1  -->
@php
 $slider=DB::table('slider')->first();	
@endphp
	<section class="so-spotlight1 ">
		<div class="container">
			<div class="row">
				<div id="yt_header_right" class="col-lg-offset-3 col-lg-9 col-md-12">
					<div class="slider-container "> 
							
						
						<div id="so-slideshow" class="col-lg-8 col-md-8 col-sm-12 col-xs-12 two-block">
							<div class="module no-margin">
								<div class="yt-content-slider yt-content-slider--arrow1"  data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
									<div class="yt-content-slide">
										<a href="#"><img src="{{ asset( $slider->main_slider_1)}}" alt="slider1" style="height:400px;" class="img-responsive"></a>
									</div>
									<div class="yt-content-slide">
										<a href="#"><img src="{{ asset( $slider->main_slider_2)}}" alt="slider2" style="height:400px;" class="img-responsive"></a>
									</div>
									<div class="yt-content-slide">
										<a href="#"><img src="{{ asset( $slider->main_slider_3)}}" alt="slider3"  style="height:400px;"class="img-responsive"></a>
									</div>
								</div>
								
								<div class="loadeding"></div>
							</div>
							
						</div>

						
						<div class="module col-md-4  hidden-sm hidden-xs three-block ">
							<div class="modcontent clearfix">
								<div class="htmlcontent-block">	
									<ul class="htmlcontent-home">		
										<li>
											<div class="banners">
												<div>
													<a href="#"><img src="{{ asset( $slider->sub_slider_1)}}"  style="height:122px; width:255px;" alt="banner1"></a>
												</div>
											</div>
										</li>		
										<li>
											<div class="banners">
												<div>
													<a href="#"><img src="{{ asset( $slider->sub_slider_2)}}" style="height:122px; width:255px;" alt="banner1"></a>
												</div>
											</div>
										</li>		
										<li>
											<div class="banners">
												<div>
													<a href="#"><img src="{{ asset( $slider->sub_slider_3)}}" style="height:122px; width:255px;" alt="banner1"></a>
												</div>
											</div>
										</li>	
									</ul>
								</div>
							</div>
						</div>

						

						
						</div>
					</div>
				</div>
			</div>
		</div>  
	</section>
	<!-- //Block Spotlight1  -->