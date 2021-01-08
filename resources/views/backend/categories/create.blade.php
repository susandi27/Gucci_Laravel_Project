@extends('backend_master')
@section('content')

<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
    	<div class="card">
    		<div class="card-body">
    			<h4 class="card-title text-center mb-3">Category Create Form</h4>
    			<form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="nameInput">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="nameInput" placeholder="Name">
                        @error('name')
                           	<div class="alert alert_danger">{{ $message }}</div>
                        @enderror
                    </div>

                   <div class="form-group">
                        <label for="fileInput">Photo</label>
                        <input type="file" name="photo" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info @error('photo') is-invalid @enderror" disabled placeholder="Upload Image" id="fileInput">
                            <span class="input-group-append">
                               	<button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                            </span>
                            @error('photo')
                                <div class="alert alert_danger">{{ $message }}</div>
                            @enderror
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
