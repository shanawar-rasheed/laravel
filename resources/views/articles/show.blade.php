@extends('Layouts.layout1')
@section('head')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@endsection
@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div class="float-right">
				<a href="/stdmanagment/articles/{{$article->id}}/edit"><button class="btn btn-dark ">Update Article</button></a>
				<!-- <a href="/stdmanagment/articles"><button class="btn btn-dark "> Back </button></a> -->
				</div>
				
			
			<div class="title">
				<h2>{{$article->title}}</h2>
				 </div>
			 <p><img src="images/banner.jpg" alt="" class="image image-full" /></p> 
			{{$article->body}}
		</div>
		
	
	</div>
</div>

@endsection