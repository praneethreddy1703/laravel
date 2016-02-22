@extends('masterHtml')

@section('content')
	<div class="navbar navbar-default">
		<p style="text-align:right"><a href="/home">Home</a></p>
	</div>
	<div class="container">
      <div class="masthead">
        <nav>
          <ul class="nav nav-justified">
            <li><a href="/home">Home</a></li>
            <li><a href="/products">Our Products</a></li>
            <li><a href="/products/create">Add New Products</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </nav>
      </div>
	<div class="container">
		<div class="jumbotron">
			<h1>Welcome To Buy World</h1>
			<h3>Buy what you need</h3>
		</div>
	</div>

@stop