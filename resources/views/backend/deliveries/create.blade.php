@extends('backend_master')
@section('content')

<div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
    	<div class="card">
    		<div class="card-body">
    			<h4 class="card-title text-center mb-3">Delivery Form</h4>
    			<form method="post" action="#" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="dateInput">Delivery Date</label>
                        <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" id="dateInput" placeholder="Name">
                        @error('date')
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
                        <label for="addressInput">Address</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="addressInput" placeholder="Address">
                        @error('address')
                            <div class="alert alert_danger">{{ $message }}</div>
                        @enderror
                    </div>

                     <div class="form-group">
                        <label for="phoneInput">Phone</label>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phoneInput" placeholder="Phone">
                        @error('phone')
                            <div class="alert alert_danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="ordernoInput">Order No</label>
                        <input type="text" name="orderno" class="form-control @error('orderno') is-invalid @enderror" id="ordernoInput" placeholder="Orderno">
                        @error('orderno')
                            <div class="alert alert_danger">{{ $message }}</div>
                        @enderror
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
