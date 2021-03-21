@extends('Layouts.layout1')


@section('head')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection



@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<h1>New Article</h1>
		<form action="{{route('art.store')}}"method="POST">
			@csrf
			<div class="form-group">
				<label>Title</label>
				<input class=" form-control" type="text"  name="title" value="{{old('title')}}" >
					@error('title')
						<p class="help text-danger">{{$errors->first('title')}}</p>
					@enderror
			</div>
			<div class="form-group">
				<label>Excerpt</label>
				<textarea class="form-control " name="excerpt">{{old('excerpt')}}</textarea>
					@error('excerpt')
						<p class="help text-danger">{{$errors->first('excerpt')}}</p>
					@enderror
			</div>
			<div class="form-group">
				<label>Body</label>
				<textarea class="form-control " name="body" rows="10">{{old('body')}}</textarea>
					@error('body')
						<p class="text-danger">{{$errors->first('body')}}</p>
					@enderror
			</div>
			<button type="submit" class="btn btn-block btn-dark mb-3">Submit</button>
		</form>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection