
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
          @php $j=1 @endphp
          @foreach($orders as $order)
          @if($order->status == 0 )
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

              <form method="post" action="{{route('orders.update',$order->id)}}" class="d-inline-block" enctype="multipart/form-data">
                <button class="btn btn-gradient-success btn-rounded btn-sm" type="submit">Confirm</button>
                  @csrf
                @method('PUT')
              </form>

              {{-- delete --}}
              <form method="post" action="{{route('orders.destroy',$order->id)}}" class="d-inline-block" enctype="multipart/form-data">
                <button class="btn btn-gradient-danger btn-rounded btn-sm" type="submit">Delete</button>
                  @csrf
                @method('DELETE')
              </form>
  
            </td>
          @endif
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection



