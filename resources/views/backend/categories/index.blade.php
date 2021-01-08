@extends('backend_master')
@section('content')

<div class="content-wrapper">
  <div class="col-lg-12 pb-5">
    <a href="{{route('categories.create')}}" class="btn btn-gradient-primary float-right">Add New</a>
  </div>
 
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Category List</h4>
      </p>
      <table class="table table-hover mt-5">
        <thead>
          <tr>
            <th>#</th>
            <th>Product name</th>
            <th>Photo</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @php $j=1 @endphp
          @foreach($categories as $category)
          <tr>
            <td>{{ $j++ }}</td>
            <td>{{ $category->name }}</td>
            <td><img src="{{ $category->photo }}"></td> 
            <td>
              <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning btn-sm">Edit</a>
                <form method="post" action="{{route('categories.destroy',$category->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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