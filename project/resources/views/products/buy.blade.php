@extends('masterHtml')
@section('content')

	@foreach($product as $products)
	<p style="text-align:right;font-size:19px"><a href="/products/{{$products->producttype}}">Back</a></p>
		<div class="bg-info">
			<div class="container">
				<p style="text-align:right;font-size:19px"><a href="/products/{{$products->id}}/edit">Edit/Delete</a></p>
				<h3>{{$products->productname}}</h3>
				<h4>{{$products->description}}</h4>
				<h2>Price: {{$products->price}}</h2>
			
			</div>
		</div>
	@endforeach

@stop