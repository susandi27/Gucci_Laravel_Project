
@extends('backend_master')
@section('content')

<div class="content-wrapper">
   
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">order Confirm</h4>
      
      </p>
      <table class="table table-hover mt-5">
        <thead>
          <tr>
            <th>#</th>
            <th>Order Date</th>
            <th>Order No</th>
            <th>User Name</th>
            <th>Total</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
            @php $j=1 @endphp
            @foreach($orders as $order)
            @if($order->status == 1)
              <tr>
                <td>{{ $j++ }}</td>
                <td>{{ $order->orderdate }}</td>
                <td>{{ $order->orderno }}</td>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->total }}</td> 
                <td>
                  <a href="{{ route('orders.show',$order->id) }}">
                <button class="btn btn-gradient-warning btn-rounded btn-sm">Detail</button>
              </a>
                </td>
            </tr>
            @endif
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection

