@extends('backend_master')
@section('content')

<div class="content-wrapper">
 
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Delivered to Customer</h4>
      </p>
      <table class="table table-hover mt-5">
        <thead>
          <tr>
            <th>#</th>
            <th>Delivery Date</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone No</th>
            <th>Order ID</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @php $j=1 @endphp
          @foreach($deliveries as $delivery)
          @if($delivery->status == 1)
          <tr>
            <td>{{ $j++ }}</td>
            <td>{{ $delivery->deliver_date }}</td>
            <td>{{ $delivery->name }}</td> 
            <td>{{ $delivery->address }}</td> 
            <td>{{ $delivery->phone }}</td> 
            <td>{{ $delivery->order->orderno }}</td>
            <td>
              <a href="{{ route('deliveries.show',$delivery->id) }}">
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