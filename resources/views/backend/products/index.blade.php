@extends('backend_master')
@section('content')

<div class="content-wrapper">
  <div class="col-lg-12 pb-5">
    <a href="{{route('products.create')}}" class="btn btn-gradient-primary float-right">Add New</a>
  </div>
  
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Product List</h4>
      </p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            {{-- <th>Code No</th> --}}
            <th>Name</th>
            <th>Photo</th>
            <th>Price</th>
            <th>Discount</th>
            {{-- <th>Description</th> --}}
            <th>Category Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @php $i=1; @endphp
          @foreach($products as $product)
          <tr>
            <td>{{$i++}}</td>
            {{-- <td>{{ $product->codeno }}</td> --}}
            <td>{{$product->name}}</td>
            <td><img src="{{asset($product->photo)}}" width="100"></td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->discount }}</td>
            {{-- <td>{{ $product->description }}</td> --}}
            <td>{{ $product->category->name}}</td>
            
            <td>
              <a href="{{route('products.edit',$product->id)}}" class="btn btn-warning btn-sm">Edit</a>
              <form method="post" action="{{route('products.destroy',$product->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                @csrf
                @method('DELETE')
                <input type="submit" name="btnsubmit" class="btn btn-danger btn-sm" value="Delete">
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  </div>
</div>

@endsection