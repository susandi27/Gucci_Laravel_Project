@extends('backend_master')
@section('content')


<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center mb-3">Category Edit Form</h4>
                <form method="post" action="{{route('categories.update',$category->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="nameInput">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="nameInput"  value="{{$category->name}}">
                        @error('name')
                            <div class="alert alert_danger">{{ $message }}</div>
                        @enderror
                    </div>

                   <div class="form-group">
                            <label for="fileInput">Photo</label>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New</a>
                                </li>
                            </ul>
                            <div class="tab-content my-2" id="myTabContent">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <img src="{{asset($category->photo)}}" width="300">
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror" id="fileInput">
                                @error('photo')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-gradient-primary mr-2">Create</button>
                        <button class="btn btn-light">Cancel</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

