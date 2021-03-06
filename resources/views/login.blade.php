@extends('Layouts.layout2')
@section('loginsection')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
</head>
<body background="images/admin.jpg">
   
    <div class="container"  style="margin-top:45px;">
    
        <div class="row">
            <div class="col-md-4 offset-md-4 ">
            <h2 class="text-white">Login Form</h2>
                <form action="{{route('check')}}" method="post">
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                    @endif
                @csrf
                    <div class="form-group">
                        <label class="text-white" or="email" style="text-color:white">Email</label>
                        <input class="form-control" name="email" type="email" placeholder="Please Enter Your Email" >
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="password">Password</label>
                        <input class="form-control" name="password" type="password" placeholder="Please Enter Your Password" >
                    </div>
                    <button class="btn btn-success btn-block" type="submit">Login</button>
                    <a href="{{route('register')}}">Click  Me To Register New Account</a>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
@endsection