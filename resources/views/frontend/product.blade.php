@extends('frontend_master')
@section('content')
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{route('homepage')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Products</li>
				<li class="active">{{$category_product->name}}</li>
			</ol>
		</div>
	</div>
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="filter-price animated wow slideInUp" data-wow-delay=".5s">
					<!-- <h3>Filter</h3> -->
					<ul class="dropdown-menu1">
							<li><a href="">								               
							<div id="slider-range"></div>							
							<input type="text" id="amount" style="border: 0" />
							</a></li>	
					</ul>
					{{-- <script type='text/javascript'>//<![CDATA[ 
						$(window).load(function(){
						 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 100000,
								values: [ 20000, 80000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
						});//]]>
						</script> --}}
						<script type="text/javascript" src="{{asset('frontend_assests/js/jquery-ui.min.js')}}"></script>
					 <!---->
				</div>
				<div class="categories animated wow slideInUp" data-wow-delay=".5s">
					<h3>Categories</h3>
					
					<ul class="cate">
							<ul>
								@foreach($categories as $category)
								<li><a href="{{route('productpage',$category->id)}}">{{$category->name}}</a> <span>({{count($category->products)}})</span></li>
								@endforeach
							</ul>
					</ul>	
				</div>
			</div>
			<!-- end product left -->

			<div class="col-md-8 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids animated wow slideInRight" data-wow-delay=".5s">
						<div class="sorting">
							<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">Default sorting</option>
								<option value="null">Sort by popularity</option> 
								<option value="null">Sort by average rating</option>					
								<option value="null">Sort by price</option>								
							</select>
						</div>
						<div class="sorting-left">
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">Item on page 9</option>
								<option value="null">Item on page 18</option> 
								<option value="null">Item on page 32</option>					
								<option value="null">All</option>								
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>	
				</div><br><br><br>
	
				<div class="products-right-grids-bottom">
					@foreach($category_product->products as $product)
					<div class="col-md-4 products-right-grids-bottom-grid">
						
						<div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
							
							<div class="new-collections-grid1-image">
								<a href="{{ route('productdetailpage',$product->id) }}" class="product-image"><img src="{{$product->photo}}" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos products-right-grids-pos">
									<a href="{{ route('productdetailpage',$product->id) }}">Quick View</a>
								</div>
								<div class="new-collections-grid1-right products-right-grids-pos-right">
									<div class="rating">
										<div class="rating-left">
											<img src="{{asset('frontend_assests/images/2.png')}}" alt=" " class="img-responsive">
										</div>
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
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<h4><a href="#">{{$product->name}}</a></h4>
							
							<div class="simpleCart_shelfItem products-right-grid1-add-cart">
								<p>
									<span class="item_price">{{$product->price}}</span>
									
									<a class="item_add addtocartBtn" href="#" data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-photo="{{ $product->photo }}"data-price="{{ $product->price }}" data-discount="{{ $product->discount }}" data-description="{{ $product->description }}">add to cart </a>
								</p>
							</div>
						</div>		
					</div>	
				@endforeach
				<div class="clearfix"> </div>
				
			</div>
			<!-- end product right -->

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

		</div> <!-- end container -->

		<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
@endsection