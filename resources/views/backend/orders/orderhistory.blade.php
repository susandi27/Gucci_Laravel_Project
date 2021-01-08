
@extends('backend_master')
@section('content')

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
          @php $j=1; @endphp
          @foreach($orders as $order)
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

              @if($order->status == 1 )
                <button class="btn btn-gradient-success btn-rounded btn-sm" type="submit">Confirm</button>
              @else
              {{-- delete --}}
              <button class="btn btn-gradient-danger btn-rounded btn-sm" type="submit">Delete</button>
              @endif 
            </td>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection



