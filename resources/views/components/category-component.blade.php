<!-- <div>
    Well begun is half done. - Aristotle
</div> -->

@foreach($categories as $category)
	<div class="col-sm-4">		
	<ul class="multi-column-dropdown">
	{{-- <h6>Men's Wear</h6> --}}
	<li><a href="{{route('productpage',$category->id)}}">{{$category->name}} </a></li>
	</ul>
	</div>
@endforeach