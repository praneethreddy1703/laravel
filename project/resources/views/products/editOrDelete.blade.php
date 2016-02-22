@extends('masterHtml')

@section('content')
	<div class="navbar navbar-default">
		<p style="text-align:right"><a href="/home">Home</a></p>
	</div>
	<div class="container">
		{!! Form::model($product,['url' => 'products/'.$product->id.'/update']) !!}
			@include('products.partialForm',['button'=>'Edit'])
		{!! Form::close() !!}
		{!! Form::open(['url' => 'products/'.$product->id.'/delete']) !!}
			<div class="form-group">
			    {!! form::submit('Delete',['class'=>'btn btn-info form-control'])!!}
			</div>
		{!! Form::close() !!}
		 @include('errors.errors')
	</div>


@stop