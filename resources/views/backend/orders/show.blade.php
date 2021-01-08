@extends('backend_master')
@section('content')

<div class="content-wrapper">   
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">

     <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  <h2 class="page-header"> Gucci</h2>
                </div>
                <div class="col-6">
                  <h5 class="text-right">Date: {{$order->orderdate}}</h5>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-4">
                  <p>Name: <strong>{{ $order->user->name }}</strong><br></br>
                  Email: {{ $order->user->email }} <br><br>
                  <font style="text-indent: 50px;">Invoice: {{ $order->orderno }}</font></p>
                </div>
              </div>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-hover mt-5">
                    <thead>
                      <tr>
                        <th>Qty</th>
                        <th>product Name</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $total=0; @endphp
                      @foreach($order->products as $product)
                      @php
                      $qty = $product->pivot->qty;
                      $subtotal = $product->price*$qty;
                      $total = $total+$subtotal;
                      @endphp
                      <tr>
                        <td>{{$qty}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{number_format($product->price)}}</td>
                        <td>{{number_format($subtotal)}}</td>
                      </tr>
                      @endforeach
                      <tr>
                        <td colspan="3"><h3 class="text-center">Total</h3></td>
                        <td>{{ number_format($total) }}</td>
                      </tr>
                  </table>
                </div>
              </div>
              <div class="col-12 text-right pr-5">
                 {{-- confirm --}}
              <form method="post" action="{{route('orders.update',$order->id)}}" class="d-inline-block" enctype="multipart/form-data">
                <button class="btn btn-gradient-success btn-fw" type="submit">Confirm</button>
                  @csrf
                @method('PUT')
              </form>

              
                <a class="btn btn-gradient-info btn-fw" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a>
          
                
              </div>
            </section>
          </div>
        </div>
      </div>  
@endsection