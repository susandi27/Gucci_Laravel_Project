@extends('frontend_master')
@section('content')
 


<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{route('homepage')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Discount Page</li>
			</ol>
		</div>
	</div><br><br>
<!-- //breadcrumbs -->

	<!-- single-related-products -->
	<div class="single-related-products">
		<div class="container">
			<h3 class="animated wow slideInUp" data-wow-delay=".5s">Discount Items</h3>
			<hr style="max-width: 13rem;
	 					border-color: #d8703f;
						border-width: .2rem;">
			
			<div class="new-collections-grids">
				@foreach($products as $product)
		        @if($product->discount !='')
				<div class="col-md-3 new-collections-grid mt-3">
					<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="single.html" class="product-image"><img src="{{$product->photo}}" alt=" " class="img-responsive"></a>
							<div class="new-collections-grid1-image-pos">
								<a href="single.html">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="{{asset('frontend_assests/images/1.png')}}" alt=" " class="img-responsive">
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="single.html">{{$product->name}}</a></h4>
						
						
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							@if($product->discount)
							<p><strike>{{$product->discount}}Ks</strike> <span class="item_price">{{$product->price}}Ks</span></p>

							@else
		                        <span class="item_price">{{$product->price}}Ks</span>
		                    @endif
		                    <p>
		                    	<a class="addtocartBtn" href="#" data-id='{{ $product->id }}' data-name='{{ $product->name }}' data-photo='{{ $product->photo }}' data-codeno='{{ $product->codeno }}' data-price='{{ $product->price }}' data-discount='{{ $product->discount }}'>add to cart </a>
		                	</p>
						</div>


					</div>
				</div>

				@endif
		        @endforeach
		        <div class="clearfix"> </div>
			</div>	
			<nav class="numbering animated wow slideInRight" data-wow-delay=".5s">
				  <ul class="pagination paging">
					<li>
					  <a href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					  </a>
					</li>
					<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
					  <a href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					  </a>
					</li>
				  </ul>
				</nav>
		</div>


	</div>

@endsection