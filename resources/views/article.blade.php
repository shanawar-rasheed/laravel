@extends('Layouts.layout1')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		
		
			
				@foreach($articles as $article)
				
					<h1><a href="articles/{{$article->id}}">{{$article->title}}</a></h1>
					<p>{{$article->body}}</p>
				
				@endforeach
			
			
		
	</div>
</div>

@endsection