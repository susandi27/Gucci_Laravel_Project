@extends('frontend_master')
@section('content')

<!-- <link rel="stylesheet" type="text/css" href="{{asset('frontend_assests/bootstrap/css/custom.css')}}"> -->
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('frontend_assests/bootstrap/css/bootstrap.min.css')}}">
	 -->
	  <link rel="stylesheet" href="{{asset('frontend_assests/assets/css/style-starter.css')}}">


<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{route('homepage')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">About</li>
				
			</ol>
		</div>
	</div>
	<br>

<section class="w3l-wecome-content-6">
	<!-- /content-6-section -->
	<div class="ab-content-6-mian py-5">
		<div class="container py-lg-5">
			<div class="welcome-grids row">
				<div class="col-lg-6 mb-lg-0 mb-5">
					<h3 class="hny-title">
					About Our Gucci<span style="color:#d8703f;">Shop</span></h3>
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.
					</p>

					<p> Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. 
						</p>
					<div class="read">
						<a href="{{route('shoppage')}}" class="read-more btn">Shop Now</a>
						<!-- <button class="" >Shop Now</button>	 -->

					</div>	
							
				</div>
					<div class="col-lg-6 welcome-image">
						<img src="{{asset('frontend_assests/images/a1.jpg')}}" class="img-fluid" alt="" />
					</div>	
							
			</div>	
				 
		 </div>
	</div>
</section>
   <!-- //content-6-section -->

<br>



<section class="features-4">
	<div class="features4-block py-5">
		<div class="container py-lg-5">
			<h3 class="hny-title text-center">What We <span style="color:#d8703f;">Offer</span></h3>
			
			<div class="features4-grids text-center row mt-5">
				<div class="col-lg-3 col-md-6 features4-grid">
					<div class="features4-grid-inn">
						<span class="fa fa-bullhorn icon-fea4" aria-hidden="true"></span>
						<h5><a href="#URL">Call Us Anytime</a></h5>
						<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 features4-grid sec-features4-grid">
						<div class="features4-grid-inn">
							<span class="fa fa-truck icon-fea4" aria-hidden="true"></span>
							<h5><a href="#URL">Free Shipping</a></h5>
							<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>
	
						</div>
					</div>
					<div class="col-lg-3 col-md-6 features4-grid">
							<div class="features4-grid-inn">
								<span class="fa fa-recycle icon-fea4" aria-hidden="true"></span>
								<h5><a href="#URL">Free Returns</a></h5>
								<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>
		
							</div>
					</div>
						<div class="col-lg-3 col-md-6 features4-grid">
								<div class="features4-grid-inn">
									<span class="fa fa-money icon-fea4" aria-hidden="true"></span>
									<h5><a href="#URL">Secured Payments</a></h5>
									<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.</p>
			
								</div>
							</div>
			</div>
		</div>
	</div>
</section><br><br><br>

	<section class="w3l-team-main">
		<div class="team py-5">
			<div class="container py-lg-5">
					<h3 class="hny-title text-center">
						OUR  <span style="color:#d8703f;">Team</span></h3>
					<div class="row team-row mt-5">
						<div class="col-lg-4 col-sm-6 mb-lg-0 mb-4 team-wrapper position-relative">
							<a href="#"><img src="{{asset('frontend_assests/images/f.jpg')}}" class="team_member img-fluid" alt="Team Member"></a>
							<div class="team_info mt-3 position-absolute">
								<h3><a href="#" class="team_name">Suzan </a></h3>
								<span class="team_role">Founder & CEO</span>
								<ul class="team-social mt-3">
									<li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
									<li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
								</ul>
							</div>
						</div>
							<!-- end team member -->
				
							<div class="col-lg-4 col-sm-6 mb-lg-0 mb-4 team-wrapper position-relative">
								<a href="#"><img src="{{asset('frontend_assests/images/d.jpg')}}" class="team_member img-fluid" alt="Team Member"></a>
								<div class="team_info mt-3 position-absolute">
									<h3><a href="#" class="team_name">Lois </a></h3>
									<span class="team_role">Designer</span>
									<ul class="team-social mt-3">
										<li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
										<li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
									</ul>
								</div>
							</div>
							<!-- end team member -->
							<div class="col-lg-4 col-sm-6 team-wrapper position-relative">
								<a href="#"><img src="{{asset('frontend_assests/images/e.jpg')}}" class="team_member img-fluid" alt="Team Member"></a>
								<div class="team_info mt-3 position-absolute">
									<h3><a href="#" class="team_name">Marry</a></h3>
									<span class="team_role">Marketing</span>
									<ul class="team-social mt-3">
										<li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
										<li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
									</ul>
								</div>
							</div>
							<!-- end team member -->
				</div>
			</div>
	</section>

<br><br><br>
@endsection