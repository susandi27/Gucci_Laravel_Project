@extends('frontend_master')

@section('content')

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{route('homepage')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Checkout Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->


<div class="checkout">
		<div class="container">
			<h3 class="animated wow slideInLeft" data-wow-delay=".5s">Your shopping cart contains: <span class="cartNoti"></span> Product</h3>
				
			<div class="checkout-right animated wow slideInUp" data-wow-delay=".5s">
				<table class="table shoppingtable timetable_sub">
					<thead>
						<tr>
							<th colspan="3"> Product </th>
							<th colspan="3"> Qty </th>
							<th> Price </th>
							<th> Total </th>
						</tr>
					</thead>
					<tbody id="shoppingcart_table"></tbody>
					<tfoot id="shoppingcart_tfoot"></tfoot>
				</table>
			</div>
			<div class="checkout-left">	
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">

					<div class="add-review">
							@guest
								<a href="{{ route('login') }}" class="btn checkoutBtn"><h4>Login to Check Out</h4></a>
							@else
								<a href="javascript:void(0)" class="btn checkoutBtn"><h4>Checkout</h4></a>
							@endguest
						{{-- </form> --}}
					</div>
				</div>

				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="{{ route('homepage') }}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
</div>

	{{-- <div class="row mt-5 noneshoppingcart_div text-center">
			

	</div> --}}

<!-- Modal -->

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center p-5">
          <h4>Please Fill your Information</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form method="post" action="{{ route('information.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <input type="name" name="name" class="form-control" id="email1"placeholder="Your name...">
            </div>
            <div class="form-group">
              <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone...">
            </div>
            <div class="form-group">
            	<textarea class="form-control" name="address" id="address" placeholder="Your address..."></textarea>
            </div>

            <a href="{{ route('homepage') }}"><button type="submit" class="btn btn-info btn-block btn-round ">Order Confirm</button></a>
            {{-- <a href="{{ route('homepage') }}"><button type="button" class="btn btn-info btn-block btn-round deliverBtn">Order Confirm</button></a> --}}
          </form>
          

          <div class="text-center text-muted delimiter">Thank you for your order</div>
          <div class="d-flex justify-content-center social-buttons">
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
              <i class="fab fa-twitter"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
              <i class="fab fa-facebook-f"></i>
            </button>
            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
              <i class="fab fa-linkedin"></i>
            </button>
          </di>
        </div>
      </div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
      </div>
  </div>
</div>
@endsection
@section('script')
	<script  src="{{ asset('crontend_asset/js/script1.js') }}"></script>
@endsection


