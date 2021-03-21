@extends('Layouts.layout1')


@section('head')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection



@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<h1>Update Article</h1>
		<form action="/stdmanagment/articles/{{$article->id}}"method="POST">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control" value="{{$article->title}}">
			</div>
			<div class="form-group">
				<label>Excerpt</label>
				<textarea class="form-control " name="excerpt" rows="3">{{$article->excerpt}}</textarea>
			</div>
			<div class="form-group">
				<label>Body</label>
				<textarea class="form-control" name="body" rows="10" >{{$article->body}}</textarea>
			</div>
			<button type="submit" class="btn btn-block btn-dark mb-3">Update</button>
		</form>
	</div>
</div>


@endsection