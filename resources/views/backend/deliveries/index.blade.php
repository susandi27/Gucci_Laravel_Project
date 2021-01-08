@extends('backend_master')
@section('content')

<div class="content-wrapper">
 
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Category List</h4>
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
            <th class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          @php $j=1 @endphp
          @foreach($deliveries as $delivery)
          @if($delivery->status == 0 )
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

              <form method="post" action="{{route('deliveries.update',$delivery->id)}}" class="d-inline-block" enctype="multipart/form-data">
                <button class="btn btn-gradient-success btn-rounded btn-sm" type="submit">Pending</button>
                  @csrf
                @method('PUT')
              </form>

              {{-- delete --}}
              <form method="post" action="{{route('deliveries.destroy',$delivery->id)}}" class="d-inline-block" enctype="multipart/form-data">
                <button class="btn btn-gradient-danger btn-rounded btn-sm" type="submit">Delete</button>
                  @csrf
                @method('DELETE')
              </form>
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