
<!DOCTYPE html>
<html>
<head>
<title>Gucci Shop </title>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('frontend_assests/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('frontend_assests/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" href="{{asset('frontend_assests/icon/icofont/icofont.min.css')}}">

<link href="{{asset('frontend_assests/css/all.min.css')}}" rel="stylesheet" type="text/css" media="all" />

<!-- js -->
<script src="{{asset('frontend_assests/js/jquery.min.js')}}"></script>
<!-- //js -->
<!-- cart -->
<script src="{{asset('frontend_assests/js/simpleCart.min.js')}}"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="{{asset('frontend_assests/js/bootstrap-3.1.1.min.js')}}"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- timer -->
<link rel="stylesheet" href="{{asset('frontend_assests/css/jquery.countdown.css')}}" />
<!-- //timer -->
<!-- animation-effect -->
<link href="{{ asset('frontend_assests/css/animate.min.css') }}" rel="stylesheet"> 
<script src="{{asset('frontend_assests/js/wow.min.js')}}"></script>

<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">@gucci.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+959 958989199</li>
						@guest
                    	@if (Route::has('register'))
							<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="{{ route('login') }}">Login</a></li>
							<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="{{ route('register') }}">Register</a></li>
						@endif
						@else
							<li><a href="#">{{ Auth::user()->name }}</a></li>
							<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                                 </li>
						@endguest 
					</ul>
				</div>
				
				<div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">

				<ul class="social-icons">	 
					<li><a href="#" class="facebook"></a></li>
					<li><a href="#" class="twitter"></a></li>
					<li><a href="#" class="g"></a></li>
					<li><a href="#" class="instagram"></a></li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>

 			<div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn text-center" data-wow-delay=".5s">
					<h1><a href="{{route('homepage')}}">G u c c i <span> Shop anywhere</span> </a></h1>
				</div>
				<div class="logo-nav-left1 text-center">
					<nav class="navbar navbar-default">
					
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs" >
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{route('homepage')}}" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<x-category-component></x-category-component>
										
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							
							<li><a href="{{route('shoppage')}}">Discount Item</a></li>
							<li><a href="{{route('aboutpage')}}">About</a></li>
							<li><a href="{{route('mailuspage')}}">Mail Us</a></li>
						</ul>
					</div>
					</nav>
				</div>
				
				<div class="logo-nav-right">
					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
					</div>
						
				</div>

				{{-- checkout --}}
				<div class="header-right">
					<div class="cart box_1 total">
						<a href="{{ route('checkoutpage') }}" class="text-decoration-none d-xl-inline d-lg-inline d-md-inline d-sm-none d-none shoppingcartLink"> 
                    		{{-- <i class="icofont-shopping-cart"></i>  --}}
                    		<img src="{{asset('frontend_assests/images/bag.png')}}" alt="" />
                    		<span class="badge badge-pill badge-light badge-notify cartNotistyle cartNoti">  </span>
                   			<span class="cartTotal"> </span>
                		</a>
						{{-- <a href="{{route('checkoutpage')}}">
							<h3> <div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								<img src="{{asset('frontend_assests/images/bag.png')}}" alt="" />
							</h3>
						</a> --}}
						<p><a href="javascript:;" class="simpleCart_empty"></a></p>
						<div class="clearfix"> </div>
					</div>	
				</div>
				{{-- checkout --}}

				<div class="clearfix"> </div>
			</div>
	</div>
<!-- //header -->

@yield('content')

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<p ><a href="{{ route('aboutpage') }}" style="color: #fff">About Us</a></p>
					<p>We bring joy and happiness to your life with our high quality products<span>We ship products directly from US.<br>
						We love our customers.
					Thank you for your trust.</span></p>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<p><a href="{{ route('mailuspage') }}" style="color: #fff">Contact Info</a></p>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@gucci.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".7s">

					<p><a href="#" style="color: #fff">New Products</a></p>
						<x-footer-component></x-footer-component>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
					<p><a href="#" style="color: #fff">Blog Posts</a></p>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="http://susandihtun.me/">susandihtun.me</a>
						</div>					
						<div class="clearfix"> </div>
						<div class="footer-grid-sub-grid-left">
							<a href="http://kyukyuhlaing.me/">kyukyuhlaing.me</a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="index.html">Gucci Shop <span>shop anywhere</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				<p>Copyright &copy 2020 Gucci Shop. All rights reserved | Design by <a href="http://susandihtun.me/">SK</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- search-scripts -->
 	<script type="text/javascript" src="{{ asset('frontend_assests/js/custom1.js') }}"></script>
	<script src="{{ asset('frontend_assests/js/classie.js') }}"></script>
	<script src="{{ asset('frontend_assests/js/uisearch.js') }}"></script>
		<script>
			new UISearch( document.getElementById( 'sb-search' ) );
		</script>
<!-- //search-scripts -->
<script src="{{asset('frontend_assests/js/jquery.countdown.js')}}"></script>
<script src="{{asset('frontend_assests/js/script.js')}}"></script>



</body>
</html>