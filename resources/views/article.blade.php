@extends('Layouts.layout1')

@section('head')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@endsection
@section('content')

<div id="wrapper">
	<div id="page" class="container">
				<div class="float-right">
				<a href="articles/create"><button class="btn btn-dark ">Add New Article</button></a>
				</div>
				@foreach($articles as $article)
				
					<h1><a href="{{route('art.show',$article)}}">{{$article->title}}</a></h1>
					<p>{{$article->body}}</p>
				
				@endforeach
			<!-- articles/{{$article->id}} -->
			
		
	</div>
</div>

@endsection