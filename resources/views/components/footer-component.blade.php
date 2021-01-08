{{-- <div>
    Order your soul. Reduce your wants. - Augustine
</div> --}}
@foreach($products as $product)
<div class="footer-grid-left">
	<a href="{{ route('productdetailpage',$product->id) }}"><img src="{{ $product->photo }}" alt=" " class="img-responsive" style="width: 80; height: 80" /></a>
</div>
@endforeach