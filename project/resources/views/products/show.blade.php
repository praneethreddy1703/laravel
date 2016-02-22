@extends('masterHtml')
@section('content')
	<div class="navbar navbar-default">
			<p align="right"><a href="/home">Home</a></p>
			<p style="text-align:right"><a href="/products">Back</a></p>
	</div>

	<div class="bg-info">
		<div class="container">
			@foreach($product as $products)
			<a href="/products/{{$products->producttype}}/{{$products->id}}"><h3>{{$products->productname}}</h3></a>
			@endforeach
		</div>
	</div>
@stop