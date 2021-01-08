@extends('backend_master')
@section('content')

{{-- Content --}}	
<div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>
                </span> Dashboard
            </h3>

            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                      	<span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row">
           <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
	                <div class="card-body">
		                <img src="{{asset('backend_assets/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
		                <h4 class="font-weight-normal mb-3">Total User<i class="mdi mdi-chart-line mdi-24px float-right"></i>
		                </h4>
	                    <h2 class="mb-5">{{ $count_user }}</h2>
	                    {{-- <h6 class="card-text">Increased by 60%</h6> --}}
	                </div>
               	</div>
            </div>
                
	        <div class="col-md-4 stretch-card grid-margin">
	            <div class="card bg-gradient-info card-img-holder text-white">
	                <div class="card-body">
		                {{-- <img src="{{asset('backend_asset/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" /> --}}
		                <h4 class="font-weight-normal mb-3">Today Orders <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
		                </h4>
		               	<h2 class="mb-5">{{ $today_orders }}</h2>
		                {{-- <h6 class="card-text">Decreased by 10%</h6> --}}
	                </div>
	            </div>
	        </div>


	        <div class="col-md-4 stretch-card grid-margin">
	            <div class="card bg-gradient-success card-img-holder text-white">
	                <div class="card-body">
		                <img src="{{ asset('backend_assets/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
		                <h4 class="font-weight-normal mb-3">Today User <i class="mdi mdi-diamond mdi-24px float-right"></i>
		                </h4>
		                <h2 class="mb-5">{{ $today_users }}</h2>
		                {{-- <h6 class="card-text">Increased by 5%</h6> --}}
	                </div>
	           	</div>
	        </div>
	    </div>
              
        <div class="content-wrapper">   
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">order List</h4>

              <table class="table table-hover mt-5">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Order Date</th>
                    <th>Order No</th>
                    <th>User Name</th>
                    <th>Total</th>
                    <th class="text-center">Status</th>
                  </tr>
                </thead>
                <tbody>
                  @php $j=1 @endphp
                  @foreach($allorders as $allorder)
                  <tr>
                    <td>{{ $j++ }}</td>
                    <td>{{ $allorder->orderdate }}</td>
                    <td>{{ $allorder->orderno }}</td>
                    <td>{{ $allorder->user->name }}</td>
                    <td>{{ $allorder->total }}</td> 
                    <td>
                      <a href="{{ route('orders.show',$allorder->id) }}">
                        <button class="btn btn-gradient-warning btn-rounded btn-sm">Detail</button>
                      </a>

                      <form method="post" action="{{route('orders.update',$allorder->id)}}" class="d-inline-block" enctype="multipart/form-data">
                        <button class="btn btn-gradient-success btn-rounded btn-sm" type="submit">Confirm</button>
                          @csrf
                        @method('PUT')
                      </form>

                      {{-- delete --}}
                      <form method="post" action="{{route('orders.destroy',$allorder->id)}}" class="d-inline-block" enctype="multipart/form-data">
                        <button class="btn btn-gradient-danger btn-rounded btn-sm" type="submit">Delete</button>
                          @csrf
                        @method('DELETE')
                      </form>
          
                    </td>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="{{ asset('backend_assets/assets/js/chart.js') }}"></script>
@endsection