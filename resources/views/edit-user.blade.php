{{-- @extends('adminlayout.header')
@section('header') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-top:45px;">
    
        <div class="row">
        
            <div class="col-md-4 offset-md-4 ">
                <div class="card">
                    <div class="card-header">Edit</div>
                        <div class="card-body">

                        
                    
            <h2  class="text-white">Eidt Users</h2>
                
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
                <form action="{{route('user.update')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$user->id}}">
                <div class="form-group"> 
                    <label   for="role_id">Role ID</label>
                    <input class="form-control" name="role_id" type="text" placeholder="Please Enter Role ID" value="{{$user->role_id}}">
                </div>
                <div class="form-group">
                    <label  for="role_name">Role Name</label>
                    <input class="form-control" name="role_name" type="text" placeholder="Please Enter Role Name"value="{{$user->role_name}}" >
                </div>
                    <div class="form-group">
                        <label  for="name">Name</label>
                        <input class="form-control" name="name" type="text" placeholder="Please Enter Name"value="{{$user->name}}" >
                    </div>
                    <div class="form-group">
                        <label  for="email">Email</label>
                        <input class="form-control" name="email" type="email" autocomplete="off" placeholder="Please Enter Email" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label  for="password">Password</label>
                        <input class="form-control" name="password" type="password" autocomplete="off" placeholder="Please Enter Password"value="{{$user->password}}" >
                    </div>
                    <button class="btn btn-success btn-block" type="submit">Edit</button>
                    
                </form>
            </div>
        </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>