@extends('backend_master')
@section('content')

<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
    	<div class="card">
    		<div class="card-body">
    			<h4 class="card-title text-center mb-3">Product Create Form</h4>
    			<form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="codenoInput">Codeno</label>
                        <input type="text" name="codeno" class="form-control @error('codeno') is-invalid @enderror" id="codenoInput" placeholder="Codeno">
                        @error('codeno')
                           	<div class="alert alert_danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nameInput">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="nameInput" placeholder="Name">
                        @error('name')
                            <div class="alert alert_danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="priceInput">Price</label>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="priceInput" placeholder="Price">
                        @error('price')
                            <div class="alert alert_danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="discountInput">Discount</label>
                        <input type="text" name="discount" class="form-control @error('discount') is-invalid @enderror" id="discountInput" placeholder="Discount">
                        @error('discount')
                            <div class="alert alert_danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="descriptionInput">Description</label>
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="descriptionInput" placeholder="Description">
                        @error('description')
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
                        <label>Category</label>
                        <select class="form-control" name="category">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
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
