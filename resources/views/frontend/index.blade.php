@extends('frontend_master')
@section('content')

<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
				<h3 style="">Welcome to 
					<!-- <span style="color:green;">G</span>
					<span style="color:red;">U</span>
					<span style="color:yellow;">C</span>
					<span style="color:red;">C</span>
					<span style="color:green;">I</span> -->
				GUCCI Shop</h3>

				<br><br>
				<h4 >Up to <span>50% <i>Off/-</i></span></h4>
				<div class="wmuSlider example1">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p 
									>T-Shirts + Formal Pants + Jewellery + Cosmetics</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Handbags + Wallets + Hats+ Belts</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Tops + Books & Media + Sports</p>
								</div>
							</div>
						</article>
					</div>
				</div>
					<script src="{{asset('frontend_assests/js/jquery.wmuSlider.js')}}"></script> 
					<script>
						$('.example1').wmuSlider();         
					</script> 
			</div>
		</div>
	</div>
<!-- //banner -->


<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container"> 
			<div class="banner-bottom-grids">
				<div class="banner-bottom-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<div class="grid">
						<figure class="effect-julia">
							<img src="{{asset('frontend_assests/images/store.jpg')}}" alt=" " class="img-responsive" />
							
						</figure>
					</div>
				</div>

				<!-- //w3l-banner-slider-main -->
				<div class="banner-bottom-grid-left1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="{{asset('frontend_assests/images/lnew.jpg')}}"   alt=" " class="img-responsive" />
						</div>

						<div class="banner-bottom-grid-left1-pos">
							<p>Latest New Collections</p>
						</div>
					</div>
					<div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="{{asset('frontend_assests/images/ln.jpg')}}"alt=" " class="img-responsive" />
						</div>
						<div class="banner-bottom-grid-left1-position">
							<div class="banner-bottom-grid-left1-pos1">
								<p>Discount 45%</p>
							</div>
						</div>
					</div>
				</div>
				<div class="banner-bottom-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="{{asset('frontend_assests/images/top3.jpg')}}" alt=" " class="img-responsive" />
						</div>
						<div class="grid-left-grid1-pos">
							<p>top and classic designs <span>2020 Collection</span></p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner-bottom -->
	
		<div class="new-collections">
			<div class="container">
				<section class="w3l-grids-hny-2">
					<!-- /content-6-section -->
					<div class="grids-hny-2-mian py-5">
						<div class="container py-lg-5"> 
								
							<h3 class="animated wow zoomIn" data-wow-delay=".5s">Shop with Us</h3>
							<div class="welcome-grids row p-5">
								@foreach($categories as $category)
								<div class="col-lg-2 col-md-4 col-6 welcome-image">			
									<div class="boxhny13 mt-5">
										<a href="#">
											<img src="{{ $category->photo }}" alt="" class="img-fluid"width="200" height="200">
											<div class="boxhny-content">
												<h4 class="title">Qucik View</h4>
											</div>
										</a>
									</div>
									<h4><a href="{{ route('productpage',$category->id) }}">{{ $category->name }}</a></h4>
								</div>
							@endforeach
						</div>
					</div>
				</section>
				<!-- //content-6-section -->
			</div>
		</div>


<!-- collections -->
	<div class="new-collections">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">New Collections</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
				deserunt mollit anim id est laborum.</p>
			<div class="new-collections-grids">
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							@foreach($selection_product1 as $product1)
							<a href="#" class="product-image"><img src="{{ $product1->photo }}" alt=" " class="img-responsive" /></a>
							@endforeach
							<div class="new-collections-grid1-image-pos">
								<a href="{{ route('productdetailpage',$product1->id) }}">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="single.html">{{ $product1->name }}</a></h4>
						<div class="new-collections-grid1-left simpleCart_shelfItem">

							<p> <span class="item_price">{{ $product1->price }}</span>

								{{-- <a href="#" class="addtocartBtn text-decoration-none" data-id='{{ $item->id }}' data-name='{{ $item->name }}' data-photo='{{ $item->photo }}' data-codeno='{{ $item->codeno }}' data-price='{{ $item->price }}' data-discount='{{ $item->discount }}'>Add to Cart</a> --}}

								<a class="addtocartBtn" href="#" data-id='{{ $product1->id }}' data-name='{{ $product1->name }}' data-photo='{{ $product1->photo }}' data-codeno='{{ $product1->codeno }}' data-price='{{ $product1->price }}' data-discount='{{ $product1->discount }}'>add to cart </a>
							</p>

						</div>
					</div>
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							@foreach($selection_product2 as $product2)
							<a href="#" class="product-image"><img src="{{ $product2->photo }}" alt=" " class="img-responsive" /></a>
							@endforeach
							<div class="new-collections-grid1-image-pos">
								<a href="{{ route('productdetailpage',$product2->id) }}">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="single.html">{{ $product2->name }}</a></h4>
						
						<div class="new-collections-grid1-left simpleCart_shelfItem">

							<p> <span class="item_price">{{ $product2->price }}</span>
							
							<a class="item_add addtocartBtn" href="#" data-id='{{ $product2->id }}' data-name='{{ $product2->name }}' data-photo='{{ $product2->photo }}' data-codeno='{{ $product2->codeno }}' data-price='{{ $product2->price }}' data-discount='{{ $product2->discount }}'>add to cart </a></p>

						</div>
					</div>
				</div>
				<div class="col-md-6 new-collections-grid">
					<div class="new-collections-grid1 new-collections-grid1-image-width animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							@foreach($selection_product3 as $product3)
							<a href="#" class="product-image">
								<img src="{{ $product3->photo }}" style="height: 235px;" alt=" " class="img-responsive" /></a>
							@endforeach
							<div class="new-collections-grid1-image-pos new-collections-grid1-image-pos1">
								<a href="{{ route('productdetailpage',$product3->id) }}">Quick View</a>
							</div>
							<div class="new-collections-grid1-right new-collections-grid1-right-rate">
								<div class="rating">
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="new-one">
								<p>New</p>
							</div>
						</div>
						<h4><a href="#">{{ $product3->name }}</a></h4>
						
						<div class="new-collections-grid1-left simpleCart_shelfItem">

							<p> <span class="item_price">{{ $product3->price }}</span>
							<a class="item_add addtocartBtn" href="#" data-id='{{ $product3->id }}' data-name='{{ $product3->name }}' data-photo='{{ $product3->photo }}' data-codeno='{{ $product3->codeno }}' data-price='{{ $product3->price }}' data-discount='{{ $product3->discount }}'>add to cart </a></p>

						</div>
					</div>
					<div class="new-collections-grid-sub-grids">
						<div class="new-collections-grid1-sub">
							<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
								<div class="new-collections-grid1-image">
									@foreach($selection_product4 as $product4)
									<a href="#" class="product-image"><img src="{{ $product4->photo }}" alt=" " class="img-responsive" /></a>
									@endforeach
									<div class="new-collections-grid1-image-pos">
										<a href="{{ route('productdetailpage',$product4->id) }}">Quick View</a>
									</div>
									<div class="new-collections-grid1-right">
										<div class="rating">
											<div class="rating-left">
												<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<h4><a href="#">{{ $product4->name }}</a></h4>
								
								<div class="new-collections-grid1-left simpleCart_shelfItem">

									<p><span class="item_price">{{ $product4->price }}</span>
									<a class="item_add addtocartBtn" href="#" data-id='{{ $product4->id }}' data-name='{{ $product4->name }}' data-photo='{{ $product4->photo }}' data-codeno='{{ $product4->codeno }}' data-price='{{ $product4->price }}' data-discount='{{ $product4->discount }}'>add to cart </a></p>

								</div>
							</div>
						</div>
						<div class="new-collections-grid1-sub">
							<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
								<div class="new-collections-grid1-image">
									@foreach($selection_product5 as $product5)
									<a href="#" class="product-image">
										<img src="{{ $product5->photo }}" alt=" " class="img-responsive" /></a>
										@endforeach
									<div class="new-collections-grid1-image-pos">
										<a href="{{ route('productdetailpage',$product5->id) }}">Quick View</a>
									</div>
									<div class="new-collections-grid1-right">
										<div class="rating">
											<div class="rating-left">
												<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<h4><a href="#">{{ $product5->name }}</a></h4>
								
								<div class="new-collections-grid1-left simpleCart_shelfItem">

									<p> <span class="item_price">{{ $product5->price }} </span>
									<a class="item_add addtocartBtn" href="#" data-id='{{ $product5->id }}' data-name='{{ $product5->name }}' data-photo='{{ $product5->photo }}' data-codeno='{{ $product5->codeno }}' data-price='{{ $product5->price }}' data-discount='{{ $product5->discount }}'>add to cart </a></p>

								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							@foreach($selection_product6 as $product6)
							<a href="#" class="product-image"><img src="{{ $product6->photo }}" alt=" " class="img-responsive" /></a>
							@endforeach
							<div class="new-collections-grid1-image-pos">
								<a href="{{ route('productdetailpage',$product6->id) }}">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="#">{{ $product6->name }}</a></h4>
						
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p> <span class="item_price">{{ $product6->price }}</span>
								<a class="item_add addtocartBtn" href="#" data-id='{{ $product6->id }}' data-name='{{ $product6->name }}' data-photo='{{ $product6->photo }}' data-codeno='{{ $product6->codeno }}' data-price='{{ $product6->price }}' data-discount='{{ $product6->discount }}'>add to cart </a></p>
						</div>
					</div>
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							@foreach($selection_product7 as $product7)
								<a href="#" class="product-image"><img src="{{ $product7->photo }}" alt=" " class="img-responsive" /></a>
							@endforeach
							<div class="new-collections-grid1-image-pos">
								<a href="{{ route('productdetailpage',$product7->id) }}">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="#">{{ $product7->name }}</a></h4>
						
						<div class="new-collections-grid1-left simpleCart_shelfItem">

							<p> <span class="item_price">{{ $product7->price }}</span>
							<a class="item_add addtocartBtn" href="#" data-id='{{ $product7->id }}' data-name='{{ $product7->name }}' data-photo='{{ $product7->photo }}' data-codeno='{{ $product7->codeno }}' data-price='{{ $product7->price }}' data-discount='{{ $product7->discount }}'>add to cart </a></p>

						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //collections -->
	{{-- <div class="new-collections">
		<div class="container">
		<!-- //products-->
		<section class="w3l-content-5">
			<!-- /content-6-section -->
			<div class="content-5-main">
				<div class="container">
					<div class="content-info-in row">
						<div class="content-gd col-md-6 offset-lg-3 text-center">
							<h3 class="hny-title two">
								Tons of Products & Options to
								<span>change</span></h3>
							<p>Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam
								animi consequatur saepe blanditiis.Lorem ipsum dolor sit amet,Ea consequuntur illum facere
								aperiam sequi optio consectetur adipisicing elit..</p>
							<a href="#" class="read-more-btn2 btn">
								Shop Now
							</a>

						</div>

					</div>

				</div>
			</div>
		</section>
	</div>
</div> --}}


<!-- new-timer -->
	<div class="timer">
		<div class="container">
			<div class="timer-grids">
				<div class="col-md-8 timer-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<h3><a href="products.html">Ready To Wear</a></h3>
					<div class="rating">
						<div class="rating-left">
							<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive" />
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="new-collections-grid1-left simpleCart_shelfItem timer-grid-left-price">
						@foreach($selection_product8 as $product8)
						<p><span class="item_price">Price:{{$product8->price}}Ks</span></p>

						<!-- <h5>Good Quality</h5> -->
						<h4>Description: {{$product8->description}}<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
						<p><a class="item_add timer_add" href="#">add to cart </a></p>
					</div><br>
					{{-- <div id="counter"> </div> --}}
				</div>
				<div class="col-md-4 timer-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="timer-grid-right1">
						
						<img src="{{$product8->photo}}" alt=" " class="img-responsive" />
						
						<div class="timer-grid-right-pos">
							<h4>Special Offer</h4>
						</div>
					</div>
					@endforeach
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //new-timer -->

<!-- collections-bottom -->
	<div class="collections-bottom">
		<div class="container">
			<!-- <div class="collections-bottom-grids">
				<div class="collections-bottom-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>45% Offer For <span>Women & Children's</span></h3>
				</div>
			</div> -->
			<div class="newsletter animated wow slideInUp" data-wow-delay=".5s">
				<h3>Newsletter</h3>
				<p>Join us now to get all news and special offers.</p>
				<form>
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					<input type="email" value="Enter your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email address';}" required="">
					<input type="submit" value="Join Us" >
				</form>
			</div>
		</div>
	</div>
<!-- //collections-bottom -->

@endsection