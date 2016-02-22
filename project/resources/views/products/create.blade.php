@extends('masterHtml')

@section('content')
	<div class="navbar navbar-default">
		<p style="text-align:right"><a href="/home">Home</a></p>
	</div>
	<div class="container">
		{!! Form::open(['url' => 'products/store']) !!}
			@include('products.partialForm',['button'=>'Add'])
			
		{!! Form::close() !!}
		@include('errors.errors')
	</div>


@stop